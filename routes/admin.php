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
    Route::get('post','PostController@index')->name('admin.post.index');
    Route::post('post','PostController@store')->name('admin.post.store');
    Route::get('post/create','PostController@create')->name('admin.post.create');
    Route::get('post/{id}/edit','PostController@edit')->where('id','[0-9]+')->name('admin.post.edit');
    Route::get('post/{id}','PostController@show')->where('id','[0-9]+')->name('admin.post.show');
    Route::put('post/{id}','PostController@update')->where('id','[0-9]+')->name('admin.post.update');
    Route::delete('post/{id}','PostController@destroy')->where('id','[0-9]+')->name('admin.post.destroy');

    //Category
    Route::get('category','CategoryController@index')->name('admin.category.index');
    Route::post('category','CategoryController@store')->name('admin.category.store');
    Route::get('category/create','CategoryController@create')->name('admin.category.create');
    Route::get('category/{id}/edit','CategoryController@edit')->where('id','[0-9]+')->name('admin.category.edit');
    Route::get('category/{id}','CategoryController@show')->where('id','[0-9]+')->name('admin.category.show');
    Route::put('category/{id}','CategoryController@update')->where('id','[0-9]+')->name('admin.category.update');

    //Reply
    Route::get('reply','ReplyController@index')->name('admin.reply.index');
    Route::post('reply','ReplyController@store')->name('admin.reply.store');
    Route::get('reply/create','ReplyController@create')->name('admin.reply.create');
    Route::get('reply/{id}/edit','ReplyController@edit')->where('id','[0-9]+')->name('admin.reply.edit');
    Route::put('reply/{id}','ReplyController@update')->where('id','[0-9]+')->name('admin.reply.update');

    //User
    Route::get('user','UserController@index')->name('admin.user.index');

    //Permission
    Route::get('permission','PermissionController@index')->name('admin.permission.index');
    Route::get('permission/create','PermissionController@create')->name('admin.permission.create');
    Route::post('permission','PermissionController@store')->name('admin.permission.store');
    Route::get('permission/{id}/edit','PermissionController@edit')->where('id','[0-9]+')->name('admin.permission.edit');
    Route::put('permission/{id}','PermissionController@update')->where('id','[0-9]+')->name('admin.permission.update');

    //Role
    Route::get('role','RoleController@index')->name('admin.role.index');
    Route::get('role/create','RoleController@create')->name('admin.role.create');
    Route::post('role','RoleController@store')->name('admin.role.store');
    Route::get('role/{id}/edit','RoleController@edit')->where('id','[0-9]+')->name('admin.role.edit');
    Route::put('role/{id}','RoleController@update')->where('id','[0-9]+')->name('admin.role.update');

    //role - assign permission
    Route::get('role/{id}/assign','RoleController@getAssignPermission')->where('id','[0-9]+')->name('admin.role.assignment');
    Route::post('role/{id}/assign','RoleController@postAssignPermission')->where('id','[0-9]+')->name('admin.role.assign');
    //user - assign role
    Route::get('user/{id}/assign','UserController@getAssignRole')->where('id','[0-9]+')->name('admin.user.assignment');
    Route::post('user/{id}/assign','UserController@postAssignRole')->where('id','[0-9]+')->name('admin.user.assign');



});

Route::post('register','NewRegisterController@create')->name('user.register');

Route::get('/test','BackendController@testMail');