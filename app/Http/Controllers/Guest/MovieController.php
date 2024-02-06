<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Inizializzo una variabile che fa la get all sul Model Movie 
        $movies = Movie::all();
        // dd($movies);
        return view('guest.movies.index', compact('movies'));

    }
        /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        //
        $movie = Movie::findOrFail($id);
        // dd($movie);
        return view('guest.movies.show', compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //mi serve una var all'inizio per salvarti i dati della request che provengono dal Form
        $newMovieData = $request->all();

        //mi serve una var per istanziare un new Movie() da mandare al DB
        $newMovie = new Movie();
        
        $newMovie->title = $newMovieData['title'];
        $newMovie->description = $newMovieData['description'];
        $newMovie->thumb = $newMovieData['thumb'];
        $newMovie->series = $newMovieData['series'];
        $newMovie->sale_date = $newMovieData['sale_date'];
        $newMovie->type = $newMovieData['type'];
        $newMovie->save();
        dd($newMovie);

        return redirect()->route('guest.movies.show', $newMovie->id);


    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
