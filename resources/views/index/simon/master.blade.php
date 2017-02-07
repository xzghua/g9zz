<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>@yield('title')</title>
    <meta name="apple-mobile-web-app-capable" content="no">
    <link rel="stylesheet" type="text/css" href="/index/simon/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/index/simon/css/index.css"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
    <script src="/index/simon/js/index.js" type="text/javascript" charset="utf-8"></script>
    <style>
        .header .navbar-brand b {
            color: #EB5424;
        }

        .header #main-nav-menu .navbar-nav li a:hover,
        .header #main-nav-menu .navbar-nav li.active a,
        .header #main-nav-menu .navbar-nav li.active a:focus,
        .header #main-nav-menu .navbar-nav li.active a:hover {
            color: #EB5424;
            border-color: #EB5424;
        }

        .header .navbar-inverse .navbar-nav .open .dropdown-menu li.active a {
            color: #EB5424;
        }

        .turbolinks-progress-bar {
            color: #EB5424 !important;
        }
    </style>
</head>

<body>
<div class="header">
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-default">
        <div class="container">
            <div class="navbar-header" id="navbar-header" data-turbolinks-permanent>
                <img src="/index/g9zz/images/logo.png" alt="logo图片" style="height: 40px" />
            </div>
            <div id="main-nav-menu">
                <ul class="nav navbar-nav">
                    @foreach(config('navigate') as $item)
                        <li class="nav-topics">
                            <a href="{{$item['url']}}" title="{{$item['name']}}">{{$item['name']}}</a>
                        </li>
                    @endforeach
                    <script type="text/javascript">
                        $('.navbar-nav .nav-home').addClass("active");
                    </script>
                </ul>
            </div>
            <ul class="nav user-bar navbar-nav navbar-right">
                <li class="dropdown dropdown-avatar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <img class="media-object avatar-32" src="/index/simon/img/avat.jpg" alt="64" /> <span class="caret"></span>
                    </a>
                    <button class="navbar-toggle" type="button" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="sr-only">Toggle</span>
                        <i class="fa fa-reorder"></i>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li class="">
                            <a href="/es6china">es6china</a>
                        </li>
                        <li class="">
                            <div class='divider'></div>
                        </li>
                        <li class="">
                            <a href="/account/edit">个人资料设置</a>
                        </li>
                        <li class="">
                            <a href="/notes">记事本</a>
                        </li>
                        <li class="">
                            <a href="/topics/favorites">我的收藏</a>
                        </li>
                        <li class="">
                            <div class='divider'></div>
                        </li>
                        <li class="">
                            <a rel="nofollow" data-method="delete" href="/account/sign_out">退出</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav user-bar navbar-right">
                <li class="nav-search hidden-xs hidden-sm">
                    <form class="navbar-form form-search active" action="/search" method="GET">
                        <div class="form-group">
                            <input class="form-control" name="q" type="text" value="" placeholder="搜索本站内容" />
                        </div>
                        <i class="fa btn-search fa-search"></i>
                    </form>
                </li>
                <li class="notification-count">
                    <a href="/notifications" class="" title="通知"><i class="fa fa-bell"></i><span class="count">0</span></a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-plus"></i> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="">
                            <a href="/topics/new">发布新话题</a>
                        </li>
                        <li class="">
                            <a href="/notes/new">新建 Note</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>
</div>


@yield('sub-navbar')


<div id="main" class="main-container container">

@yield('content')

</div>

<footer class="footer" id="footer" data-turbolinks-permanent>
    <div class="container">
        <div class="media">
            <div class="media-left" style="margin-right:20px;">
                <img class="media-object" src="//ruby-china-files.b0.upaiyun.com/photo/2016/c309db0b49cab85a32f756541ea0e2b0.png" style="width: 64px;" />
            </div>

            <div class="media-body">
                <div class="links">
                    <a href="">关于</a> /
                    <a href="/users">活跃会员</a> /
                    <a href="/teams">组织</a> /
                    <a href="/api">API</a> /
                    <a href="/wiki/contributors">贡献者</a>
                </div>
                <div class="copyright">
                    中国 Ruby 社区，由众多爱好者共同维护，致力于构建完善的 Ruby 中文社区。
                </div>
                <div class="links" style="margin-top:8px">
                    <a href="?locale=zh-CN" rel="nofollow" style="margin-left: 20px">简体中文</a> /
                    <a href="?locale=zh-TW" rel="nofollow">正體中文</a> /
                    <a href="?locale=en" rel="nofollow">English</a>
                </div>
            </div>
        </div>
    </div>
</footer>

@yield('js')
</body>

</html>