<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-5
 * Time: 下午2:47
 */

namespace App\Repositories\Contracts;


interface AppendRepositoryInterface extends BaseRepositoryInterface
{
    public function getAppendByPostId($topicId);
}