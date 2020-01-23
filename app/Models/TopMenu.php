<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TopMenu extends Model
{
    //
    use SoftDeletes;

    const ROOT_ID = 1;

    protected $fillable = [
        'title', 'slug', 'parent'
    ];

    public function parentItem()
    {
        return $this->belongsTo(TopMenu::class, 'parent','id');
    }
    public function getParentTitleAttribute()
    {
        $title = $this->parentItem->title
            ?? ($this->isRoot()
            ? 'Root'
            : 'Parent item' );

        return $title;
    }

    private function isRoot()
    {
        return $this->id === TopMenu::ROOT_ID;
    }
}
