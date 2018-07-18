@extends('layouts.app')

@section('content')


<form method="POST" action="{{ action('CommentController@store') }}">

	{{ csrf_field()  }}

	<input type="hidden" name="id_user" value="{{Auth::user()->id}}">
	<input type="hidden" name="id_post" value="{{$id_post}}">

	<div class="form-group">

		<label>Text</label>
		<br>
		<textarea name ="body" ></textarea>
	</div>

  	<button type="submit" class="btn btn-primary">Publish</button>
</form>


@endsection
