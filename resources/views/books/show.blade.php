@extends('layouts.app')

@section('title', $book->title)

@section('content')
<main>
    <h1 class="display-1 text-center fw-bold py-5">
        {{$book->title}}
    </h1>
    
    <section id="book">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <img src="{{$book->cover_image}}" alt=" {{$book->title}}" class="my-fluid">
                </div>
                <div class="col-7 d-flex justify-content-center align-items-center">
                    <p>
                        {{$book->plot}}
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection