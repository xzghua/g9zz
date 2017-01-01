<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-1
 * Time: 下午11:46
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Auth\RegisterController;
use App\User;

class NewRegisterController extends RegisterController
{

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return parent::validator($data);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data=[])
    {
        $faker = \Faker\Factory::create('zh_CN');



        return User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt(123456),
        ]);
    }


}