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
                                Numero di mulini attivi: {{ $movie->sale_date }}
                            </p>
                            <div class="card-image">
                                <img class="w-50" src="{{  $movie->thumb }}" alt="{{ $movie->title }}'s picture">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
