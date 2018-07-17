<?php

namespace App\Repositories;

use App\Post as Post;

class PostRepository {




    public function create($req)
    {

		$post = new Post();

		$title = $req->input('title');
		$body = $req->input('body');

		$post->create($req->toArray());

    }

    public function show()
    {

		$posts = Post::orderBy('created_at', 'desc')->get();
		 return $posts;


    }


    public function edit($data)
    {    
       
        $post = PostRepository::getPostById($data['id']);

        $post->title =$data['title'];
        $post->body = $data['body'];

        $post->update();

    }

    public function destroy($id)
    {

        Post::destroy($id);
    }

    public function getPostById($id)
    {

     return Post::findOrFail($id);

    }

}