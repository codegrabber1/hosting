<?php

namespace App\Http\Controllers\Admin\Tariff;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\PriceCreateRequest;
use App\Models\Price;
use App\Repositories\admin\PriceRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class PricingController extends BaseController
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
        $prices = $this->priceRepository->getShortPlansList(1,0);

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
        $unpublished = $this->priceRepository->getPricesList(0);
        $published = $this->priceRepository->getPricesList(1);

        return view(env('THEME').'.admin.tariff.price-add',
            compact('item', 'unpublished', 'published'));
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

        if(empty($data['slug']))
        {
            $data['slug'] = Str::slug($data['tariffname']);
        }

        $item = (new Price())->create($data);

        return $item ? redirect()
            ->route('admin.tariff.prices.edit', $item->id)
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
        //dd($item);
        $unpublished = $this->priceRepository->getPricesList(0);
        $published = $this->priceRepository->getPricesList(1);


        return view(env('THEME').'.admin.tariff.price-add',
            compact('item', 'unpublished', 'published'));
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
        $item = $this->priceRepository->getPriceEdit($id);

        if(empty($item)){
            return back()
                ->withErrors(['msg' => "Post with id=[ {$id} ] not found."])
                ->withInput();
        }
        $data = $request->all();

        $result = $item->update($data);

        return $result ? redirect()
            ->route('admin.tariff.prices.edit', $item->id)
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
