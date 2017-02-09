<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-2-8
 * Time: 下午6:17
 */

namespace App\Models;


use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $table = 'permissions';

    protected $fillable = [
        'name','display_name','description'
    ];
}