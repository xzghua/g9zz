<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-1
 * Time: 下午11:21
 */

namespace App\Repositories\Contracts;


interface ReplyRepositoryInterface extends BaseRepositoryInterface
{
    public function getEditReply($id);
}