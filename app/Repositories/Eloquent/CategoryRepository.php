<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-1
 * Time: 下午5:05
 */

namespace App\Repositories\Eloquent;


use App\Models\Categories;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function model()
    {
        // TODO: Implement model() method.
        return Categories::class;
    }

    public  function getCate()
    {
        return $this->model->getCateArr();
    }
}