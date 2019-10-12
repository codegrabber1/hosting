<?php
namespace App\Repositories\admin;
use App\Models\Price as Model;

class PriceRepository extends BaseRepository {


    /**
     * @return mixed
     */
    protected function getModel()
    {
        return Model::class;
    }

    /**
     * Getting the one plan for editing.
     * @param int $id
     * @return mixed
     */
    public function getPriceEdit($id)
    {
        return $this->startCondition()->find($id);
    }

    public function getShortPlansList($published = null)
    {
        $columns = [
            'id','tariffname','disc_space','price','panel','back-up','is_published'
        ];

        $result =  $this
            ->startCondition()
            ->select($columns)
            ->orderBy('created_at','asc')
            ->where('is_published', $published);

        return $result;
    }
}