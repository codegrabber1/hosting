<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'image',
        'excerpt',
        'created_at',
        'user_id',
        'content',
        'is_published'

    ];

    public function category(){

        return $this->belongsTo(BlogCategory::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
