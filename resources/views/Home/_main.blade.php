<!DOCTYPE html>
<html>
<head>
    <title>课件管理系统</title>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('/css/bootstrap.min.css') }}  " rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('/css/font-awesome.min.css') }} " rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset('/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />   
    <link href="{{ asset('/css/AdminLTE/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('/css/AdminLTE/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <a href="../../index2.html" class="logo"><b>Home</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            @if (Auth::guest())
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li><a href="{{ url('/auth/login') }}">登录</a></li>
                        <li><a href="{{ url('/auth/register') }}">注册</a></li>
                    </ul>
                </div>
            @else
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('/img/avatar.png') }}" class="user-image" alt="User Image"/>
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ asset('/img/avatar.png') }}" class="img-circle" alt="User Image" />
                                    <p>
                                        {{ Auth::user()->name }}  
                                        <small>注册时间 {{ Auth::user()->created_at }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{ url('/user') }}" class="btn btn-default btn-flat">用户中心</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-flat">退出</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            @endif
        </nav>
    </header>

    <!-- =============================================== -->

    @extends('Home._sidebar')

    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @yield('content')

    </div><!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Made with ♥ </b>
        </div>
        <strong>Copyright &copy; 2015 <a href="#">课件管理系统</a>.</strong> All rights reserved.
    </footer>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>
</body>
</html>
