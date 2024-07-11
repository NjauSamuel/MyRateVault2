@extends('base')

@section('title', 'Python - Laravel')

@section('content')

    <div>

        <h1 class="heading">My Top 10 Movies</h1>

        <p class="description">These are my all-time favourite movies.</p>

        @foreach ($movies as $movie)

            <div class="card">

                <div
                    class="front"
                    style=" background-image: url('{{ $movie->img_url }}'); ">
                    <p class="large">1</p>
                </div>

                <div class="back">
                    <div>

                        <div class="title">
                            {{ $movie->title }} <span class="release_date"> {{ $movie->year }} </span>
                        </div>

                        <div class="rating">
                            <label> {{ number_format($movie->rating, 1) }} </label>
                            <i class="fas fa-star star"></i>
                        </div>

                        <p class="review"> {{ $movie->review }} </p>

                        <p class="overview">
                            {{ $movie->description}}
                        </p>

                        <a href="{{ route('my-movies.edit', $movie) }}" class="button">Update</a>
                        <a href="#" class="button delete-button">Delete</a>

                    </div>
                </div>
            </div>

        @endforeach

    </div>

    <div class="mx-auto max-w-max container add">
        <a href="#" class="button" >
            Add Movie
        </a>
    </div>

@endsection
