@if(Session::has('user'))
{{ View::make('header')}}

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left:600px; font-size: 25px; font-family: Jameel Noori;"><b>   اسٹاک دارالنصر فہرست </b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">


                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid" style="padding-top:5% ">


                <div class="row justify-content-center">


                    {{-- nasar start --}}
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 100px; font-size: 25px; font-family: Jameel Noori;"><b>  اسٹاک اسٹور  فہرست دارالنصر</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" >
                                 <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 45px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="nasar_stock_store_saman_list">   فہرست دیکھیں  </a></button>
                            </div>
                     </div>

                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 80px; font-size: 25px; font-family: Jameel Noori;"><b>    اسٹاک سول ورکس فہرست دارالنصر </b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" alt="house">
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="nasar_stock_mistri_list">  فہرست دیکھیں  </a> </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 80px; font-size: 25px; font-family: Jameel Noori;"><b>    اسٹاک  کارپینٹر فہرست دارالنصر </b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" alt="house">
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="nasar_stock_carpenter_list">  فہرست دیکھیں  </a> </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 80px; font-size: 25px; font-family: Jameel Noori;"><b>    اسٹاک سفیدی و پینٹ فہرست دارالنصر </b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" alt="house">
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="nasar_stock_paint_list">  فہرست دیکھیں  </a> </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 50px; font-size: 25px; font-family: Jameel Noori;"><b>   اسٹاک  ماربل اینڈ چپس کیمیکل پالش فہرست دارالنصر  </b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" alt="house">
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="nasar_stock_marbel_list">  فہرست دیکھیں  </a> </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 50px; font-size: 25px; font-family: Jameel Noori;"><b>      الیکٹرک، کیبل ڈکٹ فہرست دارالنصر </b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" alt="house">
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="quater_nasar_cable_dict_list">  فہرست دیکھیں  </a> </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 80px; font-size: 25px; font-family: Jameel Noori;"><b>   اسٹاک سفیدی و پینٹ یومیہ فہرست دادالنصر  </b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" alt="house">
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="quater_nasar_paint_yomiya_list">  فہرست دیکھیں  </a> </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 80px; font-size: 25px; font-family: Jameel Noori;"><b>  اسٹاک اسٹیل ڈیکوریٹر فہرست دارالنصر  </b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" alt="house">
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="quater_nasar_steel_list">  فہرست دیکھیں  </a> </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 80px; font-size: 25px; font-family: Jameel Noori;"><b>  اسٹاک کارپنٹر یومیہ  فہرست دارالنصر  </b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" alt="house">
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="nasar_stock_yomiya_carpenter_list">  فہرست دیکھیں  </a> </button>
                            </div>
                        </div>

                    </div>
                    {{-- nasar close --}}
                    <div></div>





                </div>

            </div>
            {{ View::make('footer')}}
            @else {{''}}
            @endif
