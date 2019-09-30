<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Requests\BlogCategoryCreateRequest;
use App\Http\Requests\BlogCategoryUpdateRequest;
use App\Models\BlogCategory;
use App\Repositories\admin\BlogCategoryRepository;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class CategoryController extends BaseController
{

    /**
     * @var BlogCategoryRepository
     */
    private $blogCategoryRepository;

    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        parent::__construct();
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
        $category = $this->blogCategoryRepository->getAllItemsWithPagination(6);

        return view(env('THEME').'.admin.categories.category', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $item = new BlogCategory();
        $catList = $this->blogCategoryRepository->getForSelect();

        return view(env('THEME').'.admin.categories.category-edit',
            compact('item', 'catList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BlogCategoryCreateRequest $request
     * @return Response
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
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $item = $this->blogCategoryRepository->getEdit($id);

        if(empty($item)){
            abort(404);
        }
        $catList =  $this->blogCategoryRepository->getForSelect();

        return view(env('THEME').'.admin.categories.category-edit',
            compact('item', 'catList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BlogCategoryUpdateRequest $request
     * @param int $id
     * @return Response
     */
    public function update(BlogCategoryUpdateRequest $request, $id)
    {
        //
        $item = $this->blogCategoryRepository->getEdit($id);

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
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
