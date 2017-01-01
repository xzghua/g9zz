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
Route::get('category/create','CategoryController@create')->name('category.create');
