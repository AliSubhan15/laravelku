<?php

use App\Http\Controllers\BookshelfController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
 
       
            Route::get('/', [BookshelfController::class, 'index'])->name('index');
            Route::get('/create', [BookshelfController::class, 'create'])->name('create');
            Route::post('/', [BookshelfController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [BookshelfController::class, 'edit'])->name('edit');
            Route::put('/{id}', [BookshelfController::class, 'update'])->name('update');
            Route::delete('books/{book}', [BookshelfController::class, 'destroy'])->name('book.destroy');
            Route::get('/print', [BookshelfController::class, 'print'])->name('print');
        
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/books', [BookController::class, 'index'])->name('book');
    Route::get('/book/create', [BookController::class,'create'])->name('book.create');
    Route::post('/books/store', [BookController::class, 'store'])->name('book.store');
   
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
   
     Route::get('/books/{id}/edit', [BookController::class,
    'edit'])->name('book.edit');
     Route::match(['put', 'patch'], '/books/{id}',
    [BookController::class, 'update'])->name('book.update');
    });



require __DIR__ . '/auth.php';
