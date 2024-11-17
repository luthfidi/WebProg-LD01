<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    public function bookList(Request $request, $genre_id=0)
    {
        $books = Book::query();
        
        // Filter berdasarkan genre (fungsi sebelumnya)
        if($genre_id != 0) {
            $books = $books->where('genre_id', $genre_id);
        }
        
        // Tambahan fitur pencarian
        if($request->search) {
            $books = $books->where('name', 'like', '%' . $request->search . '%');
        }
        
        $books = $books->paginate(3);
        $genres = Genre::all();

        $datas = [
            'books' => $books,
            'genres' => $genres
        ];

        return view('book-list', $datas);
    }

    public function bookDetail(Book $book){
        return view('book-detail',['book'=>$book]);
    }
}