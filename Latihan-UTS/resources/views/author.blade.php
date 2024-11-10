<div class="row">
    <div class="col-4">
        <img src="{{asset($book->author->photo)}}" alt="" width="80%">
    </div>
    <div class="col-8">
        <table class="table">
            <tr>
                <th>name</th>
                <td>{{$book->author->name}}</td>
            </tr>
            <tr>
                <th>birth date</th>
                <td>{{$book->author->birth_date->format('d F Y')}}</td>
            </tr>
            <tr>
                <th>age</th>
                <td>{{$book->author->birth_date->age}} Tahun</td>
            </tr>
        </table>
        <a class="btn btn-outline-dark" href="{{route('book.index')}}">back</a>
    </div>
</div>