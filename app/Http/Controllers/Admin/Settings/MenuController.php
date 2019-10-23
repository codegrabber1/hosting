<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Admin\BaseController;
use App\Models\TopMenu;
use App\Repositories\admin\MenuRepository;
use Illuminate\Http\Request;

class MenuController extends BaseController
{
    protected $menuItem;

    public function __construct()
    {
       parent::__construct();
       $this->menuItem = app(MenuRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu = $this->menuItem->getMenuItems();

        return view(env('THEME').'.admin.settings.menu', compact('menu'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $item = new TopMenu();

        $menuList = $this->menuItem->getForSelect();

        return view(env('THEME').'.admin.settings.menu-edit', compact('item', 'menuList'));
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
        $data = $request->input();

        $item = (new TopMenu())->create($data);

        return $item ? redirect()
            ->route('admin.settings.menu.edit', [$item->id])
            ->with(['success' => 'Menu item has ben created successfully']) : back()
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = $this->menuItem->getEdit($id);

        $menuList = $this->menuItem->getForSelect();

        return view(env('THEME').'.admin.settings.menu-edit',
        compact('item', 'menuList'));
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
        //
        $item = $this->menuItem->getEdit($id);

        if(empty($item)){
            return back()
                ->withErrors(['msg' => "Item with id=[{$id}] not found."])
                ->withInput();
        }

        $data = $request->all();
        $result = $item->update($data);

        return $result ? redirect()
            ->route('admin.settings.menu.edit', $item->id)
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
        $result  = TopMenu::destroy($id);

        return $result ? redirect()
            ->route('admin.settings.menu.index')
            ->with(['success' => "Item with id-[$id] deleted successfully"]) : back()
            ->withErrors(['msg' => 'Not deleted']);
    }
}
