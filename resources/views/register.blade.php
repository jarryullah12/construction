
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
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
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

        <div class="page-wrapper">

            <div  class="container-fluid" >

                <div class="row" style="padding-left: 350px;">

                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">

                            <div class="card-body">
                        <!-- <h3 style="padding-left: 200px; padding-bottom: 30px;"> <img src="{{asset('maalsaalas_style/plugins/images/logo-text.png')}}" ></h3> -->
                        <br><br>
                                <form method="POST" enctype="multipart/form-data" action="/maal_saalas/register" class="form-horizontal form-material">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <label style="float: right;  font-size: 25px; font-family: Jameel Noori;"><b> نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="name"
                                                class="form-control border-1"  dir="auto" style="font-size: 20px; border:1px solid gray;"  >
                                                @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: 25px; font-family: Jameel Noori;"><b> ای میل ایڈریس  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email" name="email"
                                                class="form-control border-1"  style="font-size: 20px; border:1px solid gray;"  >
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: 25px; font-family: Jameel Noori;"><b> پاسورڈ </b></label>
                                                 <div class="col-md-12 border-bottom p-0">
                                                    <input type="password" name="password" class="form-control  border-1" style="font-size: 20px; border:1px solid gray;" >
                                                    @error('password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: 25px; font-family: Jameel Noori;"><b> پاسورڈ دوبارہ لکھیں </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="password"  name="confirm_password" style="font-size: 20px; border:1px solid gray;"
                                                class="form-control border-1">
                                                @error('confirm_password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div style="text-align:center; padding-top: 30px;">
                                            <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px; ">  نیا اکاونٹ بنائیں </button>

                                        </div>
                                    </div>
                                </form>
                                <br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
             