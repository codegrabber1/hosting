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
        $columns = [
            'id', 'title', 'slug', 'parent'
        ];

        $result = $this
            ->startCondition()
            ->select($columns)
            ->get();

        return $result;
    }

    public function getForSelect()
    {
        $columns = [
            'id', 'title','parent'
        ];

        $result = $this
            ->startCondition()
            ->select($columns)
            ->with(['parentItem:id,title'])
            ->toBase()
            ->get();

        return $result;
    }

    public function getEdit($id)
    {
        return $this->startCondition()->find($id);
    }
}
