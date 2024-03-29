@extends('layouts.app')

@section('content')
    <a class="btn btn-outline-inverse" href="/posts" role="button">Go Back</a>
    <h1>{{$post->title}}</h1>
      <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <div>
      <br><br>
      {{!!$post->body!!}}
      {{-- Parsing HTML Content --}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
       @if(Auth::user()->id == $post->user_id)
          <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
          {{-- Post deleting form --}}
          {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
              {{Form::hidden('_method','DELETE')}}
              {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
          {!!Form::close()!!}
      @endif
    @endif

@endsection