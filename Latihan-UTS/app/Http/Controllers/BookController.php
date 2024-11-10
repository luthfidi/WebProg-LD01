<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    //
    public function bookList($genre_id=0){
        if($genre_id==0) $books = Book::paginate(3);
        else $books = Book::where('genre_id',$genre_id)->paginate(3);
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
