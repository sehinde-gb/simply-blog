<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\User;
use App\Post;

class CommentsController extends Controller
{

    /**
     * @var User
     */
    public $user;

    /**
     * @var Post;
     */
    public $post;



    /**
     * BlogsController constructor.
     * @param User $user
     */
    public function __construct(User $user, Post $post)
    {
        $this->middleware('auth');
    }


    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {

        
        //dd($post);
        $post = Post::findOrFail($request->post_id);

    	
    
        Comment::create([
            'text' => $request->text,
            'user_id' => Auth::id(),
            'post_id' => $post->id
        ]);
   
        return redirect()->route('admin.posts.show', $post->id);
    }
}
