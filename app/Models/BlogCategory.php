<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    //
    use SoftDeletes;

    const ROOT_ID = 1;
    protected $fillable = [
        'title',
        'slug',
        'parent_id',
        'description'
    ];


    public function parentCategory()
    {
        return $this->belongsTo(BlogCategory::class, 'parent_id', 'id');
    }

    public function getParentTitleAttribute()
    {
        $title = $this->parentCategory->title
            ?? ($this->isRoot()
            ? 'Root'
            : 'Don\'t know what\'s going on' );

        return $title;
    }

    private function isRoot()
    {
        return $this->id === BlogCategory::ROOT_ID;
    }


    public function posts(){
    	return $this->hasMany(BlogPost::class);
    }

}
