@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <main>
        <h1 class="display-1 text-center fw-bold py-5">
        Books
        </h1>

        <section id="books">
        <div class="container">
            {{-- BOOKS CONTAINER --}}
            <div class="row py-5">
                @foreach ($books as $book)
                <div class="col-4 py-3">
                    {{-- book->image --}}
                    <div class="my_card">
                        <div>
                            <a href="{{route('books.show', $book->id)}}">
                                <img src="{{$book->cover_image}}" alt="{{$book->title}}" class="my-fluid">
                            </a>
                        </div>
                        {{-- book->title --}}
                        <h3>
                            {{$book->title}}
                        </h3>
                        <div class="py-3">
                            <p>
                            {{substr($book->plot, 0, 150) . '...'}}
                            </p>
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