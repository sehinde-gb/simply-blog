<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * @var User
     */
    public $user;

    /**
     * BlogsController constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of posts and eager load
     * comments made.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws MethodNotFoundException
     */

    public function index(Request $request)
    {
        if (request('comment')) {

            $posts = Comment::where('text', request('comment'))->firstOrFail()->posts;
            //dd($posts);
        } else {

        $posts = Post::latest()->get()->all();
        //dd($posts);
    }

        return view('admin.posts.index', ['posts' => $posts]);
    }



     /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.posts.create', [
            'comments' => Comment::all()
        ]);
        //dd($comments);
    }

    /**
     * Store a newly created resource in storage
     * and attach a new comment to the post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $user = Auth::user();

        $post = $user->posts()->create($request->all());

    
        return redirect()->route('admin.posts.index')->with('info','Post Added Successfully');  
    }


    /**
     * Display the post.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show')->with(['post' => $post]);
    }


    /**
     * Show the form for editing the post.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */

     public function edit(Post $post)
     {
         return view('admin.posts.edit')->with([
            'post' => $post,
            'comments' => Comment::all()
         ]);
     }


     /**
     * Update the post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        
        $post->update($this->validatePost()); 

       
        return redirect()->route('admin.posts.index')->with('success','Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index');
    }


    /**
     * Validate post containing an array of values
     *
     * @param  request
     * @return \Illuminate\Http\Response
     */

    protected function validatePost()
    {

        return request()->validate([
            'title' => 'required',
            'body' => 'required'
            
        ]);
    }







}
