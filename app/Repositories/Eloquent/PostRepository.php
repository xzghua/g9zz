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
        // TODO: Implement model() method.
        return Posts::class;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return 1111;
    }

    public function getPostListByCateList($cateList)
    {
        return $this->model->whereIn('category_id',$cateList);
    }
}