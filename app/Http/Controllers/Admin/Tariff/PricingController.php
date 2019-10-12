<?php

namespace App\Http\Controllers\Admin\Tariff;

use App\Http\Requests\PriceCreateRequest;
use App\Models\Price;
use App\Repositories\admin\PriceRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PricingController extends TariffController
{
    private $priceRepository;

    /**
     * PricingController constructor.
     */
    public function __construct()
    {
        /**
         * Parent constructor.
         */
        parent::__construct();

        $this->priceRepository = app(PriceRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
        $prices = $this->priceRepository->getShortPlansList(1);

        return view(env('THEME').'.admin.tariff.prices',
            compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
        $item = new Price();
        return view(env('THEME').'.admin.tariff.price-edit',
            compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(PriceCreateRequest $request)
    {
        //
        $data = $request->all();

        $item = (new Price())->create($data);

        return $item ? redirect()
            ->route('admin.tariff.prices.edit')
            ->with(['success' => 'Price has been created successfully']) : back()
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
        $item = $this->priceRepository->getPriceEdit($id);
        return view(env('THEME').'.admin.tariff.price-edit',
            compact('item'));
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
