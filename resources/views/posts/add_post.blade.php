@extends('layouts.app')

@section('content')


<form method="POST" action="{{ action('PostController@store') }}">

{{ csrf_field()  }}

<input type="hidden" name="id_category" value="1">


  <div class="form-group">

    <label>Title</label>
    <br>
    <textarea name ="title" ></textarea>
  </div>

  <div class="form-group">

    <label>Text</label>
    <br>
    <textarea name ="body" ></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Publish</button>
</form>














@endsection
