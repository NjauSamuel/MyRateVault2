@extends('base')

@section('title', 'Python - Laravel')

@section('content')

    <div>
        <h1 class="heading">My Top 10 Movies</h1>

        <p class="description">These are my all-time favourite movies.</p>

        <div class="card">
            <div
                class="front"
                style="
                    background-image: url('https://www.shortlist.com/media/images/2019/05/the-30-coolest-alternative-movie-posters-ever-2-1556670563-K61a-column-width-inline.jpg');
                ">
                <p class="large">1</p>
            </div>

            <div class="back">
                <div>
                    <div class="title">
                    Drive <span class="release_date">(2011)</span>
                    </div>
                    <div class="rating">
                    <label>7.5</label>
                    <i class="fas fa-star star"></i>
                    </div>
                    <p class="review">"Loved it!"</p>
                    <p class="overview">
                    A mysterious Hollywood stuntman and mechanic moonlights as a
                    getaway driver and finds himself in trouble when he helps out his
                    neighbor in this action drama.
                    </p>

                    <a href="#" class="button">Update</a>
                    <a href="#" class="button delete-button">Delete</a>

                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-max container add">
        <a href="#" class="button" >
            Add Movie
        </a>
    </div>

@endsection
