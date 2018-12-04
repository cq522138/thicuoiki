@extends('welcome')
@section('content')
    <form method="post" action="{{route('update',$new->id)}}" enctype="multipart/form-data">
        @CSRF
        <div class="form-group">
            <label for="exampleInputEmail1">title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">purport</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="purport">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">anh</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="feature">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection