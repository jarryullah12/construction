
    @if(Session::has('user'))
    {{ View::make('header')}}

       <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b>  اسٹاک تعمیر کوارٹرز </b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">


                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> اسٹاک اسٹور</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" >
                                 <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="amad_tameer_quater_store"> اندراج کریں </a>  </button>

                            </div>


                   </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> اسٹاک ٹھیکیدار</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}">
                                 <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="amad_tameer_quater_thekedar">اندراج کریں </a>  </button>
                            </div>
                     </div>

                     </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 100px; font-size: 25px; font-family: Jameel Noori;"><b>  اسٹاک اسٹیل ڈیکوریٹر</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="amad_tameer_quater_steel">اندراج کریں </a>  </button>


                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b>اسٹاک ووڈورکس</b></h3>
                        <hr>
                        <div style="padding-left:115px;">
                            <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" alt="house">
                            <ul class="list-inline two-part d-flex align-items-center mb-0" >
                            </ul>
                        </div>
                        <hr>
                        <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="amad_tameer_quater_wood"> اندراج کریں </a>  </button>

                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b>اسٹاک سفیدی و پینٹ</b></h3>
                        <hr>
                        <div style="padding-left:115px;">
                            <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" alt="house">
                            <ul class="list-inline two-part d-flex align-items-center mb-0" >
                            </ul>
                        </div>
                        <hr>
                        <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="amad_tameer_quater_painter"> اندراج کریں </a>  </button>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b>ماربل اینڈ چپس کیمیکل پالش </b></h3>
                        <hr>
                        <div style="padding-left:115px;">
                            <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" alt="house">
                            <ul class="list-inline two-part d-flex align-items-center mb-0" >
                            </ul>
                        </div>
                        <hr>
                        <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="tameer_quater_marbel_entry"> اندراج کریں </a>  </button>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b>اسٹاک الیکٹرک ورکس</b></h3>
                        <hr>
                        <div style="padding-left:115px;">
                            <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" alt="house">
                            <ul class="list-inline two-part d-flex align-items-center mb-0" >
                            </ul>
                        </div>
                        <hr>
                        <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="amad_tameer_quater_electric"> اندراج کریں </a>  </button>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b>    اسٹاک  کرایہ چکر     </b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" alt="house">
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="stock_chakar_entry_tameer">  اندراج کریں </a> </button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            {{ View::make('footer')}}
            @else {{''}}
            @endif
