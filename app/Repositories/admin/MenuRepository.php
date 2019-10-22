<?php
namespace App\Repositories\admin;
use App\Models\TopMenu as Model;

class MenuRepository extends BaseRepository
{
    /**
     * Getting the model of a database of the menu.
     * @var Model
     * @return mixed
     */
    protected function getModel()
    {
       return Model::class;
    }

    public function getMenuItems()
    {
        $columns = [];

        $result = $this
            ->startCondition();

        return $result;
    }
}
