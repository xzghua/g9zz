<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 16-12-17
 * Time: 下午10:30
 */
namespace App\Repositories\Eloquent;

use App\Models\Posts;
use App\Repositories\Contracts\PostRepositoryInterface;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{

    public function model()
    {
        return Posts::class;
    }

    public function models()
    {
        return $this->model;
    }

    public function getAll()
    {
        return 1111;
    }

    public function getPostListByCateList($cateList)
    {
        return $this->model->whereIn('category_id',$cateList);
    }

    public function getPostDetail($postId)
    {
        return $this->model->whereId($postId)
            ->with('category')
            ->with('author')
            ->with('last_reply_user')
            ->with('reply')
            ->with('postscript')
            ->first();
    }


}