<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheExample extends Controller
{
    function __invoke()
    {
        $books = Cache::remember('books', Carbon::now()->addDay(1), function () {
            return Book::all();
        });
    }
}
