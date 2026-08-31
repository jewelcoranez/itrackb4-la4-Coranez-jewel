<?php  
  
namespace App\Http\Controllers;  
  
class BookController extends Controller  
{  
    private function books()  
    {  
        return [  
            1 => ['id' => 1, 'title' => 'The Alchemist', 'author' => 'Paulo Coelho', 'genre' => 'Fiction', 'year' => 1988],  
            2 => ['id' => 2, 'title' => 'Harry Potter and the Sorcerer\'s Stone', 'author' => 'J.K. Rowling', 'genre' => 'Fantasy', 'year' => 1997],  
            3 => ['id' => 3, 'title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'genre' => 'Fantasy', 'year' => 1937],  
            4 => ['id' => 4, 'title' => 'The Little Prince', 'author' => 'Antoine de Saint-Exupéry', 'genre' => 'Fiction', 'year' => 1943],  
            5 => ['id' => 5, 'title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'genre' => 'Romance', 'year' => 1813],  
            6 => ['id' => 6, 'title' => '1984', 'author' => 'George Orwell', 'genre' => 'Dystopian', 'year' => 1949],  
            7 => ['id' => 7, 'title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'genre' => 'Fiction', 'year' => 1925],  
        ];  
    }  
  
    public function index()  
    {  
        $books = $this->books();  
  
        return view('books.index', ['books' => $books]);  
    }  
  
    public function show($id)  
    {  
        $books = $this->books();  
  
        if (!isset($books[$id])) {  
            abort(404);  
        }  
  
        $book = $books[$id];  
  
        return view('books.show', ['book' => $book]);  
    }  
  
    public function filter($genre = null)  
    {  
        $books = $this->books();  
        $filteredBooks = [];  
  
        if ($genre == null) {  
            $filteredBooks = $books;  
        } else {  
            foreach ($books as $book) {  
                if ($book['genre'] == $genre) {  
                    $filteredBooks[] = $book;  
                }  
            }  
        }  
  
        return view('books.filter', ['books' => $filteredBooks, 'genre' => $genre]);  
    }  
}