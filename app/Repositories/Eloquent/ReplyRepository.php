<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-1
 * Time: 下午11:22
 */

namespace App\Repositories\Eloquent;


use App\Models\Replies;
use App\Repositories\Contracts\ReplyRepositoryInterface;

class ReplyRepository extends BaseRepository implements ReplyRepositoryInterface
{
    public function model()
    {
        // TODO: Implement model() method.
        return Replies::class;
    }


}