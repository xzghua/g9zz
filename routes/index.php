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
Route::get('/list/{cate_slug}','IndexController@postList')->name('post.list');

Route::get('auth/{service}', 'Auth\MyLoginController@redirectToProvider');
Route::get('auth/{service}/callback', 'Auth\MyLoginController@handleProviderCallback');