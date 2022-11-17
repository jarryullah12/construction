@if(Session::has('user'))
    {{ View::make('header')}}

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b> دفاتر </b></h3>
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
                            <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> آمد دفاتر فہرست</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/office.png')}}" >
                                 <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="daftr_list">  فہرست دیکھیں </a></button>
                            </div>
                </div>
                <div class="white-box analytics-info">
                    <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> آمد دفتر اندراج</b></h3>
                    <hr>
                    <div style="padding-left:115px;">
                         <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/office.png')}}" >
                    </div>
                    <hr>
                    <div style="padding-left: 110px;">
                    <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="amad_daftr_entry">  اندراج کریں</a></button>
                    </div>

                </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 50px; font-size: 25px; font-family: Jameel Noori;"><b>  درخواست مرمت دفاتر/گیسٹ ہاوس فہرست</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/daftr-chithi.png')}}" >
                                 <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="amad_daftr_letter_list">   فہرست دیکھیں </a></button>
                            </div>
                </div>
                <div class="white-box analytics-info">
                    <h3 style="padding-left: 50px; font-size: 25px; font-family: Jameel Noori;"><b>  درخواست مرمت دفاتر/گیسٹ ہاوس اندراج</b></h3>
                    <hr>
                    <div style="padding-left:115px;">
                        <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/daftr-chithi.png')}}" >
                    </div>
                    <hr>
                    <div style="padding-left: 110px;">
                    <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="amad_daftr_letter_entry">  اندراج کریں</a></button>
                    </div>
                </div>
            </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 100px; font-size: 25px; font-family: Jameel Noori;"><b> اسٹاک مرمت دفاتر فہرست</b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/office_constrction.png')}}" >
                                <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="stock_muramat_daftr_categores">  فہرست دیکھیں </a></button>
                            </div>
                        </div>

                            <div class="white-box analytics-info">
                                <h3 style="padding-left: 90px; font-size: 25px; font-family: Jameel Noori;"><b> اسٹاک مرمت دفتر اندراج</b></h3>
                                <hr>
                                <div style="padding-left:115px;">
                                    <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/office_constrction.png')}}" >
                                </div>
                                <hr>
                                <div style="padding-left: 110px;">
                                <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"><a style="color: white;" href="daftr_stock_categores">  اندراج کریں</a></button>
                                </div>
                            </div>


                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 140px; font-size: 25px; font-family: Jameel Noori;"><b> شامل دفاتر </b></h3>
                            <hr>
                            <div style="padding-left:115px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/office.png')}}" >
                                 <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 110px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="add_daftr">  اندراج کریں </a></button>
                            </div>
                </div></div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 style="padding-left: 120px; font-size: 25px; font-family: Jameel Noori;"><b>  اسٹور دفاتر فہرست</b></h3>
                        <hr>
                        <div style="padding-left:115px;">
                             <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/store.png')}}" >
                             <ul class="list-inline two-part d-flex align-items-center mb-0" >
                            </ul>
                        </div>
                        <hr>
                        <div style="padding-left: 110px;">
                        <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="daftr_store_list">  فہرست دیکھیں </a></button>
                        </div>
            </div></div>
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info">
                    <h3 style="padding-left: 130px; font-size: 25px; font-family: Jameel Noori;"><b> دفاتر بل</b></h3>
                    <hr>
                    <div style="padding-left:115px;">
                        <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/bill.jpg')}}" >
                        <ul class="list-inline two-part d-flex align-items-center mb-0" >
                        </ul>
                    </div>
                    <hr>
                    <div style="padding-left: 110px;">
                    <button style="font-size: 25px; font-family: Jameel Noori; color: white; background-color: #2f323e; font-size:20px; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="bill_daftr_categores"> اندراج کریں</a></button>
                    </div>
                </div>
            </div>

                </div>

            </div>
            {{ View::make('footer')}}
            @else {{''}}
            @endif
