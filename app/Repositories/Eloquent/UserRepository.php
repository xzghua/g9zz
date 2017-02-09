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

    public function getUserByGithubId($githubId)
    {
        return $this->model->whereGithubId($githubId)->firstOrFail();
    }
}