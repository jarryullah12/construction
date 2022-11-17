
    @if(Session::has('user'))
    {{ View::make('header')}}

       <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b> بل کوارٹرز </b></h3>
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
                            <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> بل سول ورکس  </b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/bill.jpg')}}" >
                                 <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="quater_bill_mistri"> اندراج کریں </a>  </button>

                            </div>


                   </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 150px; font-size: 25px; font-family: Jameel Noori;"><b>بل کارپنٹر</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/bill.jpg')}}">
                                 <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="quater_bill_carpenter">اندراج کریں </a>  </button>
                            </div>
                     </div>

                     </div>
                    
                    <!-- <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 100px; font-size: 25px; font-family: Jameel Noori;"><b> بل  ماربل اینڈ چپس کیمیکل پالش</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/bill.jpg')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="quater_bill_marbel">اندراج کریں </a>  </button>


                            </div>
                        </div>


                    </div> 
                    <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 style="padding-left: 110px; font-size: 25px; font-family: Jameel Noori;"><b> بل الیکٹرک،کیبل ڈکٹ </b></h3>
                        <hr>
                        <div style="padding-left:115px;">
                            <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/bill.jpg')}}" alt="house">
                            <ul class="list-inline two-part d-flex align-items-center mb-0" >
                            </ul>
                        </div>
                        <hr>
                        <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="quater_bill_cable_dict_list"> اندراج کریں </a>  </button>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> بل سفیدی و پینٹ</b></h3>
                        <hr>
                        <div style="padding-left:115px;">
                            <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/bill.jpg')}}" alt="house">
                            <ul class="list-inline two-part d-flex align-items-center mb-0" >
                            </ul>
                        </div>
                        <hr>
                        <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="quater_bill_painter"> اندراج کریں </a>  </button>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> بل سفیدی وپینٹ یومیہ</b></h3>
                        <hr>
                        <div style="padding-left:115px;">
                            <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/bill.jpg')}}" alt="house">
                            <ul class="list-inline two-part d-flex align-items-center mb-0" >
                            </ul>
                        </div>
                        <hr>
                        <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="quater_bill_paint_yomiya"> اندراج کریں </a>  </button>

                        </div>
                    </div>

                </div>-->
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> بل کارپنٹر یومیہ</b></h3>
                        <hr>
                        <div style="padding-left:115px;">
                            <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/bill.jpg')}}" alt="house">
                            <ul class="list-inline two-part d-flex align-items-center mb-0" >
                            </ul>
                        </div>
                        <hr>
                        <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="quater_bill_yomiya_carpenter"> اندراج کریں </a>  </button>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 150px; font-size: 25px; font-family: Jameel Noori;"><b>بل کرایہ چکر</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/bill.jpg')}}">
                                 <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="quater_bill_chakar">اندراج کریں </a>  </button>
                            </div>
                     </div>

                     </div>
                     <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 120px; font-size: 25px; font-family: Jameel Noori;"><b>بل ٹیکنیکل الاؤنس</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/bill.jpg')}}">
                                 <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="daftr_bill_allowance">اندراج کریں </a>  </button>
                            </div>
                     </div>

                     </div>
                <!-- <div class="col-lg-4 col-md-12"> -->
                    <!-- <div class="white-box analytics-info">
                        <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> بل  اسٹیل ڈیکوریٹر</b></h3>
                        <hr>
                        <div style="padding-left:115px;">
                            <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/bill.jpg')}}" alt="house">
                            <ul class="list-inline two-part d-flex align-items-center mb-0" >
                            </ul>
                        </div>
                        <hr>
                        <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="quater_bill_steel_list"> اندراج کریں </a>  </button>

                        </div>-->
                    <!-- </div> -->

                </div> 

                </div>
            </div>
            {{ View::make('footer')}}
            @else {{''}}
            @endif
