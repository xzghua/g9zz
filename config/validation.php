<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 16-12-31
 * Time: 下午11:09
 */


return [

    'default' => [

    ],

    'post' => [
        'title.required' => 401000000,
        'category_id.required' => 401000001,
        'category_id.exists' => 401000002,
    ],

    'category' => [
        'parent_id.required' =>  402000000,
        'name.required' =>  402000001,
        'slug.max' =>  402000002,
        'slug.unique' =>  402000003,
    ],

];