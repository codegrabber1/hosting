<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\MainController;
use App\Repositories\admin\BlogPostRepository;
use App\Repositories\admin\MenuRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Arr;
use Illuminate\View\View;

class BlogController extends MainController
{
    //

    /**
     * BlogController constructor.
     */
    public function __construct()
    {
        $topMenu = app(MenuRepository::class);

        parent::__construct($topMenu);

        $this->blogPostRepository = app(BlogPostRepository::class);


        $this->template = env('THEME').'.blog/blog';
    }


    /**
     * Getting all articles.
     * @throws \Throwable
     */
    public function getArticles()
    {

        $allPosts = $this->getPosts();

        $header = view(env('THEME').'.blog/blog-header')->with('posts', $allPosts)->render();
        $content = view(env('THEME').'.blog/blog-content')->with('posts', $allPosts)->render();
        $sidebar = view(env('THEME').'.blog/sidebar')->with('posts', $allPosts)->render();

        $this->vars = Arr::add($this->vars, 'header', $header);
        $this->vars = Arr::add($this->vars, 'content', $content);
        $this->vars = Arr::add($this->vars, 'sidebar', $sidebar);


        return $this->renderOut();

    }

    /**
     * Getting an article.
     * @param $id
     * @return Factory|View
     * @throws \Throwable
     */
    public function getArticle($id)
    {
        $post = $this->blogPostRepository->getPostEdit($id);
        $allPosts = $this->getPosts();
	               //dd($post->comments->groupBy('parent_id'));

	    $this->title = $post->title;
	    $this->keywords = $post->keywords;
	    $this->description = $post->description;


	    $header = view(env('THEME').'.blog/blog-header')->with('post', $post)->render();
        $content = view(env('THEME').'.blog/blog-post')->with('post', $post)->render();
        $sidebar = view(env('THEME').'.blog/sidebar')->with('posts', $allPosts)->render();

        $this->vars = Arr::add($this->vars, 'header', $header);
        $this->vars = Arr::add($this->vars, 'content',  $content);
        $this->vars = Arr::add($this->vars, 'sidebar', $sidebar);

        return $this->renderOut();

    }

    private function getPosts()
    {
        $allPosts = $this->blogPostRepository->getPostsList(6,1);

        return $allPosts;
    }
}
