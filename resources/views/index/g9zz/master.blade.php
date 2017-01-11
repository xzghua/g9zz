<!DOCTYPE html>
<html lang="zh">
<head>

    <meta charset="UTF-8">

    <title>@yield('title')  -- G9ZZ</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <meta name="keywords" content="" />
    <meta name="author" content="g9zz" />
    <meta name="description" content="  " />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/index/g9zz/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/index/g9zz/css/style.css"/>
    @yield('css')
</head>
<body>
<!--
        	作者：hanying991763@163.com
        	时间：2017-01-11
        	描述：头部信息
        -->

<div class="head">
    <div class="header">
        <div class="header_logo">
            <img src="/index/g9zz/images/logo.png" alt="logo图片" style="height: 54px" />
        </div>
        <div class="header_menu">
            @foreach(config('navigate') as $item)
                <a href="{{$item['url']}}" title="{{$item['name']}}">{{$item['name']}}</a>
            @endforeach
        </div>
        <div class="header_info">
            <ul>
                <li><a href="">0</a> </li>
                <li><a href=""><img src="/index/g9zz/images/avat.jpg">琴歌</a></li>
                <li></li>
            </ul>
        </div>
    </div>
</div>


@yield('content')

<!--
        	作者：hanying991763@163.com
        	时间：2017-01-11
        	描述：底部内容
        -->
<div class="footer">
    <div class="footer_content">
        <div class="footer_copyright ">
            <div class="footer_contentinfo">
                <h2>社区说明</h2>
                <p>我们是 PHP 和 Laravel 开发者社区，致力于为 PHP 和 Laravel 开发者提供一个分享创造、结识伙伴、协同互助的平台。</p>
                <p>Copyright © 2016 All Rights Reserved.微前端(W3Cvip) 蜀ICP备13141507号-2.</p>
            </div>
            <div class="footer_contentinfo">
                <h2>赞助商</h2>
                <p>我们是 PHP 和 Laravel 开发者社区，致力于为 PHP 和 Laravel 开发者提供一个分享创造、结识伙伴、协同互助的平台。</p>
                <p>Copyright © 2016 All Rights Reserved.微前端(W3Cvip) 蜀ICP备13141507号-2.</p>
            </div>
            <div class="footer_contentinfo">
                <h2>友情链接</h2>
                <ul>
                    <li><a href="">百度一下</a></li>
                    <li><a href="">百度一下</a></li>
                    <li><a href="">百度一下</a></li>
                    <li><a href="">百度一下</a></li>
                    <li><a href="">百度一下</a></li>
                    <li><a href="">百度一下</a></li>
                    <li><a href="">百度一下</a></li>
                    <li><a href="">百度一下</a></li>
                    <li><a href="">百度一下</a></li>
                    <li><a href="">百度一下</a></li>
                    <li><a href="">百度一下</a></li>
                </ul>
            </div>
        </div>
        <div class="footer_info">
            <h2>其它信息</h2>
            <ul>
                <li><a href="">关于我们</a></li>
                <li><a href="">联系我们</a></li>
                <li><a href="">友情链接</a></li>
                <li><a href="">网站源码</a></li>
                <li><a href="">新手入门</a></li>
            </ul>
        </div>
        <div class="footer_adv">
            <h2>统计信息</h2>
            <ul>
                <li><a href="">社区会员: 9339</a></li>
                <li><a href="">主题数: 3280</a></li>
                <li><a href="">评论数: 17101</a></li>
            </ul>
        </div>

    </div>
</div>
@yield('js')
</body>
</html>
