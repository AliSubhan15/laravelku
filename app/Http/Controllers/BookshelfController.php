<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use PDF;

class BookshelfController extends Controller
{
    public function print()
        {
        $books = Book::all();
        $pdf = PDF::loadview('books.print', ['books' => $books]);
        return $pdf->download('data_buku.pdf');
        }
        
}
