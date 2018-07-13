<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;





class PostController extends Controller
{

	protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PostRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts/add_post');
    }

    public function create()
    {

    return view('posts/add_post');


    }

    public function show()
    {

    	$posts=$this->repository->show();

     return view('posts/showpost', compact('posts'));

    }



    public function store(Request $req)
    {

     $post= $this->repository->create($req);



    	return redirect('/showpost');

     }

}
