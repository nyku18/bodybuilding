<?php

namespace App\Repositories;

use App\Post;

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

		$posts = Post::orderBy('created_at', 'asc')->get();
		 return $posts;


    }

    }