<h1>Prepared By: Jewel V. Coranez</h1>

@foreach ($books as $book)
    <h2>{{ $book['title'] }}</h2>
    <p>Genre: {{ $book['genre'] }}</p>
    <p>Year: {{ $book['year'] }}</p>

    <a href="{{ route('books.show', $book['id']) }}">View Details</a>

    <hr>
@endforeach