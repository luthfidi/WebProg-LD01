@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col">
        <h3 class='mt-4'>{{$campus->name}}</h3>
        <table class='table'>
            <thead>
                <tr>
                    <th>nim</th>
                    <th>photo</th>
                    <th>name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{$student->nim}}</td>
                        <td>
                            <img src="{{asset('images/student/'.$student->photo)}}" alt="" srcset="" width='50px    '>
                        </td>
                        <td>{{$student->name}}</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
        {{$students->links()}}
        <br>
        <a href="{{ route('campus')}}" class='btn btn-primary'>back</a>
        </div>
    </div>
@endsection