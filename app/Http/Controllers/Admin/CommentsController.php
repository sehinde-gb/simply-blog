<?php
/**
 * This class is the CommentsController class
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
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\User;
use App\Post;

/**
 * This is the CommentsController class
 * 
 * @category Vendor/Project
 * @package  Vendor/Project
 * @author   Sehinde Raji <sehinde@outlook.com>
 * @license  www.laravel.com Laravel
 * @link     Install this on your machine 
 *           php version 7.2
 */
class CommentsController extends Controller
{

    /**
     * This is the user variable.
     * 
     * @var User
     */
    public $user;

    /**
     * This is the post variable.
     * 
     * @var Post;
     */
    public $post;



    /**
     * This is the Comments Controller constructor.
     * 
     * @param User $user The user variable.
     * @param Post $post The post variable.
     */
    public function __construct(User $user, Post $post)
    {
        $this->middleware('auth');
    }


    /**
     * Store a newly created comment in storage.
     *
     * @param \Illuminate\Http\Request $request this is the request variable.
     * @param Post                     $post    This is the post variable.
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
 
        $post = Post::findOrFail($request->post_id);
  
        Comment::create(
            [
            'text' => $request->text,
            'user_id' => Auth::id(),
            'post_id' => $post->id
            ]
        );
   
        return redirect()->route('admin.posts.show', $post->id);
    }
}
