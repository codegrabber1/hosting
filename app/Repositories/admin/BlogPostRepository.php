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

    /**
     * Getting the posts list on the dashboard and sidebar.
     * @param null $perPage
     * @param null $published
     * @param null $unpublished
     * @return mixed
     */
    public function getPostsList($perPage = null, $published = null, $unpublished = null)
    {
        $columns = [
            'id', 'image', 'title', 'excerpt', 'created_at', 'user_id', 'is_published'
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
     * Getting the one post for editing.
     * @param int $id
     * @return mixed
     */
    public function getPostEdit(int $id) {

        return $this->startCondition()
                ->find($id);
    }
}
