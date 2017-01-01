<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Posts
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $title 帖子标题
 * @property string $content 帖子内容
 * @property string $source 来源跟踪：iOS，Android
 * @property int $user_id 作者ID
 * @property int $category_id 分类ID
 * @property int $reply_count 回复数
 * @property int $view_count 查看数
 * @property int $vote_count 点赞数
 * @property int $last_reply_user_id 最后回复人的ID
 * @property int $order
 * @property string $is_excellent 是否置顶
 * @property string $is_blocked 是否block
 * @property string $body_original 原内容
 * @property string $excerpt 摘要
 * @property string $is_tagged
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereSource($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereReplyCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereViewCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereVoteCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereLastReplyUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereOrder($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereIsExcellent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereIsBlocked($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereBodyOriginal($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereExcerpt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereIsTagged($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Posts whereUpdatedAt($value)
 */
class Posts extends Model
{
    //
    protected $table = 'posts';

    public $fillable = [
        'title','content','source','user_id',
        'category_id','reply_count','view_count','vote_count',
        'last_reply_user_id','order','is_excellent','is_blocked',
        'body_original','excerpt','is_tagged',
    ];

    public function tag()
    {
        return $this->hasMany(Tags::class);
    }

    public function category()
    {
        return $this->hasOne(Categories::class,'category_id','id');
    }
}
