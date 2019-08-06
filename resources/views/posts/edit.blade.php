@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action'=>['PostsController@update',$posts->id],'method'=>'POST','enctpye'=>'multipart/form-data'])!!}

        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$posts->title,['class'=>'form-control','placeholder'=>'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('body','Description')}}
            {{Form::textarea('body',$posts->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}
        </div>
        <div class="form-group">
                {{Form::label('cover_image','Image')}}
                {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
