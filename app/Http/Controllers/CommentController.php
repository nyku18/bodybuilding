<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentRepository;
use App\Comment as Comment;


class CommentController extends Controller
{
   
	protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CommentRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }


    public function index()
    {
        return view('home');
    }


    public function gotocommentpage(Request $req)
    {
        $id_post = $req->all()['id'];
        return view('/comments/addcomment', compact('id_post'));
    }


    public function store(Request $req)
    {   
        $comment= $this->repository->create($req);
    	return redirect('/showpost');
    }

    public function show()
    {
    	$comment=$this->repository->show();
        return view('posts/showpost', compact('comments'));
    }
}
