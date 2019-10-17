<?php

namespace App\Http\Controllers;

use App\Repositories\admin\BlogPostRepository;
use App\Repositories\admin\MenuRepository;
use App\Repositories\admin\PriceRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class IndexController extends MainController
{
    public function __construct()
    {
        $topMenu = app(MenuRepository::class);


        parent::__construct($topMenu);

        $this->priceRepository = app(PriceRepository::class);
        $this->blogPostRepository = app(BlogPostRepository::class);


        $this->template = env('THEME').'.index';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index()
    {
        //
        /**
         * Retrieving all plans.
         */
        $tariffItems = $this->getTariffs();

        $latest = $this->getLates();

        $pricing = view(env('THEME').'.pricing')->with(
            'pricing', $tariffItems)->render();

        $content = view(env('THEME').'.content')->with([
            'latest'=> $latest
        ]);

        $this->vars = Arr::add($this->vars, 'content', $content);
        $this->vars = Arr::add($this->vars, 'pricing', $pricing);

        return $this->renderOut();
    }


    /**
     * Getting all tariff plans on the home page.
     * @return mixed
     */
    public function getTariffs()
    {
        $tariffs = $this->priceRepository->getShortPlansList(1);

        return $tariffs;

    }

    /**
     * Getting three latest articles on the home page.
     * @return mixed
     */
    public function getLates()
    {
        $latest = $this->blogPostRepository->getPostsList(3,1);

        return $latest;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
