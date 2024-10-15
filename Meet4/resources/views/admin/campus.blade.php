@extends('admin.layout')
@section('content')
<div class="row mt-4 mb-4" >
    <div class="col-12">
        <img src="{{asset('images/banner.jpg')}}" width='100%' alt="">
    </div>
</div>
<div class="row">
        @foreach ($campuses as $item)
        <div class="col-4">
            <div class="card mb-1">
                <img class="card-img-top" src="{{asset('images/'.$item.'.jpg')}}" alt="Card image" style='max-height:200px;'>
                <div class="card-body">
                  <h4 class="card-title text-center">{{$item}}</h4>
                  <a href="{{ route('campus.student', ['campus'=>$item]) }}" class="btn btn-primary" style='width:100%'>lihat daftar mahasiswa</a>
                </div>
              </div>
        </div>
        @endforeach
</div>
@endsection