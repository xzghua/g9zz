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
        return Categories::class;
    }

    public  function getCate()
    {
        return $this->model->getCateArr();
    }

    public function getAllSortCate()
    {
        $categories = $this->model->all()->toArray();
        $list = array();
        foreach($categories as $key =>  $value){
            if($value['parent_id'] == 0){
                $list[$value['id']] = $value;
            } else {
                $list[$value['parent_id']]['child'][] = $value;
            }
            unset($categories[$key]);
        }
        return $list;
    }

    /**
     * 通过分类名获取 该分类或者该分类下级的所有分类 集合
     *
     * @date 2017年01月03日16:41:19
     * @param $cateSlug
     * @return array
     */
    public function getPostListByCateSlug($cateSlug)
    {
        $cate = $this->model->whereSlug($cateSlug)->first();

        $cateList = [];
        if ($cate->parent_id == 0) {
            $cateList = $this->model->whereParentId($cate->id)->pluck('id')->toArray();
        }

        array_push($cateList,$cate->id);

        return $cateList;
    }

    /**
     * 通过分类名获取缩略名
     * @date 2017年01月03日16:43:03
     * @param $cateName
     * @return mixed
     */
    public function getCateSlug($cateName)
    {
        return $this->model->whereName($cateName)->pluck('slug')->toArray();
    }

    /**
     * 获取顶层分类
     *
     * @return mixed
     */
    public function getTopCate()
    {
        return $this->model->whereParentId(0)->get();

    }

    /**
     * 校验当前分类是否为第二层!
     * @date 2017年01月03日18:09:07
     * @param $parentId
     * @return mixed
     */
    public function checkParentId($parentId)
    {
        return $this->model->whereId($parentId)->value('parent_id');
    }

    /**
     * 通过分类slug校验分类是否存在
     *
     * @param $cateSlug
     * @return mixed
     */
    public function checkSlugExists($cateSlug)
    {
        return $this->model->whereSlug($cateSlug)->value('id');
    }

    /**
     * 获取is_show为'yes'的该分类下的所有和
     *
     * @param $parentId
     * @return mixed
     */
    public function getAllIsShowCate($parentId)
    {
        $childCate = $this->model->whereParentId($parentId)->whereIsShow('yes')->pluck('id')->toArray();
        $cate = $this->model->whereId($parentId)->first()->toArray();
        if ($cate['is_show'] == 'yes') {
            array_push($childCate,$cate['id']);
        }
        return $childCate;
    }

    public function getAllIsShowCateByCateSlug($cateSlug)
    {
        $cate = $this->model->whereSlug($cateSlug)->first();
        if ($cate->parent_id != 0) {
            $id = $cate->parent_id;
        } else {
            $id = $cate->id;
        }

        return $this->model->whereParentId($id)->whereIsShow('yes')->get();
    }
}