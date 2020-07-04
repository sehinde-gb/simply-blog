<?php
/**
 * This class is the comment class
 * 
 * PHP version 7.2
 * 
 * @category Vendor/Project
 * @package  Vendor/Project
 * @author   Sehinde Raji <sehinde@outlook.com>
 * @license  www.laravel.com Laravel
 * @link     Install this on your machine 
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use App\User;
use App\Comment;
use Illuminate\Support\Facades\Auth;

/**
 * This class is the PostsController class
 * 
 * @category Vendor/Project
 * @package  Vendor/Project
 * @author   Sehinde Raji <sehinde@outlook.com>
 * @license  www.laravel.com Laravel
 * @link     Install this on your machine 
 *           PHP Version 7.2
 */
class PostsController extends Controller
{
    /**
     * This is the User Variable
     * 
     * @var User
     */
    public $user;

    /**
     * This is the posts constructor.
     *
     * @param User $user The user variable
     */
    public function __construct(User $user)
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of posts and eager load
     * comments made.
     *
     * @param Request $request This is the request variable.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $posts = Post::latest()->get()->all();
        

        return view('admin.posts.index', ['posts' => $posts]);
    }



     /**
      * Show the form for creating a new post.
      *
      * @return \Illuminate\Http\Response
      */
    public function create()
    {

        return view('admin.posts.create');

     
    }

    /**
     * Store a newly created post in storage
     * and attach a new comment to the post.
     *
     * @param \Illuminate\Http\Request $request This is the request object.
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //dd($request);

        $user = Auth::user();

        $post = $user->posts()->create($request->all());

    
        return redirect()->route('admin.posts.index')
            ->with('info', 'Post Added Successfully');  
    }


    /**
     * Display the post.
     *
     * @param \App\Post $post This is the post variable.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show')->with(['post' => $post]);
    }


    /**
     * Show the form for editing the post.
     *
     * @param \App\Post $post This is the post variable.
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit')->with(
            [
            'post' => $post  
             ]
        );
    }


     /**
      * Update the post.
      *
      * @param \Illuminate\Http\Request $request This is the request variable.
      * @param \App\Post                $post    This is the post model.
      * 
      @return \Illuminate\Http\Response
      */
    public function update(PostRequest $request, Post $post)
    {
        
        $post->update($request->all()); 

       
        return redirect()->route('admin.posts.index')
            ->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Post $post This is the post variable.
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index');
    }


    



}
