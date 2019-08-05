@extends('layouts.app')

@section('content')
<h1>{{$posts->title}}</h1>
<small>Written on {{$posts->created_at}} By {{$posts->user->name}}</small>
<p>{!!$posts->body!!}</p>
<hr>
<a href="/posts/{{$posts->id}}/edit" class="btn-success btn">Edit</a>
{!!Form::open(['action'=>['PostsController@destroy',$posts->id],'method'=>'POST','class'=>'float-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('DELETE',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endsection
