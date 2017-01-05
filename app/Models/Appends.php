<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Appends
 *
 * @property int $id
 * @property string $content 帖子附言内容
 * @property int $topic_id 帖子ID
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Posts $post
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Appends whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Appends whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Appends whereTopicId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Appends whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Appends whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Appends extends Model
{
    protected $table = 'appends';

    protected $fillable = [
        'content','topic_id',
    ];

    public function post()
    {
        return $this->hasOne(Posts::class,'post_id','id');
    }

}

