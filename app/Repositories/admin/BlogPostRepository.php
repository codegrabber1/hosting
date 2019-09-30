<?php
namespace App\Repositories\admin;

use App\Models\BlogPost as Model;


class BlogPostRepository extends BaseRepository {

    /**
     * Getting the model of a database of the posts.
     * @var Model
     * @return mixed
     */
    protected function getModel()
    {

        return Model::class;
    }

    public function getPostsList($perPage = null)
    {
        $columns = [
            'id', 'image', 'title', 'created_at', 'is_published'
        ];

        $result = $this
            ->startCondition()
            ->select($columns)
            ->orderBy('created_at','desc')
            ->paginate($perPage);

        return $result;
    }

    public function getPostEdit(int $id) {

        return $this->startCondition()
                ->find($id);
    }
}
