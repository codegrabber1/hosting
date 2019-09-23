<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Requests\BlogCategoryCreateRequest;
use App\Http\Requests\BlogCategoryUpdateRequest;
use App\Models\BlogCategory;
use App\Repositories\admin\BlogCategoryRepository;
use Illuminate\Support\Str;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = BlogCategory::all();

        return view(env('THEME').'.admin.category', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $item = new BlogCategory();
        $catList = BlogCategory::all();

        return view(env('THEME').'.admin.category-edit',
            compact('item', 'catList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCategoryCreateRequest $request)
    {
        //
        $data = $request->input();
        if(empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $item = (new BlogCategory())->create($data);

        return $item ? redirect()
            ->route('admin.blog.categories.edit', [$item->id])
            ->with(['success' => 'Category has ben created successfully']) : back()
            ->withErrors(['msg' => 'Not updated'])
            ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @param BlogCategoryRepository $blogCategoryRepository
     * @return \Illuminate\Http\Response
     */
    public function edit($id, BlogCategoryRepository $blogCategoryRepository)
    {
        //
        //$item = BlogCategory::find($id);
        //$catList = BlogCategory::all();

        $item = $blogCategoryRepository->getEdit($id);

        if(empty($item)){
            abort(404);
        }
        $catList = $blogCategoryRepository->getForSelect();

        return view(env('THEME').'.admin.category-edit',
            compact('item', 'catList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogCategoryUpdateRequest $request, $id)
    {
        //
        $item = BlogCategory::find($id);
        if(empty($item)){
            return back()
                ->withErrors(['msg' => "Category with id=[{$id}] not found."])
                ->withInput();
        }

        $data = $request->all();
        $result = $item->update($data);

        return $result ? redirect()
            ->route('admin.blog.categories.edit', $item->id)
            ->with(['success' => 'Updated successfully']) : back()
            ->withErrors(['msg' => 'Not updated'])
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
