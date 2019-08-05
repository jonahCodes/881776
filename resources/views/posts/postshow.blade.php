@extends('layouts.app');

@section('content')
<h1>{{$posts->title}}</h1>
<small>Written on {{$posts->created_at}}</small>
<p>body{{$posts->body}}</p>

@endsection