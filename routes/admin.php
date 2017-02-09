<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 16-12-30
 * Time: 下午2:14
 */

Route::group(['middleware' => ['web','auth']], function () { //需要登陆
//Route::group(['middleware' => ['web']], function () {

//    Route::resource('index','BackendController');
    Route::get('index','BackendController@index')->name('admin.index');
    Route::get('profile','BackendController@showProfile')->name('admin.profile');

    //Post
    Route::get('post','PostController@index')->name('post.index');
    Route::post('post','PostController@store')->name('post.store');
    Route::get('post/create','PostController@create')->name('post.create');
    Route::get('post/{id}/edit','PostController@edit')->where('id','[0-9]+')->name('post.edit');
    Route::get('post/{id}','PostController@show')->where('id','[0-9]+')->name('post.show');
    Route::put('post/{id}','PostController@update')->where('id','[0-9]+')->name('post.update');
    Route::delete('post/{id}','PostController@destroy')->where('id','[0-9]+')->name('post.destroy');

    //Category
    Route::get('category','CategoryController@index')->name('category.index');
    Route::post('category','CategoryController@store')->name('category.store');
    Route::get('category/create','CategoryController@create')->name('category.create');
    Route::get('category/{id}/edit','CategoryController@edit')->where('id','[0-9]+')->name('category.edit');
    Route::get('category/{id}','CategoryController@show')->where('id','[0-9]+')->name('category.show');
    Route::put('category/{id}','CategoryController@update')->where('id','[0-9]+')->name('category.update');

    //Reply
    Route::get('reply','ReplyController@index')->name('reply.index');
    Route::post('reply','ReplyController@store')->name('reply.store');
    Route::get('reply/create','ReplyController@create')->name('reply.create');
    Route::get('reply/{id}/edit','ReplyController@edit')->where('id','[0-9]+')->name('reply.edit');
    Route::put('reply/{id}','ReplyController@update')->where('id','[0-9]+')->name('reply.update');

    //User
    Route::get('user','UserController@index')->name('user.index');

    //Permission
    Route::get('permission','PermissionController@index')->name('permission.index');
    Route::get('permission/create','PermissionController@create')->name('permission.create');
    Route::post('permission','PermissionController@store')->name('permission.store');
    Route::get('permission/{id}/edit','PermissionController@edit')->where('id','[0-9]+')->name('permission.edit');
    Route::put('permission/{id}','PermissionController@update')->where('id','[0-9]+')->name('permission.update');

    //Role
    Route::get('role','RoleController@index')->name('role.index');
    Route::get('role/create','RoleController@create')->name('role.create');
    Route::post('role','RoleController@store')->name('role.store');
    Route::get('role/{id}/edit','RoleController@edit')->where('id','[0-9]+')->name('role.edit');
    Route::put('role/{id}','RoleController@update')->where('id','[0-9]+')->name('role.update');

});

Route::post('register','NewRegisterController@create')->name('user.register');

Route::get('/test','BackendController@testMail');