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

    /**
     *
     * 获取 已分配的权限
     *
     * @param $roleId
     * @return mixed
     */
    public function getHadAssignedPermission($roleId)
    {
        return $this->model->find($roleId)->perms()->get();
    }

    /**
     *
     * 获取已分配的权限的ID列表
     *
     * @param $roleId
     * @return array
     */
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

    /**
     * @param $permissions
     * @param $id
     * @return bool
     */
    public function syncRelationship($permissions,$id)
    {
        try{
            \DB::beginTransaction();
            $this->model->find($id)->perms()->sync([]);
            $this->model->find($id)->perms()->sync($permissions);
            \DB::commit();
            return true;
        } catch (\Exception $e) {
            \DB::rollBack();
            $code = $e->getCode();
            \Log::info('"controller.error" to listener "' . __METHOD__ . '".', ['message' => $e->getMessage(), 'code' => $code]);
            return false;
        }

    }
}