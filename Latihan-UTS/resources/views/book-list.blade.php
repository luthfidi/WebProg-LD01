@extends('layout')
@section('content')

<div class="row">
    <div class="col">
    <div class="btn-group" role="group" aria-label="Basic outlined example">
        @foreach ($genres as $genre)
        <a href="{{route('book.index', ['genre_id'=>$genre->    id])}}" class="btn btn-outline-dark">{{$genre->name}}</a>
        @endforeach
    </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th>cover</th>
                    <th>name</th>
                    <th>genre</th>
                    <th>detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>
                            <img src="{{ asset($book->photo)}}" alt="" width="80px">
                        </td>
                        <td>{{$book->name}}</td>
                        <td>{{$book->genre->name}}</td>
                        <td><a class="btn btn-outline-dark" href="{{ route('book.detail', ['book'=>$book->id]) }}">detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$books->links()}}
    </div>
</div>

@endsection