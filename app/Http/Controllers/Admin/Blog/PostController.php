<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\BlogPostCreateRequest;
use App\Http\Requests\BlogPostUpdateRequest;
use App\Models\BlogPost;
use App\Repositories\admin\BlogCategoryRepository;
use App\Repositories\admin\BlogPostRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        $posts = $this->blogPostRepository->getPostsList(6, 1, 0);

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
        $resentPosts = $this->blogPostRepository->getPostsList(6, 1);

        $catList = $this->blogCategoryRepository->getForSelect();


        return view(env('THEME').'.admin.posts.post-add',
            compact('catList', 'resentPosts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BlogPostCreateRequest $request
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

        /**
         * The controller hasn't create or saves data in database.
         */
        $item = (new BlogPost())->create($data);

        return $item ? redirect()
            ->route('admin.blog.posts.edit', [$item->id])
            ->with(['success' => 'Post has ben created successfully']) : back()
            ->withErrors(['msg' => 'Not stored'])
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

        $resentPosts = $this->blogPostRepository->getPostsList(6, 1);
        $unpublishedPosts = $this->blogPostRepository->getPostsList(6, 0);

        return view(env('THEME').'.admin.posts.post-edit', compact('item','resentPosts','unpublishedPosts'));
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
        //dd($item);

        //$path = env('THEME').'/images/content/articles/';

//        if(file_exists(public_path($path, $item['image'])))
//        {
//            $im = unlink(public_path($path.$item['image']));
//            //dd($im);
//        }else{
//
//            //dd('doesn\'t exist');
//        }

        if(empty($item)){
            return back()
                ->withErrors(['msg' => "Post with id=[ {$id} ] not found."])
                ->withInput();
        }
        $data = $request->all();

        if(isset($data['image'])){

            $data['image'] = $request->file('image')->getClientOriginalName();

            $path = env('THEME').'/images/content/articles';

            $request->image->move($path, $data['image']);

        }

        /**
         * The controller hasn't creates or saves data in database.
         */
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

        $result = BlogPost::destroy($id);

        //if(file_exists(public_path($path, $item['image'])))
//        {
//            $im = unlink(public_path($path.$item['image']));
//            //dd($im);
//        }else{
//
//            //dd('doesn\'t exist');
//        }

        return $result ? redirect()
            ->route('admin.blog.posts.index')
            ->with(['success' => "Post with id-[$id] deleted successfully"]) : back()
            ->withErrors(['msg' => 'Not deleted']);
    }
}
