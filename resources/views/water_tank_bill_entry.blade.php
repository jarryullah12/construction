@if(Session::has('user'))
    {{ View::make('header')}}
    <link rel="stylesheet" href="{{asset('maalsaalas_style/css/css/list.css')}}">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
        <div class="page-wrapper">

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b> بل تعمیر  واٹر ٹینک دارالفتوح  </b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">


                        </div>
                    </div>
                </div>

            </div>

            <div  class="container-fluid" >

                <div class="row" >




                    <!-- 2nd portion for mistari + mazdoor -->
                    <div class="col-lg-6 col-xlg-2">
                        <div class="card">

                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/water_tank_bill_entry_thekedar">
                                    @csrf
                                    <h3 style="text-align:center; padding-bottom: 40px; font-weight:600; font-size: 25px; font-family: Jameel Noori;"> بل ٹھیکیدار</h3>
                                    <div class="form-group mb-4">
                                        <div class="col-md-12 ">
                                            <input type="hidden"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald"
                                                class="form-control border-1" style="text-align:center;border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  دکان کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="thekedar_name"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> قسم ٹھیکیدار  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select type="text"  name="thekedar_type" style="text-align: center; font-weight:600; font-size:20px;font-family: Jameel Noori;border: 1px solid gray;font-size:20px;"

                                                class="form-control border-1"   >
                                            <option>سلیکٹ کریں</option>
                                            <option value="{{"پینٹر"}}">پینٹر</option>
                                            <option value="{{"کارپینٹر"}}"> کارپینٹر </option>
                                            <option value="{{"سول ورکس"}}">سول ورکس</option>
                                            <option value="{{"الیکٹریشن"}}">الیکٹریشن</option>
                                            <option value="{{"سینٹری  کنٹریکٹر"}}">سینٹری  کنٹریکٹر</option>

                                            </select></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea type="text" name="detail"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;" rows="3" dir="auto"  required="required"> </textarea></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> مربع فٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="mrubah_rate"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;" dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> فی مربع فٹ</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="mrubah_per_rate"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;" dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  پراگریس   </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="progress"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  سکیورٹی ریٹ  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="security_rate"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required"> </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div style="text-align:center;">
                                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  اندراج کریں  </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



  <!-- 2nd portion for mistari + mazdoor -->
  <div class="col-lg-6 col-xlg-2 col-md-2">
    <div class="card">

        <div class="card-body">
                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/water_tank_bill_entry_steel">
                    @csrf
                <h3 style="text-align:center; padding-bottom: 40px; font-weight:600; font-size: 25px; font-family: Jameel Noori;">بل  اسٹیل ڈیکوریٹر </h3>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald2"
                            class="form-control border-1" style="text-align:center; border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </div>
                </div>
                <div class="form-group mb-4">
                    <div class="col-md-12 ">
                        <input type="hidden"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required"> </div>
                </div>


                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   دکان کا نام </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="decorator_name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea type="text" name="detail"
                            class="form-control border-1" rows="4"  style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </textarea></div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تعداد</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="amount"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>وزن(فی کلو گرام)</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="per_kg"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                 <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>ریٹ</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>کرایہ چکر</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="kraya_chakr"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>


                <div class="form-group mb-4">
                    <div style="text-align:center;">
                        <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  اندراج کریں</button>


                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- 3rd portion for wood works -->
<div class="col-lg-6 col-xlg-2 col-md-2">
    <div class="card">

        <div class="card-body">
                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/water_tank_bill_entry_wood">
                    @csrf
                <h3 style="text-align:center; padding-bottom: 40px; font-weight:600; font-size: 25px; font-family: Jameel Noori;">بل وڈورکس </h3>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald3"
                            class="form-control border-1" style="text-align:center; border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </div>
                </div>
                <div class="form-group mb-4">
                    <div class="col-md-12 ">
                        <input type="hidden"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required"> </div>
                </div>


                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  دکان کا نام </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="thekedar_name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>پیمائش(مربع فٹ)  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="per_foot"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ریٹ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ادائیگی  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="adaigi"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> اڈوانس رقم  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="advance"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea type="text" name="detail"
                            class="form-control border-1" rows="4"  style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </textarea></div>
                </div>





                <div class="form-group mb-4">
                    <div style="text-align:center;">
                        <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  اندراج کریں</button>


                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- 3rd portion for wood works -->
<div class="col-lg-6 col-xlg-2 col-md-2">
    <div class="card">

        <div class="card-body">
                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/water_tank_bill_entry_painter">
                    @csrf
                <h3 style="text-align:center; padding-bottom: 40px; font-weight:600; font-size: 25px; font-family: Jameel Noori;">بل سفیدی و پینٹ </h3>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald3"
                            class="form-control border-1" style="text-align:center; border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </div>
                </div>
                <div class="form-group mb-4">
                    <div class="col-md-12 ">
                        <input type="hidden"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required"> </div>
                </div>


                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  پینٹر کا نام </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="painter_name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  بروز</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="day"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                {{-- <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>کام </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="kaam"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div> --}}
                <div class="form-group mb-4">
                    <label  style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori; "><b> کام </b></label>

                    <select  type="text" name="kaam" class="form-control " style="border: 1px solid gray;font-size: 20px;font-family: Jameel Noori;" >

                    <option style="text-align: center; font-size: 20px; font-family: Jameel Noori; ">سلیکٹ کریں</option>
                    <option value="{{"سفیدی"}}" style="text-align: center; font-size: 20px; font-family: Jameel Noori; ">سفیدی</option>
                    <option value="{{"ڈسٹیمپر"}}" style="text-align: center; font-size: 20px; font-family: Jameel Noori; ">ڈسٹیمپر</option>
                    <option value="{{"پینٹ"}}" style="text-align: center; font-size: 20px; font-family: Jameel Noori; ">پینٹ</option>
                    <option value="{{"ویدر شیٹ"}}" style="text-align: center; font-size: 20px; font-family: Jameel Noori; ">ویدر شیٹ</option>
                    <option value="{{"میٹ"}}" style="text-align: center; font-size: 20px; font-family: Jameel Noori; ">میٹ</option>
                    <option value="{{"پالش"}}" style="text-align: center; font-size: 20px; font-family: Jameel Noori; ">پالش</option>
                    <option value="{{"لیکر پالش"}}" style="text-align: center; font-size: 20px; font-family: Jameel Noori; ">لیکر پالش</option>



                    </select>
                    </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> رقبہ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="rakbah"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> فی مربع فٹ  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="per_foot"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <div style="text-align:center;">
                        <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  اندراج کریں</button>


                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- 2nd portion for mistari + mazdoor -->
<div class="col-lg-12 col-xlg-9 col-md-2">
    <div class="card">

        <div class="card-body">
            <form class="form-horizontal form-material" method="POST" action="/maal_saalas/water_tank_bill_electric">
                @csrf
                <h3 style="text-align:center; padding-bottom: 40px; font-weight:600; font-size: 25px; font-family: Jameel Noori;"> اسٹاک الیکٹرک ورکس</h3>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald2"
                            class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   دکان کا نام</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="store_name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea type="text" name="detail"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;" rows="3" dir="auto"  required="required"> </textarea></div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>کورڈ ایریا </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="covered_area"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;" dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ریٹ</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;" dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  ادائیگی   </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="adaigi"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  سکیورٹی ریٹ  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="security_rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  قسط  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="qisth"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required"> </div>
                </div>


                <div class="form-group mb-4">
                    <div style="text-align:center;">
                        <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  اندراج کریں  </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

                </div>

            </div>
            <script >
                var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                var date = new Date();
                date.setDate(date.getDate() -1);
                $('#cald').datepicker({
                    format:("dd/mm/yy"),
                    uiLibrary: 'bootstrap4',
                iconsLibrary: 'fontawesome',
                minDate: today,


                });
         </script>
            <script >
                var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                var date = new Date();
                date.setDate(date.getDate() -1);
                $('#cald5').datepicker({
                    format:("dd/mm/yy"),
                    uiLibrary: 'bootstrap4',
                iconsLibrary: 'fontawesome',
                minDate: today,


                });
         </script>
           <script >
            var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
            var date = new Date();
            date.setDate(date.getDate() -1);
            $('#cald2').datepicker({
                format:("dd/mm/yy"),
                uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: today,


            });
    </script>
             <script >
                var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                var date = new Date();
                date.setDate(date.getDate() -1);
                $('#cald3').datepicker({
                    format:("dd/mm/yy"),
                    uiLibrary: 'bootstrap4',
                iconsLibrary: 'fontawesome',
                minDate: today,


                });
        </script>

            <script >
                var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                var date = new Date();
                date.setDate(date.getDate() -1);
                $('#cald4').datepicker({
                    format:("dd/mm/yy"),
                    uiLibrary: 'bootstrap4',
                iconsLibrary: 'fontawesome',
                minDate: today,


                });
            </script>
             <script >
                var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                var date = new Date();
                date.setDate(date.getDate() -1);
                $('#cald6').datepicker({
                    format:("dd/mm/yy"),
                    uiLibrary: 'bootstrap4',
                iconsLibrary: 'fontawesome',
                minDate: today,


                });
        </script>
           <script >
            var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
            var date = new Date();
            date.setDate(date.getDate() -1);
            $('#cald7').datepicker({
                format:("dd/mm/yy"),
                uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: today,


            });
    </script>

    {{ View::make('footer')}}
    @else {{''}}
    @endif
