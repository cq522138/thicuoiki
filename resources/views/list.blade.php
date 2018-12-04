@extends('welcome')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">purport</th>
            <th scope="col">feature</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $key=>$new)
            <tr>
                <th scope="row"><a href="{{route('view',$new->id)}}">{{++$key}}</a></th>
                <td>{{$new->title}}</td>
                <td>{{$new->purport}}</td>
                <td><img src="{{'/upload/images/' . $new->feature}}" style="height: 130px; width:100px"></td>
                <td><a href="{{route('edit',$new->id)}}">sua</a></td>
                <td><a href="{{route('destroy',$new->id)}}">xoa</a></td>
            </tr>
        @endforeach
        </tbody>

        <a href="{{route('create')}}">them moi</a>
    </table>
@endsection