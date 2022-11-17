@if(Session::has('user'))
    {{ View::make('header')}}

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left:600px; font-size: 25px; font-family: Jameel Noori;"><b>   تعمیر کوارٹرز </b></h3>
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
                            <h3 style="padding-left: 140px; font-size: 25px; font-family: Jameel Noori;"><b>  تعمیر کوارٹرز اندراج</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" >

                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 45px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="tameer_quater_stock_categores">  اندراج کریں</a></button>
                            </div>
                     </div>

                     </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 140px; font-size: 25px; font-family: Jameel Noori;"><b> تعمیر کوارٹرز فہرست</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="quater_tameer_list_categores"> فہرست دیکھیں  </a> </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 120px; font-size: 25px; font-family: Jameel Noori;"><b> تعمیر کوارٹرز اسٹور فہرست</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/store.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="quater_tameer_store_list"> فہرست دیکھیں  </a> </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 120px; font-size: 25px; font-family: Jameel Noori;"><b> آمد تعمیر کوارٹرز اندراج</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="amad_quater_tameer_entry"> اندراج کریں  </a> </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 120px; font-size: 25px; font-family: Jameel Noori;"><b>آمد  تعمیر کوارٹرز فہرست</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="tameer_quater_list"> فہرست دیکھیں  </a> </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 120px; font-size: 25px; font-family: Jameel Noori;"><b> بل تعمیر کوارٹرز </b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/bill.jpg')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="tameer_bill_list_categores">  اندراج کریں  </a> </button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 120px; font-size: 25px; font-family: Jameel Noori;"><b> شامل تعمیر کوارٹر</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="add_tameer_quater">  شامل کریں  </a> </button>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
            {{ View::make('footer')}}
            @else {{''}}
            @endif
