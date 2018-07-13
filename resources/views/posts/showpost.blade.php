@extends('layouts.app')




@section('content')



	@foreach ($posts as $post)


		<div style= "border: 1px solid blue">
        

                {{$post->title}}


		</div>



		<div style="border :1px solid red">


				{{$post->body}}


		</div>

	<br>

	@endforeach



@endsection
