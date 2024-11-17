@extends('layout')
@section('content')
<div class="row">
    <div class="col-md-4 mb-4">
        <img src="{{ asset($book->photo) }}" alt="{{ $book->name }}" class="img-fluid rounded">
    </div>
    <div class="col-md-8">
        <h2 class="mb-4">{{ $book->name }}</h2>
        
        <table class="table">
            <tr>
                <th width="150">Description</th>
                <td>{{ $book->description }}</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>{{ $book->genre->name }}</td>
            </tr>
            <tr>
                <th>Publish Date</th>
                <td>{{ $book->publish_date->format('d F Y') }}</td>
            </tr>
        </table>

        <h4 class="mt-4 mb-3">Author Information</h4>
        <div class="row">
            <div class="col-md-4 mb-3">
                <img src="{{ asset($book->author->photo) }}" alt="{{ $book->author->name }}" class="img-fluid rounded">
            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <th width="120">Name</th>
                        <td>{{ $book->author->name }}</td>
                    </tr>
                    <tr>
                        <th>Birth Date</th>
                        <td>{{ $book->author->birth_date->format('d F Y') }}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>{{ $book->author->birth_date->age }} Years</td>
                    </tr>
                    
                </table>
                <div class="mt-4">
                    <a href="{{ route('book.index') }}" class="btn btn-outline-primary">Back to Book List</a>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection