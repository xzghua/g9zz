<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-1
 * Time: 下午5:06
 */

namespace App\Repositories\Contracts;


interface CategoryRepositoryInterface extends BaseRepositoryInterface
{

    public function getCate();

    public function getAllSortCate();

    public function getPostListByCateSlug($cateSlug);

    public function getCateSlug($cateName);

    public function getTopCate();

    public function checkParentId($parentId);

    public function checkSlugExists($cateSlug);
}