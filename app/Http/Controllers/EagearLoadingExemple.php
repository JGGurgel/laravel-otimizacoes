<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class EagearLoadingExemple extends Controller
{
    function __invoke()
    {
        /**
        Lazy Loading 
        */
        $books = Book::all();

        foreach ($books as $book) {
            $book->author->name;
        }

        /**
        Eager Loading 
        */
        // $books = Book::with('author')->get();
        
        // foreach ($books as $book) {
        //     $book->author->name;
        // }
    }
}
