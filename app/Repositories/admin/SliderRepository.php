<?php
namespace App\Repositories\admin;

use App\Models\Slider as Model;

class SliderRepository extends BaseRepository
{

    /**
     * @return mixed
     */
    protected function getModel()
    {
        return Model::class;
    }


    public function getSlidesList($perPage = null, $published = null, $unpublished = null)
    {
        $columns = [
            'id', 'image', 'title', 'description', 'created_at', 'user_id', 'is_published'
        ];

        $result = $this
            ->startCondition()
            ->select($columns)
            ->orderBy('created_at','asc')
            ->where('is_published', $published)
            ->orWhere('is_published', $unpublished)
            ->paginate($perPage);

        return $result;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getEdit(int $id)
    {
        return $this->startCondition()->find($id);
    }
}
