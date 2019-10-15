<?php

namespace App\Observers;

use App\Models\BlogPost;
use Carbon\Carbon;
use Illuminate\Support\Str;

class BlogPostObserver
{
    /**
     * Handle the blog post "created" event.
     *
     * @param BlogPost $blogPost
     * @return void
     */
    public function creating(BlogPost $blogPost)
    {
        //
        $this->setSlug($blogPost);
    }

    /**
     * Handle the blog post "updated" event.
     *
     * @param BlogPost $blogPost
     * @return void
     */
    public function updating(BlogPost $blogPost)
    {
        //
        $this->setPublishedAt($blogPost);

        $this->setSlug($blogPost);

    }

    /**
     * Set the post published.
     * @param BlogPost $blogPost
     */
    protected function setPublishedAt(BlogPost $blogPost)
    {
        if(empty($blogPost->published_at) && $blogPost->is_published)
        {
            $blogPost->published_at = Carbon::now();

        }
    }

    /**
     * Setting slug.
     * @param BlogPost $blogPost
     */
    protected function setSlug(BlogPost $blogPost)
    {
        if(empty($blogPost->slug)){
            $blogPost->slug = Str::slug($blogPost->title);
        }
    }

    /**
     * Handle the blog post "deleted" event.
     *
     * @param BlogPost $blogPost
     * @return void
     */

    public function deleting(BlogPost $blogPost)
    {
        //
        //dd(__METHOD__, $blogPost);

    }

    public function deleted(BlogPost $blogPost)
    {
        //
        //dd(__METHOD__, $blogPost);
    }

    /**
     * Handle the blog post "restored" event.
     *
     * @param BlogPost $blogPost
     * @return void
     */
    public function restored(BlogPost $blogPost)
    {
        //
    }

    /**
     * Handle the blog post "force deleted" event.
     *
     * @param BlogPost $blogPost
     * @return void
     */
    public function forceDeleting(BlogPost $blogPost)
    {
        //
    }


}
