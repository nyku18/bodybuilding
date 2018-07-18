@extends('layouts.app')



@section('content')



	@foreach ($posts as $post)
                
                {{ csrf_field() }}
        		{{ method_field('PATCH') }}

					


	 <a id="editpost" href= "{{ action('PostController@gotoeditpage','id='. $post->id) }}">

        {{$post->title}}

     </a>

     <br>
     <br>	
		   

	 <div class= "postbody">

	     <div class = "text">
          
          {{$post->body}}

		 </div> 
		 
		 <br>
		 <br>


	     <form method="post" action="{{action('PostController@delete', 'id=' . $post->id) }}" style= "display:inline">
		    {{ csrf_field() }}
		 
		    <button type="submit" class="btn btn-primary">Delete</button>
		 
		 </form>   

         <form method="post" action="{{action('CommentController@gotocommentpage', 'id=' . $post->id) }}" style= "display:inline">
		 {{ csrf_field() }}
			
		 	<button type="submit" class="btn btn-primary">Comment</button>
		 
		 </form>

		 <br>
		 <br>

	     <div class = "comments">
	     	<h5>Comentarii:</h5>	
			<ul>
		     	@foreach($post->comments as $comment)
		     		<li>{{$comment->body}}</li>
		     	@endforeach
			</ul>
	     </div>




	  </div>



	  <br>

	@endforeach



@endsection
