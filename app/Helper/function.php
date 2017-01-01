<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-1
 * Time: 上午4:21
 */

/**
 * 将数组键值驼峰转下划线
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

/**
 * limit最大只能为100
 */
if(!function_exists('per_page')) {
    function per_page($per_page = null)
    {
        $per_page = isset($per_page) ? $per_page : '30';

        if ($per_page >= 100) $per_page = 100;

        return $per_page;

    }
}


if (!function_exists('set_theme')) {
    function set_theme($theme = 'default')
    {
        return $theme;
    }
}