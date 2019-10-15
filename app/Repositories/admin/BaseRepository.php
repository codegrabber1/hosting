<?php

namespace App\Repositories\admin;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository {

    /**
     * @var Model
     */
    protected $model;

    public function __construct()
    {
        $this->model = app($this->getModel());

    }

    /**
     * @return mixed
     */

   abstract protected function getModel();

    /**
     * @return Application|Model|mixed
     */
   protected function startCondition(){

       return clone $this->model;
   }

    /**
     * @return mixed
     */
   public function get()
   {
       $builder = $this->model->select('*');

       return $builder->get();
   }

}