@extends('base')

@section('title', 'Python - Laravel')

@section('content')

    <div>
        <h1 class="heading">My Top 10 Movies</h1>

        <p class="description">These are my all-time favourite movies.</p>

        <!-- style="
                    background-image: url('https://www.shortlist.com/media/images/2019/05/the-30-coolest-alternative-movie-posters-ever-2-1556670563-K61a-column-width-inline.jpg');
                "> -->

        @foreach ($movies as $movie)
        
        

        <div class="card">
            <div
                class="front"
                style="
                    background-image: url('{{ $movie->img_url }}');
                ">
                <p class="large">1</p>
            </div>

            <div class="back">
                <div>
                    <div class="title">
                    {{ $movie->title }} <span class="release_date"> {{ $movie->year }}</span>
                    </div>

                    <div class="rating">
                        <label>{{ $movie->rating }}</label>
                        <i class="fas fa-star star"></i>
                    </div>
                    <p class="review">{{ $movie->review }}</p>

                    <p class="overview"> {{ $movie->description }} </p>

                    <a href="#" class="button">Update</a>
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
