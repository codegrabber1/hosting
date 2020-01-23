<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
    	'commentName', 'email', 'comment', 'is_published', 'parent_id', 'user_id'
    ];
	//
	public function posts(){
		return $this->belongsTo(BlogPost::class);
	}
	public function user(){
		return $this->belongsTo(User::class);
	}
}
