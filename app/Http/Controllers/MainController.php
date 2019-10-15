<?php

namespace App\Http\Controllers;

use App\Repositories\admin\MenuRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use Lavary\Menu\Menu;

abstract class MainController extends Controller
{
    protected $menuRepository;
    protected $priceRepository;
    protected $blogPostRepository;

    protected $template;
    protected $vars;

    protected $sidebar = false;

    /**
     * MainController constructor.
     * @param MenuRepository $menuRepository
     */
    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;

    }

    /**
     * @return Factory|View
     * @throws \Throwable
     */
    protected function renderOut()
    {
        $menu = $this->getTopMenu();
        $topMenu = view(env('THEME').'.topmenu')->with('menu', $menu)->render();
        $this->vars = Arr::add($this->vars, 'topmenu', $topMenu);


        return view($this->template)->with($this->vars);
    }

    private function getTopMenu()
    {
        $topmenu = $this->menuRepository->get();

        /**
         * Use menu package.
         * @package  https://github.com/codegrabber1/laravel-menu
         */
        $mBuilder = (new Menu)->make('TopMenu', function($m) use ($topmenu) {
            foreach($topmenu as $item) {
                if($item->parent == 0) {
                    $m->add($item->title, $item->slug)->id($item->id);
                } else {
                    if($m->find($item->parent)) {
                        $m->find($item->parent)->add($item->title, $item->slug)->id($item->id);
                    }

                }
            }

        });

        return $mBuilder;
    }
}
