

   @if(Session::has('user'))
    {{ View::make('header')}}


    <body>
        <div class="page-wrapper">

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b> کوارٹرز </b></h3>
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
                            <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> آمد کوارٹرز فہرست</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house.png')}}">
                                 <ul class="list-inline two-part d-flex align-items-center mb-0" >



                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="font-size: 25px; font-family: Jameel Noori; color: white; background-color: #2f323e; font-size:20px; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="quater_list">  فہرست دیکھیں  </a></button>
                            </div>

                </div>
                <div class="white-box analytics-info">
                    <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> آمد کوارٹر اندراج</b></h3>
                    <hr>
                    <div style="padding-left:115px;">
                         <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house.png')}}" >
                    </div>
                    <hr>
                    <div style="padding-left: 110px;">
                    <button style="font-size: 25px; font-family: Jameel Noori; color: white; background-color: #2f323e; font-size:20px; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="amad_quater_entry">  اندراج کریں</a></button>
                    </div>

                </div>


                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 90px; font-size: 25px; font-family: Jameel Noori; "><b> درخواست مرمت کوارٹرز فہرست</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/quater-chithi.png')}}">
                                 <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="font-size: 25px; font-family: Jameel Noori; color: white; background-color: #2f323e; font-size:20px; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> <a style="color: white;" href="amad_quater_letter_list">   فہرست دیکھیں </a></button>
                            </div>

                </div>
                <div class="white-box analytics-info">
                    <h3 style="padding-left: 90px; font-size: 25px; font-family: Jameel Noori;"><b> درخواست مرمت کوارٹرز اندراج</b></h3>
                    <hr>
                    <div style="padding-left:115px;">
                         <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/quater-chithi.png')}}" >
                    </div>
                    <hr>
                    <div style="padding-left: 110px;">
                        <button style="font-size: 25px; font-family: Jameel Noori; color: white; background-color: #2f323e; font-size:20px; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="amad_quater_letter_entry">  اندراج کریں</a></button>
                        </div>
                </div>
                </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 110px; font-size: 25px; font-family: Jameel Noori;"><b> اسٹاک مرمت کوارٹرز فہرست</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 115px;">
                            <button style="font-size: 25px; font-family: Jameel Noori; color: white; background-color: #2f323e; font-size:20px; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="stock_muramat_quater_categores">   فہرست دیکھیں </a></button>
                            </div>
                        </div>

                            <div class="white-box analytics-info">
                                <h3 style="padding-left: 110px; font-size: 25px; font-family: Jameel Noori;"><b> اسٹاک مرمت کوارٹر اندراج </b></h3>
                                <hr>
                                <div style="padding-left:115px;">
                                    <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house_constrction.png')}}" >
                                </div>
                                <hr>
                                <div style="padding-left: 110px;">
                                <button style="font-size: 25px; font-family: Jameel Noori; color: white; background-color: #2f323e; font-size:20px; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="quater_categores">  اندراج کریں</a></button>
                                </div>
                            </div>


                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 150px; font-size: 25px; font-family: Jameel Noori;"><b>شامل کوارٹر  </b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/house.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="font-size: 25px; font-family: Jameel Noori; color: white; background-color: #2f323e; font-size:20px; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="add_quater">   شامل کریں</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> اسٹور کوارٹر فہرست</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/store.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="font-size: 25px; font-family: Jameel Noori; color: white; background-color: #2f323e; font-size:20px; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="quater_store_list"> فہرست دیکھیں</a></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> کوارٹر ز بل</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/bill.jpg')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="font-size: 25px; font-family: Jameel Noori; color: white; background-color: #2f323e; font-size:20px; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="bill_quater_categores"> اندراج کریں</a></button>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
            </div>

            </body>
            {{ View::make('footer')}}
            @else {{''}}
            @endif

