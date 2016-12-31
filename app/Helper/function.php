<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-1
 * Time: 上午4:21
 */

if (!function_exists('parse_input')) {
    function parse_input($array)
    {
        $newArr = [];
        foreach ($array as $key => $item) {
            $newArr[strtolower(preg_replace('/((?<=[a-z])(?=[A-Z]))/', '_', $key))] = $item ;
        }
        return $newArr;
    }
}