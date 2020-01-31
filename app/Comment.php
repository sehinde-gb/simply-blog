<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;
use Carbon\Carbon;

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
     * @param $date
     * @return string
     */
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d-m-Y');
    }

    /**
     * Return the created attribute and convert to UK
     * format.
     *
     * @param $date
     * @return string
     */
    public function getCreatedForHumans($date)
    {
        return Carbon::parse($date)->format('d-m-Y')->diffForHumans();
    }


}
