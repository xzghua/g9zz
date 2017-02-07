<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 16-12-30
 * Time: 下午2:14
 */

Route::post('/post/{id}/vote','PostController@vote')->where('id','[0-9]+')->name('post.vote');

Route::get('/','IndexController@index');
//Route::get('/post','IndexController@postList');
Route::get('/list/{cate_slug}','IndexController@postList')->name('index.post.list');
//帖子详情页
Route::get('/detail/{id}','IndexController@postDetail')->where('id','[0-9]+')->name('index.post.detail');
//创建帖子页
Route::get('/post/create','IndexController@getPostCreate')->name('index.post.create');
//提交附言
Route::post('/appends/{id}','IndexController@postAppend')->where('id','[0-9]+')->name('index.appends.store');

//提交回复
Route::post('reply','IndexController@postReply')->name('index.post.reply');
