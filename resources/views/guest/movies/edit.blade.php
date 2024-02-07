@extends('layouts.app')

@section('main-content')
    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                    Aggiungi un nuovo Film:
                </h1>
                {{-- Far Funzionare l'error --}}
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{-- INviare alla store i dati tarmite metodo Post non dimenticarsi il @csrf --}}
                 <form action="{{ route('guest.movies.update', $movie->id)  }}" method="POST">
                    @csrf

                    {{-- metodo custom --}}
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Movie title:
                        </label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old( 'title' ,$movie->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="watermill" class="form-check-label">Movie description:</label>
                        <input type="text" name="description" id="description" class="form-check-inline" value="{{ old( 'title' ,$movie->description) }}">
                    </div>

                    <div class="mb-3">
                        <label for="country" class="form-label">Price &euro;:</label>
                        <input type="text" name="price" id="price" class="form-control" value="{{ old( 'price' ,$movie->price) }}">
                    </div>

                    <div class="mb-3">
                        <label for="size" class="form-label">Series:</label>
                        <input type="text" name="series" id="series" class="form-control" value="{{ old( 'series' ,$movie->series) }}">
                    </div>

                    <div class="mb-3">
                        <label for="size" class="form-label">Sale Date:</label>
                        <input type="text" name="sale_date" id="sale_date" class="form-control"value="{{ old( 'sale_date' ,$movie->sale_date) }}">
                    </div>

                    <div class="mb-3">
                        <label for="mills_no" class="form-label">Type:</label>
                        <input type="text" name="type" id="type" class="form-control"value="{{ old( 'type' ,$movie->type) }}">
                    </div>

                    <div class="mb-3">
                        <label for="picture" class="form-label">URL thumb</label>
                        <input type="text" name="thumb" id="thumb" class="form-control"value="{{ old( 'thumb' ,$movie->thumb) }}">
                    </div>


                    <button type="submit" class="btn btn-primary">Add New Movie</button>
                    <button type="reset"  class="btn btn-warning">Clean il form</button>
                </form>
            </div>
        </div>
    </section>
@endsection
