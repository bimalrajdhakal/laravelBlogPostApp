@extends('layouts.app')

@section('content')
    <h1>Create Blog Post</h1>
    <form action="{{route('posts.store')}}"  method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" name="title" placeholder="Title of the Blog">
    </div>
    <div class="form-group">
      <label>Body</label>
      <textarea name="body"   class="form-control"></textarea>
    </div>
    <div class="form-group">
      <input type="file" name="cover_image">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
    </form>

@endsection