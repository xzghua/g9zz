<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 16-12-30
 * Time: 下午2:14
 */

Route::resource('index','BackendController');
Route::get('post','PostController@index')->name('post');