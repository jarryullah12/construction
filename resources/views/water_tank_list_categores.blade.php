@if(Session::has('user'))
    {{ View::make('header')}}

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">
                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left:550px; font-size: 25px; font-family: Jameel Noori;"><b>  تعمیر ٹربائین واٹر ٹینک دارالفتوح</b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">


                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid" style="padding-top:5% ">

                <div class="row justify-content-center">

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 150px; font-size: 25px; font-family: Jameel Noori;"><b> اشیاء فہرست</b></h3>
                            <hr>
                            <div style="padding-left:120px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/water-tank.png')}}" >

                            </div>
                            <hr>
                            <div style="padding-left: 120px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="ishya_tank_list">  فہرست دیکھیں </a>   </button>

                            </div>
                     </div>

                     </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 145px; font-size: 25px; font-family: Jameel Noori;"><b> ٹھیکیدار فہرست</b></h3>
                            <hr>
                            <div style="padding-left:130px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/water-tank.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 130px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="thekedar_tank_list">  فہرست دیکھیں </a>   </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 140px; font-size: 25px; font-family: Jameel Noori;"><b> اسٹیل ڈیکوریٹر فہرست</b></h3>
                            <hr>
                            <div style="padding-left:130px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/water-tank.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 130px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="steel_tank_list">  فہرست دیکھیں </a>   </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 140px; font-size: 25px; font-family: Jameel Noori;"><b> ووڈورکس فہرست</b></h3>
                            <hr>
                            <div style="padding-left:130px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/water-tank.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 130px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="water_tank_wood_work_list">  فہرست دیکھیں </a>   </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> سفیدی و پینٹ فہرست</b></h3>
                            <hr>
                            <div style="padding-left:130px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/water-tank.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 130px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="water_tank_painter_list">  فہرست دیکھیں </a>   </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 110px; font-size: 25px; font-family: Jameel Noori;"><b>  ماربل اینڈ چپس کیمیکل پالش
                              فہرست</b></h3>
                            <hr>
                            <div style="padding-left:130px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/water-tank.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 130px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="water_stock_marbel_list">  فہرست دیکھیں </a>   </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> الیکٹرک ورکس فہرست</b></h3>
                            <hr>
                            <div style="padding-left:130px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/water-tank.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 130px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="water_tank_electric_list">  فہرست دیکھیں </a>   </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ View::make('footer')}}
            @else {{''}}
            @endif
