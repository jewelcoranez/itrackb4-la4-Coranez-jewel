@extends('layouts.app')

@section('title', 'Books')

@section('content')

    <h2 class="mt-4">Book List</h2>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['author'] }}</td>
                    <td>{{ $book['genre'] }}</td>

                    <td>
                        {{ $book['year'] }}

                        @if ($book['year'] >= 1950)
                            <span class="badge bg-success">Recent</span>
                        @else
                            <span class="badge bg-secondary">Classic</span>
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('books.show', $book['id']) }}" class="btn btn-primary btn-sm">
                            View Details
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No books are available in the library right now.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection