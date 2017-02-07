<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 16-12-31
 * Time: 下午11:48
 */

namespace App\Traits;

use App\Exceptions\ValidatorException;

trait Respond
{
    public $code = 200;

    public $data;

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function requestValidate(array $data, array $rules, $key = 'default')
    {
        $validation = config('validation');
        $validation = isset($validation[$key]) ? array_merge($validation['default'], $validation[$key]) : $validation['default'];
        $validate = \Validator::make($data, $rules, $validation);
//        dd($validate->errors()->first());
        if ($validate->fails()) {
            $code = (int)$validate->errors()->first();
            throw new ValidatorException($code);
        }
    }

    public function pushError($code)
    {
        throw new ValidatorException($code);
    }

    public function indexPushError()
    {
        return abort(404);
    }

    public function setData($data)
    {
        $this->data = $data;
    }


    public function response()
    {
        return \Response::json(['data' => $this->data,'code' => $this->code]);
    }
}