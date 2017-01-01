<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 16-12-30
 * Time: 下午2:14
 */

Route::resource('index','BackendController');


//Post
Route::get('post','PostController@index')->name('post.index');
Route::post('post','PostController@store')->name('post.store');
Route::get('post/create','PostController@create')->name('post.create');
Route::get('post/{id}/edit','PostController@edit')->where('id','[0-9]+')->name('post.edit');
Route::put('post/{id}','PostController@update')->where('id','[0-9]+')->name('post.update');
Route::delete('post/{id}','PostController@destroy')->where('id','[0-9]+')->name('post.destroy');

//Category
Route::get('category','CategoryController@index')->name('category.index');
Route::post('category','CategoryController@store')->name('category.store');
Route::get('category/create','CategoryController@create')->name('category.create');
Route::get('category/{id}/edit','CategoryController@edit')->where('id','[0-9]+')->name('category.edit');
Route::put('category/{id}','CategoryController@update')->where('id','[0-9]+')->name('category.update');

//Reply
Route::get('reply','ReplyController@index')->name('reply.index');
Route::post('reply','ReplyController@store')->name('reply.store');
Route::get('reply/create','ReplyController@create')->name('reply.create');
Route::get('reply/{id}/edit','ReplyController@edit')->where('id','[0-9]+')->name('reply.edit');
Route::put('reply/{id}','ReplyController@update')->where('id','[0-9]+')->name('reply.update');


Route::post('register','NewRegisterController@create')->name('user.register');