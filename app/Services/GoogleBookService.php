<?php

namespace App\Services;

use App\Models\Book;
use App\Models\GoogleBook;

class GoogleBookService
{
    private $client, $url, $key;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
        $this->url = config('services.google_books.base_url');
        $this->key = config('services.google_books.api_key');
    }

    public function search($query)
    {
        try {
            $response = $this->client->get($this->url, [
                'query' => [
                    'q' => $query,
                    'key' => $this->key,
                    'maxResults' => 10
                ]
            ]);

            if ($response->getStatusCode() != 200) {
                return [];
            }

            $items = json_decode($response->getBody()->getContents())->items ?? [];
            $books = [];

            \Log::debug($items);
            foreach ($items as $item) {
                $info = $item->volumeInfo ?? [];
                $books[] = GoogleBook::firstOrCreate(
                    [
                        'google_id' => $item->id,
                    ],
                    [
                        'title' => $info->title ?? 'Sin título',
                        'authors' => isset($info->authors) ? implode(', ', $info->authors) : null,
                        'publisher' => $info->publisher ?? null,
                        'published_date' => $info->publishedDate ?? null,
                        'description' => $info->description ?? null,
                        'thumbnail' => $info->imageLinks->thumbnail ?? null,
                    ]
                );
            }
            return $books;

        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            \Log::error($e->getMessage());
            return [];

        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return [];

        }
    }
}
