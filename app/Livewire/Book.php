<?php

namespace App\Livewire;

use App\Models\GoogleBook;
use App\Models\Book as BookModel;
use App\Services\GoogleBookService;
use Livewire\Component;
use Livewire\WithPagination;

class Book extends Component
{
    use WithPagination;

    public $search = '', $author = '';

    public $searchSource = 'local'; // 'local', 'google', 'both'
    public $showGoogleResults = false;
    public $googleBooks = [];
    public $isSearchingGoogle = false;

    public $showModal = false;
    public $editing = false;
    public $bookId = null;
    public $form = [
        'title' => '',
        'authors' => '',
        'publisher' => '',
        'categories' => '',
        'isbn' => '',
        'stock' => 1,
        'thumbnail' => '',
        'description' => '',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
        $this->showGoogleResults = false;
        $this->googleBooks = [];
    }

    public function searchInGoogle()
    {
        if (empty($this->search)) {
            $this->addError('search', 'Please enter a search term');
            return;
        }

        $this->showGoogleResults = true;
        $this->isSearchingGoogle = true;

        try {
            $googleBookService = new GoogleBookService();
            $this->googleBooks = $googleBookService->search($this->search);

            if (empty($this->googleBooks)) {
                session()->flash('google_message', 'No se encontraron libros en Google Books para: ' . $this->search);
            } else {
                session()->flash('google_message', 'Se encontraron ' . count($this->googleBooks) . ' libros en Google Books');
            }


        } catch (\Exception $e) {
            \Log::error('Error buscando en Google Books: ' . $e->getMessage());
            session()->flash('google_error', 'Error al buscar en Google Books. Intenta nuevamente.');
            $this->googleBooks = [];
        }

        $this->isSearchingGoogle = false;
    }

    public function addGoogleBookToLibrary($googleBookId)
    {
        try {
            $googleBook = GoogleBook::find($googleBookId);

            if (!$googleBook) {
                session()->flash('error', 'Libro no encontrado');
                return;
            }

            $book = BookModel::where('google_book_id', $googleBook->id)->first();

            if ($book) {
                $book->increment('stock');
            } else {
                $book = BookModel::create([
                    'title' => $googleBook->title,
                    'authors' => $googleBook->authors,
                    'thumbnail' => $googleBook->thumbnail,
                    'publisher' => $googleBook->publisher,
                    'published_date' => $googleBook->published_date,
                    'categories' => 'Sin categorizar', // Podrías mejorar esto
                    'isbn' => null,
                    'stock' => 1,
                    'description' => $googleBook->description,
                    'google_book_id' => $googleBook->id,
                ]);
            }

            session()->flash('success', "'{$book->titulo}' agregado a la biblioteca");
            $this->render();

        } catch (\Exception $e) {
            \Log::error('Error agregando libro a biblioteca: ' . $e->getMessage());
            session()->flash('error', 'Error al agregar el libro a la biblioteca');
        }
    }

    public function hideGoogleResults()
    {
        $this->showGoogleResults = false;
        $this->googleBooks = [];
    }

    private function resetForm()
    {
        $this->form = [
            'title' => '',
            'authors' => '',
            'publisher' => '',
            'categories' => '',
            'isbn' => '',
            'stock' => 1,
            'thumbnail' => '',
            'description' => '',
        ];
    }

    public function create()
    {
        $this->resetForm();
        $this->editing = false;
        $this->showModal = true;
    }

    public function store()
    {
        $this->validate([
            'form.title' => 'required|string|max:255',
            'form.authors' => 'nullable|string|max:255',
            'form.publisher' => 'nullable|string|max:255',
            'form.categories' => 'nullable|string|max:255',
            'form.isbn' => 'nullable|string|max:50',
            'form.stock' => 'required|integer|min:1',
        ]);

        try {
            BookModel::create($this->form);
            $this->showModal = false;
            $this->resetForm();
            $this->showModal = false;
            session()->flash('success', 'Libro creado exitosamente');

        } catch (\Exception $e) {
            \Log::error('Error al crear libro: ' . $e->getMessage());
            session()->flash('error', 'Error al crear el libro');
        }
    }

    public function edit($id)
    {
        $book = \App\Models\Book::findOrFail($id);

        $this->bookId = $book->id;
        $this->form = $book->toArray();
        $this->editing = true;
        $this->showModal = true;
    }

    public function update()
    {
        $this->validate([
            'form.title' => 'required|string|max:255',
            'form.authors' => 'nullable|string|max:255',
            'form.publisher' => 'nullable|string|max:255',
            'form.categories' => 'nullable|string|max:255',
            'form.isbn' => 'nullable|string|max:50',
            'form.stock' => 'required|integer|min:1',
        ]);

        BookModel::findOrFail($this->bookId)->update($this->form);

        session()->flash('success', 'Libro actualizado correctamente');
        $this->resetForm();
        $this->showModal = false;
    }
    public function render()
    {
        $query = BookModel::query();

        if (!empty($this->search)) {
            $query->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('authors', 'like', '%' . $this->search . '%')
                ->orWhere('publisher', 'like', '%' . $this->search . '%')
                ->orWhere('isbn', 'like', '%' . $this->search . '%')
                ->when(is_numeric($this->search), function ($query) {
                    $query->orWhere('id', $this->search);
                });
        }

        $books = $query->paginate(perPage: 5);

        return view('livewire.book', compact('books'));
    }
}
