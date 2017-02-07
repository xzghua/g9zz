<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-5
 * Time: 下午2:48
 */

namespace App\Repositories\Eloquent;

use App\Models\Appends;
use App\Repositories\Contracts\AppendRepositoryInterface;

class AppendRepository extends BaseRepository implements AppendRepositoryInterface
{
    public function model()
    {
        return Appends::class;
    }

    public function getAppendByPostId($topicId)
    {
        return $this->model->whereTopicId($topicId)->get();
    }
}