<?php

namespace App\Console\Commands;

use App\Jobs\SyncGoogleBooksJob;
use Illuminate\Console\Command;

class SyncGoogleBooks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-google-books';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        SyncGoogleBooksJob::dispatch();
    }
}
