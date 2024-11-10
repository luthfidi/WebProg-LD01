<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    //
    public function bookList($genre_id){
        $books = Book::where('genre_id',$genre->id)->paginate(3);
        $genres = Genre::all();

        $datas = [
            'books' => $books,
            'genres' => $genres
        ];

        return view('book-list', $datas);

    }

    public function bookDetail(){
        return view('book-detail');
    }
}
