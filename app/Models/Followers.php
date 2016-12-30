<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Followers
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int $follow_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Followers whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Followers whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Followers whereFollowId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Followers whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Followers whereUpdatedAt($value)
 */
class Followers extends Model
{
    //
    protected $table = 'followers';

    protected $fillable = [
        'user_id','follow_id',
    ];
}
