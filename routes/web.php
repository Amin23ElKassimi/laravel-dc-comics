<?php

use Illuminate\Support\Facades\Route;
//Richiamare i Copntroller Nelle Routes
use App\Http\Controllers\Guest\MovieController as GuestMovieController;
use App\Models\Movie;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware g 
*/


Route::get('/', function () {
    // Dichiaro la variabile che conterra' i dati all'interno della tabella movies
    $movies = Movie::all();
    return view('guest.movies.index', compact('movies'));
});


// Route::resource('movies', GuestPastaController::class);



Route::get('/movies', [GuestMovieController::class, 'index'])->name('guest.movies.index');
Route::post('/movies', [GuestMovieController::class, 'store'])->name('guest.movies.store');
// La Route che chiama il metodo Create va deifinita prima della Route che richiama il metodoo Show
Route::get('/movies/create', [GuestMovieController::class, 'create'])->name('guest.movies.create');
Route::get('/movies/{movies}', [GuestMovieController::class, 'show'])->name('guest.movies.show');
// La Route che chiama il metodo Edit
Route::put('/movies/{movies}', [GuestMovieController::class, 'update'])->name('guest.movies.update');
Route::get('/movies/{movies}/edit', [GuestMovieController::class, 'edit'])->name('guest.movies.edit');

 