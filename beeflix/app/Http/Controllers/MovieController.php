<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function viewHomePage()
    {
        $movies = Movie::with('genre')->paginate(4);
        return view('home', ['movies' => $movies]);
    }

    public function viewAddMoviePage()
    {
        $genres = Genre::with('movies')->get();
        return view('addMovie', ['genres' => $genres]);
    }

    public function addNewMovie(Request $request)
{
    // Validasi input
    $request->validate([
        'genre' => 'required|exists:genres,id',
        'photo' => 'required|image|max:5000',
        'title' => 'required|string|max:30',
        'description' => 'required|string|max:200',
        'publish_date' => 'required|date|before_or_equal:today'
    ]);

    $photo = $request->file('photo');
    $photoName = time() . '_' . $photo->getClientOriginalName();
    $photo->move(public_path('images'), $photoName);

    Movie::create([
        'genre_id' => $request->genre,
        'title' => $request->title,
        'photo' => 'images/' . $photoName,
        'description' => $request->description,
        'publish_date' => $request->publish_date
    ]);

    return redirect()->route('homePage.view')->with('success', 'New movie added successfully!');
}
    public function deleteMovie($movie_id)
    {
        $toDelete = Movie::with('genre')->find($movie_id);
        // dd($toDelete);

        // Delete the file from the public disk
        Storage::disk('public')->delete($toDelete->photo);

        $toDelete->delete();

        return redirect()->route('homePage.view')->with('success', 'Movie deleted successfully');
    }
}
