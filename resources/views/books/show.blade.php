<h1>{{ $book['title'] }}</h1>

<p>ID: {{ $book['id'] }}</p>
<p>Title: {{ $book['title'] }}</p>
<p>Author: {{ $book['author'] }}</p>
<p>Genre: {{ $book['genre'] }}</p>
<p>Year: {{ $book['year'] }}</p>



<a href="{{ route('books.index') }}">Back to list</a>