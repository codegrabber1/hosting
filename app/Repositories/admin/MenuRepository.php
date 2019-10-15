<?php
namespace App\Repositories\admin;
use App\Models\TopMenu as Model;

class MenuRepository extends BaseRepository
{
    protected function getModel()
    {
       return Model::class;
    }
}
