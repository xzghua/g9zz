<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 16-12-31
 * Time: 下午11:48
 */

namespace App\Traits;


trait Respond
{
    public function requestValidate(array $data, array $rules, $key = 'default')
    {
        $validation = config('validation');
        $validation = isset($validation[$key]) ? array_merge($validation['default'], $validation[$key]) : $validation['default'];
        $validate = \Validator::make($data, $rules, $validation);
        if ($validate->fails()) {
            $code = (int)$validate->errors()->first();
            throw new \Dotenv\Exception\ValidationException($code);
        }
    }
}