@extends('layout')

@section('title')
    All books
@endsection

@section('content')

<h3>Search  book</h3>
<input type="text" id="keyword">
<a class="btn btn-outline-info btn-sm" href="{{ route('books.index') }}">Refresh</a>

{{-- @auth

<h1>Notes:</h1>
@foreach(Auth::user()->notes as $note)
  <p>{{ $note->content }}</p>
@endforeach

<a href="{{ route('notes.create') }}" class="btn btn-info">Add new note</a>

@endauth --}}

<hr>
@auth
<a class="btn btn-primary" href="{{ route('books.create') }}">Create Book</a>
<a class="btn btn-info" href="{{ route('categories.create') }}">Create category</a>

@endauth
<a class="btn btn-secondary" href="{{ route('categories.index') }}">View all categories</a>
<hr>
<h1>All books</h1>
<hr>

<div id="allBooks">
@foreach($books as $book)


  <h3>{{ $book->title }}</h3>


<p>{{ $book->desc }}</p>

 @auth
  @if(Auth::user()->is_admin == 1)
    <a class="btn btn-danger" href="{{ route('books.delete', $book->id) }}">Delete</a>



  @endif
  <a class="btn btn-warning" href="{{ route('books.edit', $book->id) }}">Update</a>
@endauth
<a class="btn btn-success" href="{{ route('books.show', $book->id) }}">Show</a>
@endforeach
</div>

{{-- {{ $books->render() }} --}}

@endsection

@section('scripts')
<script>
  $('#keyword').keyup(function(){
    let keyword = $(this).val()
    let url = "{{ route('books.search') }}" + "?keyword=" + keyword

    $.ajax({
      type: "GET",
      url: url,
      contentType: false,
      processData: false,
      success: function (data)
      {
        $('#allBooks').empty()

        for (book of data) {
          $('#allBooks').append(`
            <h3>${book.title}</h3>
            <p>${book.desc}</p>
          `)
        }
      }
    })
  })
</script>
@endsection
