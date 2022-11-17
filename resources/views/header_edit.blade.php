
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <!-- <title> وکالت مال ثالث (شعبہ تعمیرات)  </title> -->
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="{{asset('maalsaalas_style/plugins/images/favicon.png')}}"> -->
    <!-- Custom CSS -->
    <link href="{{asset('maalsaalas_style/plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('maalsaalas_style/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <!-- Custom CSS -->
    <link href="{{asset('maalsaalas_style/css/css/style.min.css')}}" rel="stylesheet">
    <style>
        @font-face {
            font-family: Jameel Noori;
            src: url('{{asset('maalsaalas_style/scss/Jameel Noori Nastaleeq Regular.ttf')}}');

        }
    </style>
</head>

<body>

    <div id="main-wrapper" data-layout="vertical">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">


                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">


                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        @if(Session::has('user'))
                       <h4 style="font-weight: 600px; padding-top:10px">  نام : &nbsp;{{Session::get('user')['name']}} </h4>

                       @else {{''}}
                       @endif

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('maalsaalas_style/plugins/images/dots.png')}}" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated">
                                    @if(Session::has('user'))
                                <a class="dropdown-item" href="profile_list">&nbsp;&nbsp;<i style="float: right; padding-right: 70px; padding-top: 10px;" class="ti-settings m-r-5 m-l-5"></i>
                                    <b style="font-size: 20px; font-family: Jameel Noori; padding-left: 70px;"> پروفائل سیٹنگ</b></a>
                                    <hr>
                                <a class="dropdown-item" href="register">&nbsp;&nbsp;<i style="float: right; padding-right: 70px; padding-top: 10px;" class="ti-user m-r-5 m-l-5"></i>
                                    <b style="font-size: 20px; font-family: Jameel Noori; float: right;">  اکاونٹ بنائیں </b></a>
                                    <hr>
                                <a class="dropdown-item" href="signout">&nbsp;&nbsp;<i style="float: right; padding-right: 70px; padding-top: 10px;" class="fa fa-power-off m-r-5 m-l-5"></i>
                                    <b style="font-size: 20px; font-family: Jameel Noori; float: right;"> لاگ اؤٹ </b></a>
                                    @else
                                    <a class="dropdown-item" href="signin">&nbsp;&nbsp;<i style="float: right; padding-right: 70px; padding-top: 10px;" class="fa fa-power-off m-r-5 m-l-5"></i>
                                    <b style="font-size: 20px; font-family: Jameel Noori; float: right;"> لاگ ان </b></a>
                                    @endif
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

