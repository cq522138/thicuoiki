@extends('welcome')
@section('content')
    <a class="navbar-brand">tin tuc</a>
    <p>
        <a href="{{route('index')}}" class="btn btn-default">Return to posts</a>
    </p>

    <h1>{{ $new->title }}</h1>
    <p>{{$new->purport}}</p>
    <p><img src="{{'/upload/images/' . $new->feature}}" style="height: 130px; width:100px"></p>
@endsection