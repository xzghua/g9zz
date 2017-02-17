<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-8
 * Time: 上午12:13
 */

namespace App\Repositories\Eloquent;


use App\Models\Users;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function model()
    {
        return Users::class;
    }

    public function models()
    {
        return $this->model;
    }

    /**
     *
     * 通过github 获取用户
     *
     * @param $githubId
     * @return mixed
     */
    public function getUserByGithubId($githubId)
    {
        return $this->model->whereGithubId($githubId)->firstOrFail();
    }

    /**
     *
     * 获取已分配的角色
     *
     * @param $userId
     * @return mixed
     */
    public function getAssignRole($userId)
    {
        return $this->model->find($userId)->roles()->get();
    }

    /**
     *
     * 获取已分配的角色ID集合
     *
     * @param $userId
     * @return array
     */
    public function getAssignRoleIds($userId)
    {
        $result = $this->getAssignRole($userId);
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
     *
     * 分配角色
     *
     * @param $role
     * @param $id
     * @return bool
     */
    public function syncRelationship($role,$id)
    {
        try{
            \DB::beginTransaction();
            $this->model->find($id)->roles()->sync([]);
            $this->model->find($id)->roles()->sync($role);
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