@extends('layouts.app')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3 mb-3">
                    @foreach ($movies as $movie)
                        <div class="col">
                            <a href="{{ route('guest.movies.show', $movie->id) }}">
                                <div class="card">
                                    <img src="{{ $movie->thumb }}" alt="{{ $movie->title }} picture">
                                    <div class="card-body">
                                        <p class="text-uppercase">
                                            {{ $movie->title}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
