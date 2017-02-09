<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 16-12-31
 * Time: 下午11:09
 */

return [

    0 => '正常?',

    400000000 => '内部服务器错误,请稍后再试',
    400000001 => '数据不存在,请检查后再试',

    //post
    401000000 => '请输入标题',
    401000001 => '请选择分类',
    401000002 => '该分类不存在,请检查后再试',

    //category
    402000000 => '请选择父类',
    402000001 => '请输入分类名',
    402000002 => '缩略名超出长度,请检查后再试',
    402000003 => '缩略名已存在,请检查后再试',
    402000004 => '分类名已存在,请检查后再试',
    402000005 => 'slug必须是字符或数字,请检查后再试',
    402000006 => '不允许选择二级分类为父分类',
    402000007 => '不运行选择自己为自己的父类',
    402000008 => '已超出该分类下所有IS_SHOW数量,请检查后再试',

    //reply
    403000000 => '请输入回复内容',
    403000001 => '缺少帖子ID',
    403000002 => '您回复的帖子不存在,请检查后再试',

    //append
    405000000 => '请输入附加内容',

    //permission
    406000000 => '请输入权限名',
    406000001 => '请输入权限显示名',
    406000002 => '权限描述范围超出',
    406000003 => '权限名已存在',

    //role
    407000000 => '请输入角色名',
    407000001 => '请输入角色显示名',
    407000002 => '角色描述范围超出',
    407000003 => '角色名已存在',
];