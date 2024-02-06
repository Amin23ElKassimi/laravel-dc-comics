<?php

use Illuminate\Support\Facades\Route;
//Richiamare i Copntroller Nelle Routes
use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\Guest\MovieController as GuestMovieController;

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
    return view('pages.home');
});


// Route::resource('pastas', GuestPastaController::class);



Route::get('/movies', [GuestMovieController::class, 'index'])->name('guest.movies.index');
Route::post('/movies', [GuestMovieController::class, 'store'])->name('guest.movies.store');
// La Route che chiama il metodo Create va deifinita prima della Route che richiama il metodoo Show
Route::get('/movies/create', [GuestMovieController::class, 'create'])->name('guest.movies.create');
Route::get('/movies/{movies}', [GuestMovieController::class, 'show'])->name('guest.movies.show');

 