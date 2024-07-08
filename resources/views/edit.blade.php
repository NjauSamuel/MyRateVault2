{{-- resources/views/edit.blade.php --}}
@extends('base')

@section('title', 'Edit Movies')

@section('content')
<div class="content">
  <h1 class="text-2xl font-bold">Title: {{ $movie->title }}</h1>
  <p class="description">Edit Movie Rating</p>

  

  <form action="" method="POST">
      @csrf
      @method('PUT')

      <div>
          <label for="rating" class="block text-sm font-medium text-gray-700">Your Rating Out of 10 e.g. 7.5</label>
          <input type="text" name="rating" id="rating" value="{{ old('rating', $movie->rating) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
          @error('rating')
              <div class="text-red-600 text-sm">{{ $message }}</div>
          @enderror
      </div>

      <div>
          <label for="review" class="block text-sm font-medium text-gray-700">Your Review</label>
          <input type="text" name="review" id="review" value="{{ old('review', $movie->review) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
          @error('review')
              <div class="text-red-600 text-sm">{{ $message }}</div>
          @enderror
      </div>

      <div>
          <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Done</button>
      </div>
  </form>

</div>
@endsection
