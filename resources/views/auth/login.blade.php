<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">

    <meta name="description" content="Violate Responsive Admin Template">
    <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

    <title>G9ZZ 管理后台</title>

    <!-- CSS -->
    <link href="/admin/default/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/default/css/form.css" rel="stylesheet">
    <link href="/admin/default/css/style.css" rel="stylesheet">
    <link href="/admin/default/css/animate.css" rel="stylesheet">
    <link href="/admin/default/css/generics.css" rel="stylesheet">

</head>
<body id="skin-blur-violate" style="background-image: url(/admin/default/img/body/ocean.jpg)">
<section id="login">
    <header>
        <h1>SUPER ADMIN</h1>
        <p>G9ZZ网,一个很杂的网站</p>
    </header>

    <div class="clearfix"></div>

    <!-- Login -->
    <form class="box tile animated active"  id="box-login" method="POST" action="{{ url('/login') }}">
        <h2 class="m-t-0 m-b-15">Login</h2>
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control login-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <br>
        <br>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-top: 20px">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control login-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group" >
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>

                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                    Forgot Your Password?
                </a>
            </div>
        </div>



        {{--<input type="text" class="login-control m-b-10" placeholder="Username or Email Address">--}}
        {{--<input type="password" class="login-control" placeholder="Password">--}}
        {{--<div class="checkbox m-b-20">--}}
        {{--<label>--}}
        {{--<input type="checkbox">--}}
        {{--Remember Me--}}
        {{--</label>--}}
        {{--</div>--}}
        {{--<button class="btn btn-sm m-r-5">Sign In</button>--}}

        {{--<small>--}}
        {{--<a class="box-switcher" data-switch="box-register" href="">Don't have an Account?</a> or--}}
        {{--<a class="box-switcher" data-switch="box-reset" href="">Forgot Password?</a>--}}
        {{--</small>--}}
    </form>

    <a href="/auth/github">
        <button type="submit" class="btn btn-primary fa-github ">
            GitHub登陆
        </button>
    </a>
    <a href="/auth/weibo">
        <button type="submit" class="btn btn-primary fa-github ">
            微博
        </button>
    </a>




    <!-- Register -->
    <form class="box animated tile" id="box-register">
        <h2 class="m-t-0 m-b-15">Register</h2>
        <input type="text" class="login-control m-b-10" placeholder="Full Name">
        <input type="text" class="login-control m-b-10" placeholder="Username">
        <input type="email" class="login-control m-b-10" placeholder="Email Address">
        <input type="password" class="login-control m-b-10" placeholder="Password">
        <input type="password" class="login-control m-b-20" placeholder="Confirm Password">

        <button class="btn btn-sm m-r-5">Register</button>

        <small><a class="box-switcher" data-switch="box-login" href="">Already have an Account?</a></small>
    </form>

    <!-- Forgot Password -->
    <form class="box animated tile" id="box-reset">
        <h2 class="m-t-0 m-b-15">Reset Password</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>
        <input type="email" class="login-control m-b-20" placeholder="Email Address">

        <button class="btn btn-sm m-r-5">Reset Password</button>

        <small><a class="box-switcher" data-switch="box-login" href="">Already have an Account?</a></small>
    </form>
</section>

<!-- Javascript Libraries -->
<!-- jQuery -->
<script src="/admin/default/js/jquery.min.js"></script> <!-- jQuery Library -->

<!-- Bootstrap -->
<script src="/admin/default/js/bootstrap.min.js"></script>

<!--  Form Related -->
<script src="/admin/default/js/icheck.js"></script> <!-- Custom Checkbox + Radio -->

<!-- All JS functions -->
<script src="/admin/default/js/functions.js"></script>

<script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js">
    var obj = new WxLogin({
        id:"login_container",
        appid: "{{env('WEIXIN_KEY')}}",
        scope: "snsapi_userinfo",
        redirect_uri: "/auth/weixin",
        state: "",
        style: "",
        href: ""
    });
</script>
</body>
</html>
