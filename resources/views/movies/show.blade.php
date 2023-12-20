@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<main>
    <h1 class="display-1 text-center fw-bold py-5">
        {{$movie->title}}
    </h1>
    
    <section id="movie">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <img src="{{$movie->image}}" alt=" {{$movie->title}}" class="my-fluid">
                </div>
                <div class="col-7 d-flex justify-content-center align-items-center">
                    <ul>
                        <li>
                            Original title : 
                            <span>
                                {{$movie->original_title}}
                            </span>
                        </li>
                        <li>
                            Language : 
                            <span>
                                {{$movie->language}}
                            </span>
                        </li>
                        <li>
                            vote : 
                            <span>
                                {{$movie->vote}}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection