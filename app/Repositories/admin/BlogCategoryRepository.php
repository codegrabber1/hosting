<?php

namespace App\Repositories\admin;

use App\Models\BlogCategory as Model;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Collection;


class BlogCategoryRepository extends BaseRepository {


    protected function getModel()
    {
        return Model::class;
    }

    /**
     * Get the category by id.
     * @param int $id
     * @return Model
     */
    public function getEdit(int $id)
    {
        return $this->startCondition()->find($id);
    }

    /**
     * Get the list of category.
     * @return Application[]|Collection|\Illuminate\Database\Eloquent\Model[]|mixed[]
     */
    public function getForSelect()
    {
        return $this->startCondition()->all();
    }

}
