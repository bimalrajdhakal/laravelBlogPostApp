@extends('layouts.app')

@section('content')
    <h1>Edit Blog Post</h1>
    <form action="{{route('posts.update',$post->id)}}"  method="POST" enctype="multipart/form-data">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" name="title" value="{{$post->title}}">
    </div>
    <div class="form-group">
      <label>Body</label>
      <textarea name="body"   class="form-control">{{$post->body}}</textarea>
    </div>
    <div class="form-group">
      <input type="file" name="cover_image">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
    </form>
@endsection