<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-2-7
 * Time: 下午5:16
 */

namespace App\Http\Controllers\Index;


use App\Http\Controllers\Controller;

class MeCenterController extends Controller
{

    public function index()
    {
        return view('index.'.set_index_theme().'.center');
    }



}