<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Requests\BlogPostCreateRequest;
use App\Http\Requests\BlogPostUpdateRequest;
use App\Models\BlogPost;
use App\Repositories\admin\BlogCategoryRepository;
use App\Repositories\admin\BlogPostRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class PostController extends BaseController
{

    /**
     * @var Application|mixed
     */
    private $blogPostRepository;
    private $blogCategoryRepository;

    /**
     * PostController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->blogPostRepository = app(BlogPostRepository::class);
        $this->blogCategoryRepository = app(BlogCategoryRepository::class);

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $posts = $this->blogPostRepository->getPostsList(6);

        return view(env('THEME').'.admin.posts.posts', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
        $resentPosts = $this->blogPostRepository->getPostsList(10);

        $catList = $this->blogCategoryRepository->getForSelect();


        return view(env('THEME').'.admin.posts.post-add',
            compact('catList', 'resentPosts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(BlogPostCreateRequest $request)
    {
        //
        $data = $request->all();

        if(isset($data['image'])){
            $name = $request->file('image');
            $data['image'] = $name->getClientOriginalName();
            $path = env('THEME').'/images/content/articles';
            $request->image->move($path, $data['image']);

        }

        if(empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }
        //dd($data);

        $item = (new BlogPost())->create($data);

        return $item ? redirect()
            ->route('admin.blog.posts.edit', [$item->id])
            ->with(['success' => 'Post has ben created successfully']) : back()
            ->withErrors(['msg' => 'Not updated'])
            ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $item = $this->blogPostRepository->getPostEdit($id);

        return view(env('THEME').'.admin.posts.post-edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BlogPostUpdateRequest $request
     * @param int $id
     * @return Response
     */
    public function update(BlogPostUpdateRequest $request, $id)
    {
        //
        $item = $this->blogPostRepository->getPostEdit($id);

        if(empty($item)){
            return back()
                ->withErrors(['msg' => "Post with id=[{$id}] not found."])
                ->withInput();
        }
        $data = $request->all();

        $result = $item->update($data);

        return $result ? redirect()
            ->route('admin.blog.posts.edit', $item->id)
            ->with(['success' => 'Updated successfully']) : back()
            ->withErrors(['msg' => 'Not updated'])
            ->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        dd(__METHOD__, $id);
    }
}
