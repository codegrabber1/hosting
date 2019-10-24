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
}
