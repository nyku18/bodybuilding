<?php

namespace App\Repositories;

use App\Comment as Comment;

class CommentRepository {


    public function create($req)
    {

		$comment = new Comment();
		$comment->create($req->toArray());
    }


    public function getCommentById($id)
    {
     return Comment::findOrFail($id);
    }

    public function destroy($id)
    {

        Comment::destroy($id);
    }

    public function show()
    {
		$comment = Comment::orderBy('created_at', 'desc')->get();
		 return $comments;
    }

}