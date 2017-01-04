<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Categories
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $parent_id 父级 id
 * @property int $post_count 帖子数
 * @property bool $weight 权重
 * @property string $name 名称
 * @property string $slug 缩略名
 * @property string $description 描述
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Categories whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Categories whereParentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Categories wherePostCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Categories whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Categories whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Categories whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Categories whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Categories whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Categories whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Categories whereDeletedAt($value)
 * @property string $is_show
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Categories whereIsShow($value)
 */
class Categories extends Model
{
    //
    protected $table = 'categories';

    protected $fillable = [
        'parent_id','post_count','weight','name',
        'slug','description','is_show'
    ];


    /**
     *
     * @date 2016年08月08日12:00:07
     * @return array
     */
    public function  getCateArr()
    {
        $cate = self::all();
        $getTreeArr =  self::tree($cate);
        foreach ($getTreeArr as $key => $value) {
            $getTreeArr[$key]->newHtml = $value->html.$value->cate_name;
        }

        return $getTreeArr;
    }

    /**
     * 通过遍历拿到分类数组(此处参考他人写法 laravel-5-blog)
     * @date 2016年08月08日12:00:53
     * @param $model
     * @param int $parentId
     * @param int $level
     * @param string $html
     * @return array
     */
    public static function tree($model, $parentId = 0, $level = 0, $html = '-')
    {
        $data = array();
        foreach ($model as $k => $v) {
            if ($v->parent_id == $parentId) {
                if ($level != 0) {
                    $v->html = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $level);
                    $v->html .= '|';
                }
                $v->html .= str_repeat($html, $level);
                $v->level = $level;
                $data[] = $v;
                $data = array_merge($data, self::tree($model, $v->id, $level + 1));
            }
        }
        return $data;
    }

}
