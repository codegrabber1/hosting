<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Slider;
use App\Repositories\admin\BlogPostRepository;
use App\Repositories\admin\SliderRepository;
use Illuminate\Http\Request;

class MainSliderController extends BaseController
{
    private $slidersRepository;
    private $blogPostRepository;

    /**
     * MainSliderController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->slidersRepository = app(SliderRepository::class);
        $this->blogPostRepository = app(BlogPostRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = $this->slidersRepository->getSlidesList(6, 1,0);


        return view(env('THEME').'.admin.settings.slider', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $item = new Slider();
        $unpublishedSlides = $this->slidersRepository->getSlidesList(6,0);
        $publishedSlides = $this->slidersRepository->getSlidesList(6,1);
        $resentPosts = $this->blogPostRepository->getPostsList(6, 1);

        return view(env('THEME').'.admin.settings.slider-edit',
            compact('item','unpublishedSlides', 'publishedSlides','resentPosts') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        if(isset($data['image'])){
            $name = $request->file('image');
            $data['image'] = $name->getClientOriginalName();
            $path = env('THEME').'/images/content/slider';
            $request->image->move($path, $data['image']);

        }
        /**
         * The controller hasn't create or saves data in database.
         */
        $item = (new Slider())->create($data);

        return $item ? redirect()
            ->route('admin.settings.slider.edit', [$item->id])
            ->with(['success' => 'Slide has ben created successfully']) : back()
            ->withErrors(['msg' => 'Not stored'])
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = $this->slidersRepository->getEdit($id);
        $unpublishedSlides = $this->slidersRepository->getSlidesList(6,0);
        $publishedSlides = $this->slidersRepository->getSlidesList(6,1);
        $resentPosts = $this->blogPostRepository->getPostsList(6, 1);

        return view(env('THEME').'.admin.settings.slider-edit',
            compact('item','unpublishedSlides','publishedSlides','resentPosts') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = $this->slidersRepository->getEdit($id);

        if(empty($item)){
            return back()
                ->withErrors(['msg' => "Slide with id=[ {$id} ] not found."])
                ->withInput();
        }
        $data = $request->all();

        if(isset($data['image'])) {

            $data['image'] = $request->file('image')->getClientOriginalName();
            $path = env('THEME') . '/images/content/slider';
            $request->image->move($path, $data['image']);
        }
            /**
             * The controller hasn't creates or saves data in database.
             */
            $result = $item->update($data);

            return $result ? redirect()
                ->route('admin.settings.slider.edit', $item->id)
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
        /**
         * Force Delete item.
         */
        $result  = $this->slidersRepository->getDelete($id);

        return $result ? redirect()
            ->route('admin.settings.slider.index')
            ->with(['success' => "Slide with id - [$id] deleted up successfully"]) : back()
            ->withErrors(['msg' => 'Not deleted']);
    }
}
