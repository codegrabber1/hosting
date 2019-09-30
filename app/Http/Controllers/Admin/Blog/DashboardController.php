<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Contracts\Support\Renderable;

class DashboardController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(){

        return view(env('THEME').'.admin.posts.blog-dash');

    }
}
