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
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;
use Carbon\Carbon;

/**
 * This class is the comment class
 * 
 * @category Vendor/Project
 * @package  Vendor/Project
 * @author   Sehinde Raji <sehinde@outlook.com>
 * @license  www.laravel.com Laravel
 * @link     Install this on your machine
 * PHP version 7
 */
class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text', 'user_id', 'post_id'
    ];


    /**
     *  A comment belongs to a post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(\App\Post::class);
    }


    /**
     *  A comment belongs to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }


     /**
      * Return the created attribute and convert to UK
      * format.
      *
      * @param integer $date the date is returned in a UK format

      * @return integer $date
      */
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d-m-Y');
    }

    /**
     * Return the created attribute and convert to UK
     * format.
     * 
     * @param integer $date the date is returned and converted in to diff for humans
     * 
     * @return integer $date
     */
    public function getCreatedForHumans($date)
    {
        return Carbon::parse($date)->format('d-m-Y')->diffForHumans();
    }


}