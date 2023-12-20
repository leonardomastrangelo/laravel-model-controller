@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <main>
        <h1 class="display-1 text-center fw-bold py-5">
        Movies
        </h1>

        <section id="movies">
        <div class="container">
            {{-- MOVIES CONTAINER --}}
            <div class="row py-5">
                @foreach ($movies as $movie)
                <div class="col-4 py-3">
                    {{-- movie->image --}}
                    <div class="my_card">
                        <div>
                            <a href="{{route('movies.show', $movie->id)}}">
                                <img src="{{$movie->image}}" alt="{{$movie->title}}" class="my-fluid">
                            </a>
                        </div>
                        {{-- movie->title --}}
                        <h3>
                            {{$movie->title}}
                        </h3>
                        <div class="py-3">
                            <h4 class="pb-1">
                                <i class="fa-solid fa-globe"></i>
                                {{$movie->language}}
                            </h4>
                            <h4>
                                <i class="fa-brands fa-imdb"></i>
                                {{$movie->vote}}
                            </h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
        {{-- <ul>
            @foreach ($movies as $movie)
                <li>
                    <a href="{{route('movies.show', $movie->id)}}">{{$movie->title}}</a>
                </li>
            @endforeach
        </ul> --}}
    </main>
@endsection