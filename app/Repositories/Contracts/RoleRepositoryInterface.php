<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-2-9
 * Time: 上午11:56
 */

namespace App\Repositories\Contracts;


interface RoleRepositoryInterface extends BaseRepositoryInterface
{
    public function getHadAssignedPermission($roleId);

    public function getHadAssignedPermissionIds($roleId);

    public function syncRelationship($permissions,$id);
}