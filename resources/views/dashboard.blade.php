@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-dark mb-2">Create post</a>
                   <h3>
                        Your Blog Posts
                   </h3>
                   @if(count($posts)>0)
                   <table class="table-striped table">
                       <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                       </tr>
                       @foreach($posts as $post)
                       <tr>
                       <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                       <td><a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a></td>
                       <td>
                            {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('DELETE',['class'=>'btn btn-danger'])}}
                            {!!Form::close()!!}
                       </td>
                       </tr>
                       @endforeach
                   </table>
                   @else
                   <p>No posts found</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
