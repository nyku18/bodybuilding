@extends('layouts.app')



@section('content')



	@foreach ($posts as $post)

	<div style= "border : 5px solid violet">


			<div style= "border: 1px solid blue">
				{{ csrf_field() }}
        		{{ method_field('PATCH') }}

					<a href= "{{ action('PostController@gotoeditpage','id='. $post->id) }}">

                {{$post->title}}

            		</a>


		    </div>



		    <div style="border :1px solid red">


				{{$post->body}}


		    </div> 

		<form method="post" action="{{action('PostController@delete', 'id=' . $post->id) }}">
			{{ csrf_field() }}
			
			
		 	<button type="submit" class="btn btn-primary">Delete</button>
		</form>   
	 </div>

	<br>

	@endforeach



@endsection
