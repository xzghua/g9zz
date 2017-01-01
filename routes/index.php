<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 16-12-30
 * Time: 下午2:14
 */

Route::post('/post/{id}/vote','PostController@vote')->where('id','[0-9]+')->name('post.vote');
