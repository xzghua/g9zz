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
 */
class Categories extends Model
{
    //
    protected $table = 'categories';

    protected $fillable = [
        'parent_id','post_count','weight','name',
        'slug','description',
    ];
}
