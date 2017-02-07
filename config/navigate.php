<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-4
 * Time: 上午10:57
 */

return [
    'index' => [
        'name' => '首页',
        'url' => '/'
    ],
    'all' => [
        'name' => '全部',
        'url' => PHP_SAPI === 'cli' ? false : url('list','all')
    ],
    '0' => [
        'name' => '社区',
        'url' => PHP_SAPI === 'cli' ? false : url('list','shequ')
    ],
    '1' => [
        'name' => '分享',
        'url' => PHP_SAPI === 'cli' ? false : url('list','share')
    ],
    '2' => [
        'name' => '视频',
        'url' => PHP_SAPI === 'cli' ? false : url('list','video')
    ],
    '3' => [
        'name' => '叶落',
        'url' => PHP_SAPI === 'cli' ? false : url('list','ylsc')
    ],


];