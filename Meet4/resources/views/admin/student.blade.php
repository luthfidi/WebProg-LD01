@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col">
        <h3 class='mt-4'>{{$campus}}</h3>
        <table class='table'>
            <thead>
                <tr>
                    <th>nim</th>
                    <th>name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $item)
                    <tr>
                        <td>{{$item['nim']}}</td>
                        <td>{{$item['name']}}</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
        <br>
        <a href="{{ route('campus')}}" class='btn btn-primary'>back</a>
        </div>
    </div>
@endsection