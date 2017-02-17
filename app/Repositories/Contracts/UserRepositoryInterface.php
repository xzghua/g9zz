<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-8
 * Time: 上午12:12
 */

namespace App\Repositories\Contracts;


interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function getUserByGithubId($githubId);

    public function syncRelationship($role,$id);

}