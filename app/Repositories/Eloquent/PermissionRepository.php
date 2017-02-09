<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-2-9
 * Time: 上午11:58
 */

namespace App\Repositories\Eloquent;


use App\Models\Permission;
use App\Repositories\Contracts\PermissionRepositoryInterface;

class PermissionRepository extends BaseRepository implements PermissionRepositoryInterface
{
    public function model()
    {
        return Permission::class;
    }

    public function models()
    {
        return $this->model;
    }
}