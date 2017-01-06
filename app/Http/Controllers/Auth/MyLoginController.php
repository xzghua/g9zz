<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-6
 * Time: 下午8:23
 */

namespace App\Http\Controllers\Auth;


use Laravel\Socialite\Facades\Socialite;

class MyLoginController extends LoginController
{

    public function showLoginForm()
    {
        return view('auth.myLogin');
    }

    /**
     * 将用户重定向到Github认证页面
     * @param $service
     * @return Response
     */
    public function redirectToProvider($service)
    {
        return Socialite::driver($service)->redirect();
    }

    /**
     * 从Github获取用户信息.
     * @param $service
     * @return Response
     */
    public function handleProviderCallback($service)
    {
        $user = Socialite::driver($service)->stateless()->user();
        dd($user);
        // $user->token;
    }



}