<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-2-9
 * Time: 上午11:55
 */

namespace App\Repositories\Eloquent;


use App\Models\Role;
use App\Repositories\Contracts\RoleRepositoryInterface;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    public function model()
    {
        return Role::class;
    }

    public function models()
    {
        return $this->model;
    }

    public function getHadAssignedPermission($roleId)
    {
        return $this->model->find($roleId)->perms()->get();
    }

    public function getHadAssignedPermissionIds($roleId)
    {
        $result = $this->getHadAssignedPermission($roleId);
        $ids = [];
        if (!empty($result->toArray())) {
            foreach ($result as $value) {
                array_push($ids,$value->id);
            }
            array_unique($ids);
        }

        return $ids;
    }
}