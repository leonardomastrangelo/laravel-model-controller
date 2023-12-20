@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1 class="display-1 text-center fw-bold py-5">
        My Movies and Books Shop
    </h1>
    
    <section id="home_movies">
        <div class="container">
            {{-- SECTION TITLE --}}
            <h2>
                Popular Movies
            </h2>
            {{-- MOVIES CONTAINER --}}
            <div class="row py-5">
                @foreach ($movies as $movie)
                <div class="col-3">
                    {{-- movie->image --}}
                    <div>
                        <a href="{{route('movies.show', $movie->id)}}">
                            <img src="{{$movie->image}}" alt="{{$movie->title}}" class="my-fluid">
                        </a>
                    </div>
                    {{-- movie->title --}}
                    <h3>
                        {{$movie->title}}
                    </h3>
                </div>
                @endforeach
            </div>
            {{-- CALL TO ACTION --}}
            <div class="text-center">
                <a href="{{route('movies.index')}}" class="btn btn-primary">
                    See All Movies
                </a>
            </div>
        </div>
    </section>
</main>
@endsection