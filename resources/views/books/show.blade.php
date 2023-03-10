@extends('layout')


@section('content')

  <h1>Book ID: {{ $book->id }}</h1>
  <h3>{{ $book->title }}</h3>
  <p>{{ $book->desc }}</p>

  <h3>Categories:</h3>

  <ul>
    @foreach($book->categories as $category)
      <li>{{ $category->name }}</li>
    @endforeach
  </ul>

  <hr>
  <a class="btn btn-secondary" href="{{ route('books.index') }}">Back</a>
  


@endsection
