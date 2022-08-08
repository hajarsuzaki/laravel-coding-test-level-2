<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="Meet pages - The simplest and fastest way to build web UI for your dashboard or app." name="description" />
    <meta content="Ace" name="author" />
    <link href="https://fonts.googleapis.com/css?family=Varela" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
    @yield('css')
   </head>
    <style>
    html {
    height: 100%;
    }

    body {
    background: #f2f2f2;
    font-family: 'Varela', sans-serif;
    font-size: 14px;
    line-height: 1.5;
    color: #333;
    min-height: 100%;
    position: relative;
    }

    label {
    margin-top: 6px;
    line-height: 17px;
    }

    a {
    color: #fff;
    }

    a:focus,
    a:hover {
    color: #008080;
    }

    .checkbox-inline+.checkbox-inline,
    .radio-inline+.radio-inline {
    margin-top: 6px;
    }

    /******* Login Page *******/

    body.login {
    background: rgba(241, 242, 181, 1);
    background: -moz-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 1) 0%, rgba(19, 80, 88, 1) 100%);
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255, 255, 255, 1)), color-stop(100%, rgba(19, 80, 88, 1)));
    background: -webkit-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 1) 0%, rgba(19, 80, 88, 1) 100%);
    background: -o-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 1) 0%, rgba(19, 80, 88, 1) 100%);
    background: -ms-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 1) 0%, rgba(19, 80, 88, 1) 100%);
    background: radial-gradient(ellipse at center, rgba(255, 255, 255, 1) 0%, rgba(19, 80, 88, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#f1f2b5', endColorstr='#135058', GradientType=1);
    }

    .relative {
    position: relative;
    }

    .login-container-wrapper .logo,
    .login-container-wrapper .welcome {
    margin: 0 0 20px 0;
    font-size: 16px;
    color: #fff;
    text-align: center;
    letter-spacing: 1px;
    }

    .login-container-wrapper {
    max-width: 400px;
    margin: 10px auto 1px;
    padding: 40px;
    box-sizing: border-box;
    background: rgba(57, 89, 116, 0.8);
    box-shadow: 1px 1px 10px 1px #000000, 8px 8px 0px 0px #344454, 12px 12px 10px 0px #000000;
    position: relative;
    padding-top: 40px;
    }
  
    .login input:focus + .fa{
    color:#fff;
    }
    .login-form .form-group {
    margin-right: 0;
    margin-left: 0;
    }

    .login-form i {
    position: absolute;
    top: 18px;
    right: 20px;
    color: #93a5ab;
    }

    .login-form .input-lg {
    font-size: 16px;
    height: 30px;
    width: 255px;
    padding: 10px 25px;
    border-radius: 0;
    }

    .login input[type="text"],
    .login input[type="password"],
    .login input:focus {
    background-color: rgba(40, 52, 67, 0.75);
    border: 1px solid #4a525f;
    color: #eee;
    border-left: 4px solid #93a5ab;
    }

    .login input:focus {
    border-left: 4px solid #ccd8da;
    }

    input:-webkit-autofill,
    textarea:-webkit-autofill,
    select:-webkit-autofill {
    background-color: rgba(40, 52, 67, 0.75)!important;
    background-image: none;
    color: rgb(0, 0, 0);
    border-color: #FAFFBD;
    }

    .login .checkbox label,
    .login .checkbox a {
    color: #ddd;
    }

    .btn-success {
    background-color: transparent;
    background-image: none;
    padding: 8px 137px;
    border-radius: 0;
    border: 2px solid #93a5ab;
    box-shadow: inset 0 0 0 0 #7692A7;
    -webkit-transition: all ease 0.8s;
    -moz-transition: all ease 0.8s;
    transition: all ease 0.8s;
    }

    .btn-success:focus,
    .btn-success:hover,
    .btn-success.active,
    .btn-success:active {
    background-color: transparent;
    border-color: #fff;
    box-shadow: inset 0 0 100px 0 #7692A7;
    color: #FFF;
    }

    .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #7692A7;
    color: white;
    text-align: center;
    }
    </style>
    <body class="login">
        <div class="container">
            <br /><br /><br />
            <div class="login-container-wrapper clearfix">
                <div class="welcome">sign in to your account</div>
                <div><i>username: Super Admin password: admin123</p></div>
                <div><i>username: User password: user123</p></div>
                <form class="form-horizontal login-form" id="form-login" class="p-t-15" role="form" method="POST" action="{{ route('post_login') }}">
                @csrf
                    <div class="form-group relative">
                        @php $user = auth()->logout(); @endphp
                        <div class="controls">
                            <input id="login_username" name="username" class="form-control input-lg" type="text" placeholder="Username" maxlength="12" required>
                        </div>
                    </div>
                    <br />
                    <div class="form-group relative password">
                        <div class="controls">
                        <input id="login_password" name="password" class="form-control input-lg" type="password" placeholder="Password" required>
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
                    </div>
                    <br />
                    <div class="checkbox pull-left">
                    <label><input type="checkbox" value="1" id="checkbox1">Remember me</label>
                    </div>
                    {{-- <div class="checkbox pull-right">
                    <label> <a class="forget" href="" title="forget">Forgot your password</a> </label>
                    </div> --}}
                </form>
            </div>
        </div>
    </body>