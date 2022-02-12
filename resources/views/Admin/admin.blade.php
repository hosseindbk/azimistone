<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    @yield('title')

    <link href="{{ asset("css/admin/admin.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/admin/plugins.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/admin/style.css")}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset("js/admin/sweetalert.min.js")}}"></script>

        @yield('first')
    </head>

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md sidemenu-container-reversed header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner">
            <div class="page-logo">
                <a href="{{url('/panel')}}">
                    <img src="{{ asset('images/admin/logo-min.png')}}" alt="" style="width: 80%;">
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right in">
                <li>
                    <a href="#" class="menu-toggler sidebar-toggler">
                        <i class="icon-menu"></i>
                    </a>
                </li>
            </ul>
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span></span>
            </a>
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle " src="{{ asset('images/admin/dp.jpg')}}" />
                            <span class="username username-hide-on-mobile"> {{Auth::user()->name}} </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="">
                                    <i class="icon-user"></i> پروفایل </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="">
                                    <i class="icon-lock"></i> قفل صفحه
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" style="padding: 8px 26px;">
                                    @csrf
                                    <i class="icon-logout"></i>
                                    <button type="submit" style="display: contents;font-family: Iransans;font-size: 15px;color: #6e6e6e;">خروج</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-container">
        <div class="sidebar-container">
            <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                <div id="remove-scroll" class="left-sidemenu">
                    <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true"
                        data-slide-speed="200" style="padding-top: 20px">
                        <li class="sidebar-toggler-wrapper hide">
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                        </li>
                        <li class="sidebar-user-panel">
                            <div class="user-panel">
                                <div class="image">
                                    <img src="{{asset('../images/admin/dp.jpg')}}" class="img-circle user-img-circle" alt="User Image" />
                                </div>
                                <div class="info">
                                    <p class="text-center">{{Auth::user()->name}}</p>
                                </div>
                            </div>
                        </li>
                        @foreach($menudashboards as $menudashboard)
                            @if($menudashboard->submenu == 0)
                                <li class="nav-item @if(Request::url() === url($menudashboard->slug)) start active open  @endif">
                                    <a href="{{url($menudashboard->slug)}}" class="nav-link nav-toggle">
                                        <span class="title">{{$menudashboard->title}}</span>
                                        <i class="material-icons">{{$menudashboard->icon}}</i>
                                    </a>
                                </li>
                            @endif

                            @if($menudashboard->submenu == 1)
                                <li class="nav-item @foreach($submenudashboards as $submenudashboard) @if(Request::url() === url('admin/'.$submenudashboard->slug)) @if($submenudashboard->menu_id == $menudashboard->id) active @endif @endif @endforeach ">

                                        <a href="" class="nav-link nav-toggle">
                                            <i class="material-icons">{{$menudashboard->icon}}</i>
                                            <span class="title">{{$menudashboard->title}} </span>
                                            <span class="arrow"></span>
                                        </a>

                                        <ul class="sub-menu">
                                            @foreach($submenudashboards as $submenudashboard)
                                                @if($submenudashboard->menu_id == $menudashboard->id)

                                                        <li class="nav-item @if(Request::url() === url('admin/'.$submenudashboard->slug)) active @endif">
                                                            <a href="{{url('admin/'.$submenudashboard->slug)}}" class="nav-link ">
                                                                <span class="title">{{$submenudashboard->name}}</span>
                                                            </a>
                                                        </li>

                                                @endif
                                            @endforeach
                                        </ul>

                                </li>
                            @endif

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-right">
                            <div class="page-title">داشبورد مدیریتی بستا</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-left">
                            <li><i class="fa fa-home"></i>&nbsp;
                                <a class="parent-item" href="{{url('admin/panel')}}">صفحه اصلی</a>&nbsp;<i class="fa fa-angle-left"></i>
                            </li>
                            @yield('menu')

                        </ol>
                    </div>
                </div>
                @yield('main')

            </div>
            <div class="page-footer">
                <div class="page-footer-inner"> 2020.1.5 &copy; Developed By
                    <a href="https://bestagroup.ir" target="_top" class="makerCss">Besta Group</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset("js/admin/jquery.min.js")}}"></script>
<script src="{{ asset("js/admin/popper.js")}}"></script>
<script src="{{ asset("js/admin/jquery.blockui.min.js")}}"></script>
<script src="{{ asset("js/admin/jquery.slimscroll.js")}}"></script>

<script src="{{ asset("js/admin/bootstrap.min.js")}}"></script>
<script src="{{ asset("js/admin/bootstrap-switch.min.js")}}"></script>
<script src="{{ asset("js/admin/jquery.sparkline.js")}}"></script>
<script src="{{ asset("js/admin/sparkline-data.js")}}"></script>

<script src="{{ asset("js/admin/app.js")}}"></script>
<script src="{{ asset("js/admin/layout.js")}}"></script>
<script src="{{ asset("js/admin/theme-color.js")}}"></script>

<script src="{{ asset("js/admin/material.min.js")}}"></script>



@yield('end')
</body>
</html>
