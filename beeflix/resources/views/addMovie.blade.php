@extends('master')
@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">Add New Movie</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('addMoviePage.addNewMovie') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="genre" class="form-label">Genre</label>
                                <select class="form-select @error('genre') is-invalid @enderror" name="genre" id="genre">
                                    <option value="0">--Select a Genre--</option>
                                    @foreach ($genres as $genre)
                                        <option value="{{$genre->id}}">{{$genre->name}}</option>
                                    @endforeach
                                </select>
                                @error('genre')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="photo" class="form-label">Movie Poster</label>
                                <div class="input-group">
                                    <input class="form-control @error('photo') is-invalid @enderror" type="file" 
                                           name="photo" id="photo" accept="image/*"
                                           onchange="previewImage(this)">
                                </div>
                                @error('photo')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                                <div id="imagePreview" class="mt-2 text-center d-none">
                                    <img src="" alt="Preview" class="img-thumbnail" style="max-height: 200px">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="title" class="form-label">Movie Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                       name="title" id="title" value="{{ old('title') }}"
                                       placeholder="Enter movie title">
                                @error('title')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                          name="description" id="description" rows="4"
                                          placeholder="Enter movie description">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="publish_date" class="form-label">Publish Date</label>
                                <input type="date" class="form-control @error('publish_date') is-invalid @enderror" 
                                       name="publish_date" id="publish_date" 
                                       value="{{ old('publish_date') }}">
                                @error('publish_date')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Save Movie
                                </button>
                                <a href="{{ route('homePage.view') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Home
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            const previewImg = preview.querySelector('img');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    preview.classList.remove('d-none');
                }
                
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.classList.add('d-none');
                previewImg.src = '';
            }
        }
    </script>
@endsection