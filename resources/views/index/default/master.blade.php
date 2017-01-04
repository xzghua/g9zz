<!--
______                            _                   _ _ _ _ _
| ___ \                          | |                / /- - - - \
| |_/ /___ __      __ ___  _ __  | |__   _   _     /         |  \
|  __// _ \\ \ /\ / // _ \| '__| | '_ \ | | | |   |
| |  | (_) |\ V  V /|  __/| |    | |_) || |_| |   |
\_|   \___/  \_/\_/  \___||_|    |_.__/  \__, |    \
                                          __/ |
                                         |___/
  ========================================================
                                           laravel-china.org

  --------------------------------------------------------
  Powered by PHPHub
-->

<!DOCTYPE html>
<html lang="zh">
<head>

    <meta charset="UTF-8">

    <title>@yield('title')  -- G9ZZ</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <meta name="keywords" content="" />
    <meta name="author" content="g9zz" />
    <meta name="description" content="  " />

    <link rel="stylesheet" href="/index/default/build/assets/css/styles-a6f44dd75d.css">

    <link rel="shortcut icon" href="/index/default/assets/images/logo.png"/>
    @yield('css')
    <script>
        Config = {
            'cdnDomain': 'http://www.g9zz.com/',
            'user_id': 0,
            'user_avatar': "",
            'user_link': "",
            'routes': {
                'notificationsCount' : 'http://www.g9zz.com/notifications/count',
                'upload_image' : 'http://www.g9zz.com/upload_image'
            },
            'token': 'PlrajfakyffLlTHKHGNT152tItEmwx2A1OddcoZn',
            'environment': 'production',
            'following_users': []
        };

        var ShowCrxHint = 'no';
    </script>


    <meta http-equiv="x-pjax-version" content="/index/default/build/assets/css/styles-a6f44dd75d.css">

</head>
<body id="body">

<div id="wrap">

    <div role="navigation" class="navbar navbar-default navbar-static-top topnav">
        <div class="container">
            <div class="navbar-header hidden-xs">

                <a href="/" class="navbar-brand">
                    <img src="/index/default/assets/images/logo.png" alt="Laravel China" />
                </a>
            </div>
            <div id="top-navbar-collapse" class="navbar-collapse">
                <ul class="nav navbar-nav">
                    @foreach(config('navigate') as $item)
                        <li class=""><a href="{{$item['url']}}">{{$item['name']}}</a></li>
                    @endforeach
                    {{--<li class=""><a href="topics">社区</a></li>--}}
                    {{--<li class=""><a href="categories/6?filter=recent">知乎</a></li>--}}
                    {{--<li class=""><a href="categories/1">微博</a></li>--}}

                </ul>

                <div class="navbar-right">
                    <form method="GET" action="/search" accept-charset="UTF-8" class="navbar-form navbar-left" target="_blank">
                        <div class="form-group">
                            <input class="form-control search-input mac-style" placeholder="搜索" name="q" type="text">
                        </div>
                    </form>

                    <ul class="nav navbar-nav github-login" >

                        <a href="auth/oauth?driver=github" class="btn btn-info login-btn">
                            <i class="fa fa-github-alt"></i>
                            登 录
                        </a>
                    </ul>
                </div>
            </div>

        </div>
    </div>





    @yield('content')




    <footer class="footer">
        <div class="container">
            <div class="row footer-top">

                <div class="col-sm-5 col-lg-5">

                    <p class="padding-top-xsm">g9zz网,一个乱七八糟的的地方</p>

                    <div class="text-md " >
                        <a class="popover-with-html" data-content="查看源代码" target="_blank" style="padding-right:8px" href="https://github.com/summerblue/phphub5"><i class="fa fa-github-alt" aria-hidden="true"></i></a>
                    </div>
                    <br>
                    <span style="font-size:0.9em">
                  Powered by <a href="https://github.com/Yela528/g9zz" rel="nofollow" target="_blank" style="color:inherit">G9ZZ</a>
              </span>
                </div>

                <div class="col-sm-6 col-lg-6 col-lg-offset-1">

                    <div class="row">
                        <div class="col-sm-4">
                            <h4>接受广告</h4>
                            <ul class="list-unstyled">
                            </ul>
                        </div>

                        <div class="col-sm-4">
                            <h4>统计信息</h4>
                            <ul class="list-unstyled">
                                <li>社区会员: 3 </li>
                                <li>主题数: 3 </li>
                                <li>评论数: 11 </li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h4>其他信息</h4>
                            <ul class="list-unstyled">
                                <li><a href="about"><i class="fa fa-info-circle" aria-hidden="true"></i> 关于我们</a></li>
                                <li><a href="hall_of_fames"><i class="fa fa-star" aria-hidden="true"></i> 名人堂</a></li>
                                <li><a href="index.html#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 技术合作</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
            <br>
            <br>
        </div>
    </footer>

</div>



<script src="/index/default/build/assets/js/scripts-7a6c552c9d.js"></script>



@yield('js')




</body>
</html>