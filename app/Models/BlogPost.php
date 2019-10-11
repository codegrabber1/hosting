<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string slug
 * @property mixed published_at
 * @property mixed is_published
 * @property mixed title
 */
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

    /**
     * The post's categories.
     * @return BelongsTo
     */
    public function category(){

        return $this->belongsTo(BlogCategory::class);
    }

    /**
     * The post's author.
     * @return BelongsTo
     */
    public function user(){

        return $this->belongsTo(User::class);
    }
}
