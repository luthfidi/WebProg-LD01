@extends('layout')
@section('content')
<div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th>Cover</th>
                <th>Name</th>
                <th>Genre</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>
                        <img src="{{ asset($book->photo) }}" alt="{{ $book->name }}">
                    </td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->genre->name }}</td>
                    <td>
                        <a href="{{ route('book.detail', ['book' => $book->id]) }}" 
                           class="btn btn-outline-primary btn-sm">
                            View Details
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $books->links() }}
</div>
@endsection