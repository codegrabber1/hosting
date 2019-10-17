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

    /**
     * @param null $published
     * @param null $unpublished
     * @return mixed
     */

    public function getShortPlansList($published = null, $unpublished = null)
    {
        $columns = [
            'id','tariffname', 'gifts_id','disc_space','price','dom_subdom','support','emails', 'is_published'
        ];

        $result =  $this
            ->startCondition()
            ->select($columns)
            ->where('is_published', $published)
            ->orWhere('is_published', $unpublished)
            ->get();

        return $result;
    }

    public function getPricesList($published = null, $unpublished = null)
    {
        $columns = [
            'id', 'tariffname', 'created_at', 'is_published'
        ];

        $result = $this
            ->startCondition()
            ->select($columns)
            ->orderBy('created_at','asc')
            ->where('is_published', $published)
            ->orWhere('is_published', $unpublished)
            ->get();

        return $result;
    }
}