<?php

namespace App\Repositories\admin;

use App\Models\BlogCategory as Model;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Collection;


class BlogCategoryRepository extends BaseRepository {

    /**
     * Getting the model of a database of the categories.
     * @var Model
     * @return mixed|string
     */

    protected function getModel()
    {
        return Model::class;
    }

    public function getAllItemsWithPagination($perPage = null)
    {
        $columns = ['id', 'title', 'slug', 'description', 'updated_at', 'parent_id'];

        $result = $this
            ->startCondition()
            ->select($columns)
            ->paginate($perPage);

        return $result;

    }

    /**
     * Getting the category by id.
     * @param int $id
     * @return Model
     */
    public function getEdit(int $id)
    {
        return $this->startCondition()->find($id);
    }

    /**
     * Getting the list of the categories.
     * @return Application[]|Collection|\Illuminate\Database\Eloquent\Model[]|mixed[]
     */
    public function getForSelect()
    {
        $columns = implode(', ', [
            'id',
            'CONCAT(id, ". ", title) as id_title',
            'description'
        ]);

        $result = $this
            ->startCondition()
            ->selectRaw($columns)
            ->toBase()
            ->get();

        return $result;
    }

}
