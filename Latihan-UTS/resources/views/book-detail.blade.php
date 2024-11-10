@extends('layout')
@section('content')
<div class="row">
    <div class="col-4">
        <img src="{{asset($book->photo)}}" alt="" width="100%">
    </div>
    <div class="col-8">
        <h4>{{$book->name}}</h4>
        <table class="table">
            <tr>
                <th>description</th>
                <td>{{$book->description}}</td>
            </tr>
            <tr>
                <th>genre</th>
                <td>{{$book->genre->name}}</td>
            </tr>
            <tr>
                <th>publish date</th>
                <td>{{$book->publish_date->format('d F Y')}}</td>
            </tr>
        </table>
        @include('author')
    </div>
</div>
@endsection