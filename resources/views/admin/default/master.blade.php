<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">

    <meta name="description" content="Violate Responsive Admin Template">
    <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

    <title>叶落山城秋</title>

    <!-- CSS -->
    <link href="/admin/default/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/default/css/animate.min.css" rel="stylesheet">
    <link href="/admin/default/css/font-awesome.min.css" rel="stylesheet">
    <link href="/admin/default/css/form.css" rel="stylesheet">
    <link href="/admin/default/css/calendar.css" rel="stylesheet">
    <link href="/admin/default/css/style.css" rel="stylesheet">
    <link href="/admin/default/css/icons.css" rel="stylesheet">
    <link href="/admin/default/css/generics.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>
<body id="skin-blur-violate">

<header id="header" class="media">
    <a href="" id="menu-toggle"></a>
    <a class="logo pull-left" href="index.html">G9ZZ 1.0</a>

    <div class="media-body">
        <div class="media" id="top-menu">
            <div class="pull-left tm-icon">
                <a data-drawer="messages" class="drawer-toggle" href="">
                    <i class="sa-top-message"></i>
                    <i class="n-count animated">5</i>
                    <span>Messages</span>
                </a>
            </div>
            <div class="pull-left tm-icon">
                <a data-drawer="notifications" class="drawer-toggle" href="">
                    <i class="sa-top-updates"></i>
                    <i class="n-count animated">9</i>
                    <span>Updates</span>
                </a>
            </div>



            <div id="time" class="pull-right">
                <span id="hours"></span>
                :
                <span id="min"></span>
                :
                <span id="sec"></span>
            </div>

            <div class="media-body">
                <input type="text" class="main-search">
            </div>
        </div>
    </div>
</header>

<div class="clearfix"></div>

<section id="main" class="p-relative" role="main">

    <!-- Sidebar -->
    <aside id="sidebar">

        <!-- Sidbar Widgets -->
        <div class="side-widgets overflow">
            <!-- Profile Menu -->
            <div class="text-center s-widget m-b-25 dropdown" id="profile-menu">
                <a href="" data-toggle="dropdown">
                    <img class="profile-pic animated" src="/admin/default/img/profile-pic.jpg" alt="">
                </a>
                <ul class="dropdown-menu profile-menu">
                    <li><a href="">My Profile</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                    <li><a href="">Messages</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                    <li><a href="">Settings</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                    <li><a href="">Sign Out</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                </ul>
                <h4 class="m-0">Malinda Hollaway</h4>
                @malinda-h
            </div>

            <!-- Calendar -->
            <div class="s-widget m-b-25">
                <div id="sidebar-calendar"></div>
            </div>

            <!-- Feeds -->
            <div class="s-widget m-b-25">
                <h2 class="tile-title">
                    News Feeds
                </h2>

                <div class="s-widget-body">
                    <div id="news-feed"></div>
                </div>
            </div>

            <!-- Projects -->
            <div class="s-widget m-b-25">
                <h2 class="tile-title">
                    Projects on going
                </h2>

                <div class="s-widget-body">
                    <div class="side-border">
                        <small>Joomla Website</small>
                        <div class="progress progress-small">
                            <a href="#" data-toggle="tooltip" title="" class="progress-bar tooltips progress-bar-danger" style="width: 60%;" data-original-title="60%">
                                <span class="sr-only">60% Complete</span>
                            </a>
                        </div>
                    </div>
                    <div class="side-border">
                        <small>Opencart E-Commerce Website</small>
                        <div class="progress progress-small">
                            <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-info" style="width: 43%;" data-original-title="43%">
                                <span class="sr-only">43% Complete</span>
                            </a>
                        </div>
                    </div>
                    <div class="side-border">
                        <small>Social Media API</small>
                        <div class="progress progress-small">
                            <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-warning" style="width: 81%;" data-original-title="81%">
                                <span class="sr-only">81% Complete</span>
                            </a>
                        </div>
                    </div>
                    <div class="side-border">
                        <small>VB.Net Software Package</small>
                        <div class="progress progress-small">
                            <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-success" style="width: 10%;" data-original-title="10%">
                                <span class="sr-only">10% Complete</span>
                            </a>
                        </div>
                    </div>
                    <div class="side-border">
                        <small>Chrome Extension</small>
                        <div class="progress progress-small">
                            <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-success" style="width: 95%;" data-original-title="95%">
                                <span class="sr-only">95% Complete</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--{{dd( url()->current(),url()->full(),url()->previous(),\Request::getRequestUri())}}--}}
        <!-- Side Menu -->
        <ul class="list-unstyled side-menu">
            <li @if (\Request::getRequestUri() == '/admin/index') class="active" @endif>
                <a class="sa-side-home " href="/admin/index">
                    <span class="menu-item">Dashboard</span>
                </a>
            </li>

            {{--帖子--}}
            <li class="dropdown @if (\Request::getRequestUri() == '/admin/post') active @endif" >
                <a class="sa-side-table" href="">
                    <span class="menu-item">帖子</span>
                </a>
                <ul class="list-unstyled menu-item">
                    <li><a href="/admin/post" class="@if (\Request::getRequestUri() == '/admin/post') active @endif">列表</a></li>
                    <li><a href="/admin/post/create">创建帖子</a></li>
                </ul>
            </li>

            {{--分类--}}
            <li class="dropdown @if (\Request::getRequestUri() == '/admin/category') active @endif" >
                <a class="sa-side-typography" href="">
                    <span class="menu-item">分类</span>
                </a>
                <ul class="list-unstyled menu-item">
                    <li><a href="/admin/category" class="@if (\Request::getRequestUri() == '/admin/category') active @endif">分类列表</a></li>
                    <li><a href="/admin/category/create">创建分类</a></li>
                </ul>
            </li>

            {{--回复--}}
            <li class="dropdown @if (\Request::getRequestUri() == '/admin/reply') active @endif" >
                <a class="sa-side-widget" href="">
                    <span class="menu-item">回复</span>
                </a>
                <ul class="list-unstyled menu-item">
                    <li><a href="/admin/reply" class="@if (\Request::getRequestUri() == '/admin/reply') active @endif">回复列表</a></li>
                    <li><a href="/admin/reply/create">新建回复</a></li>
                </ul>
            </li>



            {{--<li>--}}
                {{--<a class="sa-side-typography" href="typography.html">--}}
                    {{--<span class="menu-item">Typography</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="sa-side-widget" href="content-widgets.html">--}}
                    {{--<span class="menu-item">Widgets</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            <li>
                <a class="sa-side-table" href="tables.html">
                    <span class="menu-item">Tables</span>
                </a>
            </li>

            <li class="dropdown">
                <a class="sa-side-ui" href="">
                    <span class="menu-item">User Interface</span>
                </a>
                <ul class="list-unstyled menu-item">
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="labels.html">Labels</a></li>
                    <li><a href="images-icons.html">Images &amp; Icons</a></li>
                    <li><a href="alerts.html">Alerts</a></li>
                    <li><a href="media.html">Media</a></li>
                    <li><a href="components.html">Components</a></li>
                    <li><a href="other-components.html">Others</a></li>
                </ul>
            </li>
            <li>
                <a class="sa-side-chart" href="charts.html">
                    <span class="menu-item">Charts</span>
                </a>
            </li>
            <li>
                <a class="sa-side-folder" href="file-manager.html">
                    <span class="menu-item">File Manager</span>
                </a>
            </li>
            <li>
                <a class="sa-side-calendar" href="calendar.html">
                    <span class="menu-item">Calendar</span>
                </a>
            </li>
            <li class="dropdown">
                <a class="sa-side-page" href="">
                    <span class="menu-item">Pages</span>
                </a>
                <ul class="list-unstyled menu-item">
                    <li><a href="list-view.html">List View</a></li>
                    <li><a href="profile-page.html">Profile Page</a></li>
                    <li><a href="messages.html">Messages</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="404.html">404 Error</a></li>
                </ul>
            </li>
        </ul>

    </aside>

    <!-- Content -->
    <section id="content" class="container">

        <!-- Messages Drawer -->
        <div id="messages" class="tile drawer animated">
            <div class="listview narrow">
                <div class="media">
                    <a href="">Send a New Message</a>
                    <span class="drawer-close">&times;</span>

                </div>
                <div class="overflow" style="height: 254px">
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/1.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Nadin Jackson - 2 Hours ago</small><br>
                            <a class="t-overflow" href="">Mauris consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">David Villa - 5 Hours ago</small><br>
                            <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/3.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Harris worgon - On 15/12/2013</small><br>
                            <a class="t-overflow" href="">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/4.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Mitch Bradberry - On 14/12/2013</small><br>
                            <a class="t-overflow" href="">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/1.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Nadin Jackson - On 15/12/2013</small><br>
                            <a class="t-overflow" href="">Ipsum wintoo consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">David Villa - On 16/12/2013</small><br>
                            <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/3.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Harris worgon - On 17/12/2013</small><br>
                            <a class="t-overflow" href="">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/4.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Mitch Bradberry - On 18/12/2013</small><br>
                            <a class="t-overflow" href="">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/5.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Wendy Mitchell - On 19/12/2013</small><br>
                            <a class="t-overflow" href="">Integer a eros dapibus, vehicula quam accumsan, tincidunt purus</a>
                        </div>
                    </div>
                </div>
                <div class="media text-center whiter l-100">
                    <a href=""><small>VIEW ALL</small></a>
                </div>
            </div>
        </div>

        <!-- Notification Drawer -->
        <div id="notifications" class="tile drawer animated">
            <div class="listview narrow">
                <div class="media">
                    <a href="">Notification Settings</a>
                    <span class="drawer-close">&times;</span>
                </div>
                <div class="overflow" style="height: 254px">
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/1.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Nadin Jackson - 2 Hours ago</small><br>
                            <a class="t-overflow" href="">Mauris consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">David Villa - 5 Hours ago</small><br>
                            <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/3.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Harris worgon - On 15/12/2013</small><br>
                            <a class="t-overflow" href="">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/4.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Mitch Bradberry - On 14/12/2013</small><br>
                            <a class="t-overflow" href="">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/1.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Nadin Jackson - On 15/12/2013</small><br>
                            <a class="t-overflow" href="">Ipsum wintoo consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img width="40" src="/admin/default/img/profile-pics/2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <small class="text-muted">David Villa - On 16/12/2013</small><br>
                            <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                        </div>
                    </div>
                </div>
                <div class="media text-center whiter l-100">
                    <a href=""><small>VIEW ALL</small></a>
                </div>
            </div>
        </div>

        <!-- Breadcrumb -->
        <ol class="breadcrumb hidden-xs">
            <li><a href="#">@yield('menu')</a></li>
            <li><a href="#" class="active">@yield('page')</a></li>
            {{--<li class="active">Data</li>--}}
        </ol>

        <h4 class="page-title">@yield('pageTitle')</h4>

        {{--主要内容--}}
        @yield('content')



        <!-- Chat -->
        <div class="chat">

            <!-- Chat List -->
            <div class="pull-left chat-list">
                <div class="listview narrow">
                    <div class="media">
                        <img class="pull-left" src="/admin/default/img/profile-pics/1.jpg" width="30" alt="">
                        <div class="media-body p-t-5">
                            Alex Bendit
                        </div>
                    </div>
                    <div class="media">
                        <img class="pull-left" src="/admin/default/img/profile-pics/2.jpg" width="30" alt="">
                        <div class="media-body">
                            <span class="t-overflow p-t-5">David Volla Watkinson</span>
                        </div>
                    </div>
                    <div class="media">
                        <img class="pull-left" src="/admin/default/img/profile-pics/3.jpg" width="30" alt="">
                        <div class="media-body">
                            <span class="t-overflow p-t-5">Mitchell Christein</span>
                        </div>
                    </div>
                    <div class="media">
                        <img class="pull-left" src="/admin/default/img/profile-pics/4.jpg" width="30" alt="">
                        <div class="media-body">
                            <span class="t-overflow p-t-5">Wayne Parnell</span>
                        </div>
                    </div>
                    <div class="media">
                        <img class="pull-left" src="/admin/default/img/profile-pics/5.jpg" width="30" alt="">
                        <div class="media-body">
                            <span class="t-overflow p-t-5">Melina April</span>
                        </div>
                    </div>
                    <div class="media">
                        <img class="pull-left" src="/admin/default/img/profile-pics/6.jpg" width="30" alt="">
                        <div class="media-body">
                            <span class="t-overflow p-t-5">Ford Harnson</span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Chat Area -->
            <div class="media-body">
                <div class="chat-header">
                    <a class="btn btn-sm" href="">
                        <i class="fa fa-circle-o status m-r-5"></i> Chat with Friends
                    </a>
                </div>

                <div class="chat-body">
                    <div class="media">
                        <img class="pull-right" src="/admin/default/img/profile-pics/1.jpg" width="30" alt="" />
                        <div class="media-body pull-right">
                            Hiiii<br/>
                            How you doing bro?
                            <small>Me - 10 Mins ago</small>
                        </div>
                    </div>

                    <div class="media pull-left">
                        <img class="pull-left" src="/admin/default/img/profile-pics/2.jpg" width="30" alt="" />
                        <div class="media-body">
                            I'm doing well buddy. <br/>How do you do?
                            <small>David - 9 Mins ago</small>
                        </div>
                    </div>

                    <div class="media pull-right">
                        <img class="pull-right" src="/admin/default/img/profile-pics/2.jpg" width="30" alt="" />
                        <div class="media-body">
                            I'm Fine bro <br/>Thank you for asking
                            <small>Me - 8 Mins ago</small>
                        </div>
                    </div>

                    <div class="media pull-right">
                        <img class="pull-right" src="/admin/default/img/profile-pics/2.jpg" width="30" alt="" />
                        <div class="media-body">
                            Any idea for a hangout?
                            <small>Me - 8 Mins ago</small>
                        </div>
                    </div>

                </div>

                <div class="chat-footer media">
                    <i class="chat-list-toggle pull-left fa fa-bars"></i>
                    <i class="pull-right fa fa-picture-o"></i>
                    <div class="media-body">
                        <textarea class="form-control" placeholder="Type something..."></textarea>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Older IE Message -->
    <!--[if lt IE 9]>
    <div class="ie-block">
        <h1 class="Ops">Ooops!</h1>
        <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser in order to access the maximum functionality of this website. </p>
        <ul class="browsers">
            <li>
                <a href="https://www.google.com/intl/en/chrome/browser/">
                    <img src="/admin/default/img/browsers/chrome.png" alt="">
                    <div>Google Chrome</div>
                </a>
            </li>
            <li>
                <a href="http://www.mozilla.org/en-US/firefox/new/">
                    <img src="/admin/default/img/browsers/firefox.png" alt="">
                    <div>Mozilla Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com/computer/windows">
                    <img src="/admin/default/img/browsers/opera.png" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="http://safari.en.softonic.com/">
                    <img src="/admin/default/img/browsers/safari.png" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/downloads/ie-10/worldwide-languages">
                    <img src="/admin/default/img/browsers/ie.png" alt="">
                    <div>Internet Explorer(New)</div>
                </a>
            </li>
        </ul>
        <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
    </div>
    <![endif]-->
</section>

<!-- Javascript Libraries -->
<!-- jQuery -->
<script src="/admin/default/js/jquery.min.js"></script> <!-- jQuery Library -->
<script src="/admin/default/js/jquery-ui.min.js"></script> <!-- jQuery UI -->
<script src="/admin/default/js/jquery.easing.1.3.js"></script> <!-- jQuery Easing - Requirred for Lightbox + Pie Charts-->

<!-- Bootstrap -->
<script src="/admin/default/js/bootstrap.min.js"></script>

<!-- Charts -->
<script src="/admin/default/js/charts/jquery.flot.js"></script> <!-- Flot Main -->
<script src="/admin/default/js/charts/jquery.flot.time.js"></script> <!-- Flot sub -->
<script src="/admin/default/js/charts/jquery.flot.animator.min.js"></script> <!-- Flot sub -->
<script src="/admin/default/js/charts/jquery.flot.resize.min.js"></script> <!-- Flot sub - for repaint when resizing the screen -->

<script src="/admin/default/js/sparkline.min.js"></script> <!-- Sparkline - Tiny charts -->
<script src="/admin/default/js/easypiechart.js"></script> <!-- EasyPieChart - Animated Pie Charts -->
<script src="/admin/default/js/charts.js"></script> <!-- All the above chart related functions -->

<!-- Map -->
<script src="/admin/default/js/maps/jvectormap.min.js"></script> <!-- jVectorMap main library -->
<script src="/admin/default/js/maps/usa.js"></script> <!-- USA Map for jVectorMap -->

<!--  Form Related -->
<script src="/admin/default/js/icheck.js"></script> <!-- Custom Checkbox + Radio -->

<!-- UX -->
<script src="/admin/default/js/scroll.min.js"></script> <!-- Custom Scrollbar -->

<!-- Other -->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> <!-- Calendar -->
<script src="/admin/default/js/calendar.min.js"></script> <!-- Calendar -->
{{--<script src="/admin/default/js/feeds.min.js"></script> <!-- News Feeds -->--}}


<!-- All JS functions -->
<script src="/admin/default/js/functions.js"></script>

<script>
    function getCookie(c_name)
    {
        if (document.cookie.length>0)
        {
            c_start=document.cookie.indexOf(c_name + "=")
            if (c_start!=-1)
            {
                c_start=c_start + c_name.length+1
                c_end=document.cookie.indexOf(";",c_start)
                if (c_end==-1) c_end=document.cookie.length
                return unescape(document.cookie.substring(c_start,c_end))
            }
        }
        return ""
    }
    var skin = getCookie('background-image');
    if (skin) {
        $('body').attr('id', skin);
    }
</script>

@yield('js')
</body>
</html>
