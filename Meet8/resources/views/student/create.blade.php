@extends('admin.layout')

@section('content')

@if (@session('success'))
    <div class="alert alert-success">
        Data berhasil di simpan
    </div>
@endif
    <form action="{{ route('student.store') }}" method="post">
        @csrf 
        <div>
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim" placeholder="123456" value="{{ old('nim') }}">
            @error('nim')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mt-2">
            <label for="name" class="form-label mt-2">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Luthfi" value="{{ old('name') }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mt-2">
            <label for="campus" class="form-label">Campus</label>
            <select name="campus" id="campus" class="form-select" aria-label="Default select">
                @foreach ($campuses as $campus)
                    <option value="{{$campus->id}}">{{$campus->name}}</option>
                @endforeach
            </select>
            @error('campus')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <input class="btn btn-primary mt-3" type="submit" value="Submit New Student">
    </form>
@endsection
