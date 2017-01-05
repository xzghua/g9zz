<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

