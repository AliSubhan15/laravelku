<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Bookshelf;
use Illuminate\Http\Request;
use App\Imports\BooksImport;
use Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BooksExport;
use PDF;

class BookshelfController extends Controller
{
    public function print()
        {
        $books = Book::all();
        $pdf = PDF::loadview('books.print', ['books' => $books]);
        return $pdf->download('data_buku.pdf');
        }

        public function destroy(string $id)
        { 
         $book = Book::findOrFail($id);
         Storage::delete('public/cover_buku/'.$book->cover);
         
         $book->delete();
         $notification = array(
         'message' => 'Data buku berhasil dihapus',
         'alert-type' => 'success'
         );
         return redirect()->route('book')->with($notification);
        }
        
}
