@extends('layouts.app')

@section('main-content')

    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $movie->title }}
                            </h1>
                            <p>
                                Serie: {{ $movie->series }}
                            </p>
                            <p>
                                Type: {{ $movie->type }}
                            </p>
                            <p>
                                Price: {{ $movie->price }}&euro;
                            </p>

                            <p>
                                Sale Date:: {{ $movie->sale_date }}
                            </p>
                            <div class="card-image">
                                <img class="w-50" src="{{  $movie->thumb }}" alt="{{ $movie->title }}'s picture">
                            </div>
                            <div class="actions mb-3 pt-3">
                                <a href="{{ route('guest.movies.edit', $movie->id) }}">
                                    <button class="btn btn-primary">
                                        Modifica questo il Film
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
