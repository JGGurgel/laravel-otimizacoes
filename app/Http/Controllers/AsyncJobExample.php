<?php

namespace App\Http\Controllers;

use App\Jobs\SomeAsyncJob;
use App\Models\Book;
use Illuminate\Http\Request;

class AsyncJobExample extends Controller
{
    function __invoke()
    {
        $book = Book::first();
        SomeAsyncJob::dispatch($book);
    }
}
