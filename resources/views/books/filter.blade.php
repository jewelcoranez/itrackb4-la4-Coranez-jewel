<h1>Books</h1>

@if ($genre)
    <p>Showing books in genre: {{ $genre }}</p>
@else
    <p>Showing all books</p>
@endif

@foreach ($books as $book)
    <h2>{{ $book['title'] }}</h2>
    <p>Author: {{ $book['author'] }}</p>
    <p>Genre: {{ $book['genre'] }}</p>
    <p>Year: {{ $book['year'] }}</p>

    <a href="{{ route('books.show', $book['id']) }}">View Details</a>

    <hr>
@endforeach

<p>Name: Jewel V. Coranez</p>

<a href="{{ route('books.index') }}">Back to Books</a>