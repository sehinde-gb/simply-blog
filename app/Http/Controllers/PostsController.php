<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    /**
     * @var Post
     */

    public $post;


    /**
     * Posts Controller constructor.
     * @param Post $post
     */
    
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws MethodNotFoundException
     */

     public function index(Request $request)
     {
         $posts = Post::latest('created_at')->get()->all();

         return view('posts.index', ['posts' => $posts]);
     }


     /**
     * Display the specified post.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */

     public function show(Post $post)
     {
         return view(posts.show)->with(['post' => $post]);
     }
    
}
