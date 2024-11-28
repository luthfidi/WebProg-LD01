@extends('master')
@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <!-- Hero Section -->
        <div class="hero-section text-center mb-5">
            <div class="position-relative">
                <img src="{{ asset('images/hero-section.jpg') }}" alt="Hero" class="img-fluid rounded shadow" style="max-height: 400px; width: 100%; object-fit: cover;">
                <div class="position-absolute top-50 start-50 translate-middle text-white">
                    <h1 class="display-4 fw-bold">Welcome to BeeFlix</h1>
                    <p class="lead">Discover amazing movies</p>
                    <a class="btn btn-warning btn-lg" href="{{ route('addMoviePage.view') }}">
                        <i class="fas fa-plus-circle me-2"></i>Add New Movie
                    </a>
                </div>
            </div>
        </div>

        <!-- Movies Section -->
        <div class="movies-section">
            <h2 class="text-center mb-4">Latest Movies</h2>
            @include('movieCard', ['movies' => $movies])
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{$movies->links('pagination::bootstrap-4')}}
        </div>
    </div>
@endsection