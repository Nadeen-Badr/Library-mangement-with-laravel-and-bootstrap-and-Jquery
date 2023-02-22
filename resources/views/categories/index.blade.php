@extends('layout')

@section('title')
    All categories
@endsection

@section('content')

<h1>All categories</h1>
@auth
<a class="btn btn-primary" href="{{ route('categories.create') }}">Create</a>
@endauth
@foreach($categories as $category)

<hr>

  <h3>{{ $category->name }}</h3>

<a class="btn btn-success" href="{{ route('categories.show', $category->id) }}">Show</a>
@auth
<a class="btn btn-danger" href="{{ route('categories.delete', $category->id) }}">Delete</a>
@endauth
@endforeach

{{ $categories->render() }}
<hr>
<a class="btn btn-secondary" href="{{ route('books.index') }}">Back</a>
@endsection

