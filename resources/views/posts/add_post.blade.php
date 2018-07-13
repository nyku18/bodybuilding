@extends('layouts.app')

@section('content')


<form method="POST" action="{{ action('PostController@store') }}">

{{ csrf_field()  }}

<input type="hidden" name="id_category" value="1">


  <div class="form-group">

    <label for="Title">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title">

  </div>

  <div class="form-group">

    <label for="Body">Text</label>
    <input type="text" class="form-control" id="Body" name = "body">

  </div>

  <button type="submit" class="btn btn-primary">Publish</button>
</form>














@endsection
