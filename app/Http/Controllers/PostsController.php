<?php
/**
 * This class is the PostsController class
 * 
 * PHP version 7.2
 * 
 * @category Vendor/Project
 * @package  Vendor/Project
 * @author   Sehinde Raji <sehinde@outlook.com>
 * @license  www.laravel.com Laravel
 * @link     Install this on your machine 
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

/**
 * This class is the PostController class
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
     * The post variable.
     * 
     * @var Post
     */

    public $post;


    /**
     * Posts Controller constructor.
     *
     * @param Post $post the post variable.
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @param Request $request The request variable.
     * 
     * @return \Illuminate\Http\Response
     * @throws MethodNotFoundException
     */
    public function index(Request $request)
    {
        $posts = Post::latest()->get()->all();

        return view('posts.index', ['posts' => $posts]);
    }


     /**
      * Display the specified post.
      *
      * @param \App\Post $post The post variable.
      * 
      * @return \Illuminate\Http\Response
      */
    public function show(Post $post)
    {
        return view(posts.show)->with(['post' => $post]);
    }
    
}
