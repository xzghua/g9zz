<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 16-12-17
 * Time: 下午10:28
 */
namespace App\Repositories\Contracts;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function getAll();

    public function getPostListByCateList($cateList);

    public function getPostDetail($postId);

    public function models();
}