@extends('layouts.app')

@section('content')


<form method="POST" action="{{ action('PostController@update','id='. $post->id , 'post='.$post) }}">

{{ csrf_field()  }} 

<input type="hidden" name="id_category" value="1">


  <div class="form-group">

    <label>Title</label>
    <br>
    <textarea name= "title" >{{$post->title}}</textarea>
  </div>

  <div class="form-group">

    <label>Text</label>
    <br>
    <textarea name= "body" >{{$post->body}}</textarea>

  </div>

  <button type="submit">Done editing</button>
</form>














@endsection
