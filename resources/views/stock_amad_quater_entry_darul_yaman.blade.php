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
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b>اسٹاک کوارٹرز دارالیمن  </b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">



                        </div>
                    </div>
                </div>
            </div>

            <div  class="container-fluid" >

                <div class="row" style="padding-left:10px;">

                    <div class="col-lg-6 col-xlg-9 col-md-2">
                        <div class="card">

                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/stock_amad_quater_entry_darul_yaman">
                                    @csrf
                                    <div class="form-group mb-4" >
                                        <h3 style="text-align:center;padding-bottom: 40px; font-weight: 600; font-size: 25px; font-family: Jameel Noori;"> اسٹاک اسٹور </h3>

                                        <div class="form-group mb-4">
                                            <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald"
                                                    class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   کوارٹر نمبر  </b></label>

                                                    <select class="form-control select2" name="yaman_quater_no" style="border: 1px solid gray;font-size:20px;">
                                                       <option style="text-align: center;">سلیکٹ کریں</option>
                                                       @foreach ($cols as $col)
                                                       <option value="{{$col['yaman_quater_no']}}">{{$col['yaman_quater_no']}}</option>
                                                       @endforeach

                                                    </select>


                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  اسٹور کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="store_name"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"   required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  سامان </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea type="text" name="saman"
                                                class="form-control border-1" rows="5" dir="auto" style="border: 1px solid gray;font-size:20px;"> </textarea></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> فی ریٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="per_rate"
                                                class="form-control border-1"  dir="auto" style="border: 1px solid gray;font-size:20px;"> </div>
                                    </div><div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تعداد  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="amount"
                                                class="form-control border-1"  dir="auto" style="border: 1px solid gray;font-size:20px;"> </div>
                                    </div>



                                    <div class="form-group mb-4">
                                        <div style="text-align:center;">
                                            <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> اندراج کریں </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
{{-- 4th column --}}
<div class="col-lg-6 col-xlg-9 col-md-12">
    <div class="card">

        <div class="card-body">
            <form enctype="multipart/form-data" action="/maal_saalas/stock_quater_entry_darul_yaman_marbel" class="form-horizontal form-material" method="POST">
                @csrf
                <h3 style="text-align: center;  font-size: larger; font-size: 25px; font-family: Jameel Noori;"> <strong>ماربل اینڈ چپس کیمیکل پالش </strong> </h3>
<br><br>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" id="cald4"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;text-align: center"  dir="auto" placeholder="تاریخ سلیکٹ کریں"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label  style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori; "><b>   کوارٹر نمبر  </b></label>

                                <select class="form-control select2" name="yaman_quater_no" style="border: 1px solid gray;font-size:20px;" >
                                   <option style="text-align: center;">سلیکٹ کریں</option>
                                   @foreach ($cols as $col)
                                   <option value="{{$col['yaman_quater_no']}}">{{$col['yaman_quater_no']}}</option>
                                   @endforeach

                                </select>


                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    دکان کا نام  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="laber_name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   تفصیل </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea type="text" name="detail" rows="9"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </textarea></div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   ٹوٹل رقم </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="total"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                {{-- <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>     مربع ریٹ  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="murbah_rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>


                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    فی مربع ریٹ  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="per_murbah_rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div> --}}



                <div class="form-group mb-4">
                    <div style="text-align:center;">
                        <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> اندراج کریں</button>

                    </div>

                </div>
            </form>
        </div>

    </div>
</div>

                    <!-- 2nd portion for mistari + mazdoor -->
                    <div class="col-lg-6 col-xlg-9 col-md-2">
                        <div class="card">

                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/stock_amad_quater_entry_darul_yaman_mistri">
                                    @csrf


                                    <div class="form-group mb-4">
                                        <h3 style="text-align:center; padding-bottom: 40px; font-weight: 600; font-size: 25px; font-family: Jameel Noori;"> اسٹاک مستری/ مزدور</h3>
                                        <div class="form-group mb-4">
                                            <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald2"
                                                    class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label  style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori; "><b>   کوارٹر نمبر  </b></label>

                                                    <select class="form-control select2" name="yaman_quater_no" style="border: 1px solid gray;font-size:20px;" >
                                                       <option style="text-align: center;">سلیکٹ کریں</option>
                                                       @foreach ($cols as $col)
                                                       <option value="{{$col['yaman_quater_no']}}">{{$col['yaman_quater_no']}}</option>
                                                       @endforeach

                                                    </select>


                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> مستری /مزدور کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="mistri_name"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"   required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> مستری ریٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="mistri_rate"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"   required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> کل یوم </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="mistri_total_days"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> مزدور ریٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="mazdur_rate"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  کل یوم </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="mazdur_total_days"
                                                class="form-control border-1"  style="border: 1px solid gray;font-size:20px;" dir="auto"  required="required" > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تفصیل </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea type="text" name="detail"
                                                class="form-control border-1" rows="5" style="border: 1px solid gray;font-size:20px;" dir="auto"  required="required" ></textarea> </div>
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
                     <!-- 4th portion for carpenter -->
 <div class="col-lg-6
 col-xlg-9 col-md-2">
   <div class="card">

       <div class="card-body">
           <form class="form-horizontal form-material" method="POST" action="/maal_saalas/stock_amad_quater_entry_darul_yaman_carpenter">
               @csrf


               <div class="form-group mb-4">
                   <h3 style="text-align:center; padding-bottom: 40px; font-weight: 600; font-size: 25px; font-family: Jameel Noori;"> اسٹاک  کارپینٹر</h3>

                   <div class="form-group mb-4">
                       <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                       <div class="col-md-12 border-bottom p-0">
                           <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald7"
                               class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
                   </div>
               </div>

               <div class="form-group mb-4">
                   <label  style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori; "><b>   کوارٹر نمبر  </b></label>

                               <select class="form-control select2" name="yaman_quater_no" style="border: 1px solid gray;font-size:20px;" >
                                  <option style="text-align: center;">سلیکٹ کریں</option>
                                  @foreach ($cols as $col)
                                  <option value="{{$col['yaman_quater_no']}}">{{$col['yaman_quater_no']}}</option>
                                  @endforeach

                               </select>


               </div>
               <div class="form-group mb-4">
                   <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  کارپینٹر کا نام </b></label>
                   <div class="col-md-12 border-bottom p-0">
                       <input type="text" name="carpenter_name"
                           class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required" > </div>
               </div>



               <div class="form-group mb-4">
                   <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تفصیل </b></label>
                   <div class="col-md-12 border-bottom p-0">
                       <textarea type="text" name="detail"
                           class="form-control border-1" rows="8" style="border: 1px solid gray;font-size:20px;" dir="auto"  required="required" ></textarea> </div>
               </div>
               <div class="form-group mb-4">
                   <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> کل یوم </b></label>
                   <div class="col-md-12 border-bottom p-0">
                       <input type="number" name="total_days"
                           class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
               </div>
               <div class="form-group mb-4">
                   <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  ٹوٹل رقم </b></label>
                   <div class="col-md-12 border-bottom p-0">
                       <input type="number" name="total"
                           class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
               </div>
               <div class="form-group mb-4">
                   <div style="text-align:center;">
                       <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  اندراج کریں</button>

                   </div>
                   <br><br><br><br><br><br><br>
               </div>
           </form>
       </div>
   </div>
</div>
                     <!-- 3rd portion for mistari + mazdoor -->
 <div class="col-lg-6 col-xlg-9 col-md-2">
    <div class="card">

        <div class="card-body">
            <form class="form-horizontal form-material" method="POST" action="/maal_saalas/stock_amad_quater_entry_darul_yaman_painter">
                @csrf


                <div class="form-group mb-4">
                    <h3 style="text-align:center; padding-bottom: 40px; font-weight: 600; font-size: 25px; font-family: Jameel Noori;"> اسٹاک سفیدی و پینٹ</h3>

                    <div class="form-group mb-4">
                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald3"
                                class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label  style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori; "><b>   کوارٹر نمبر  </b></label>

                                <select class="form-control select2" name="yaman_quater_no" style="border: 1px solid gray;font-size:20px;" >
                                   <option style="text-align: center;">سلیکٹ کریں</option>
                                   @foreach ($cols as $col)
                                   <option value="{{$col['yaman_quater_no']}}">{{$col['yaman_quater_no']}}</option>
                                   @endforeach

                                </select>


                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  پینٹر کا نام </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="painter_name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required" > </div>
                </div>
                {{-- <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> سفیدی کا رقبہ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="safaidi_rakbah"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"   required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> فی مربع ریٹ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="safaidi_per_murabah_rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  پینٹ کا رقبہ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="paint_rakbah"
                            class="form-control border-1"  style="border: 1px solid gray;font-size:20px;" dir="auto"  required="required" > </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> فی مربع ریٹ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="paint_per_murabah_rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  ڈسٹیمپر کا رقبہ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="distamper_rakbah"
                            class="form-control border-1"  style="border: 1px solid gray;font-size:20px;" dir="auto"  required="required" > </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> فی مربع ریٹ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="distamper_per_murabah_rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> کل یوم </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="total_days"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div> --}}
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تفصیل </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea type="text" name="detail"
                            class="form-control border-1" rows="12" style="border: 1px solid gray;font-size:20px;" dir="auto"  required="required" ></textarea> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  ٹوٹل رقم </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="total"
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
{{-- 6th column --}}
<div class="col-lg-6 col-xlg-9 col-md-12">
    <div class="card">

        <div class="card-body">
            <form enctype="multipart/form-data" action="/maal_saalas/stock_quater_entry_yaman_cable_dict" class="form-horizontal form-material" method="POST">
                @csrf
                <h3 style="text-align: center;  font-size: larger; font-size: 25px; font-family: Jameel Noori;"> <strong>بل سول ورکس ،الیکٹرک،کیبل ڈکٹ </strong> </h3>
                    <br><br>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" id="cald5"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;text-align: center"  dir="auto" placeholder="تاریخ سلیکٹ کریں"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label  style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori; "><b>   کوارٹر نمبر  </b></label>

                                <select class="form-control select2" name="yaman_quater_no" style="border: 1px solid gray;font-size:20px;" >
                                   <option style="text-align: center;">سلیکٹ کریں</option>
                                   @foreach ($cols as $col)
                                   <option value="{{$col['yaman_quater_no']}}">{{$col['yaman_quater_no']}}</option>
                                   @endforeach

                                </select>


                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    دکان کا نام  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="laber_name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   تفصیل </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea type="text" name="detail" rows="12"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </textarea></div>
                </div>

                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  ٹوٹل رقم  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="total"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>



                <div class="form-group mb-4">
                    <div style="text-align:center;">
                        <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> اندراج کریں</button>

                    </div>
                </div>


            </form>
        </div>

    </div>
</div>
                </div>

            </div>
            <script>
                $('.select2').select2();
            </script>
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
<script>
    $('.select2').select2();
</script>

            {{ View::make('footer')}}
            @else {{''}}
            @endif
<style>
    .select2-container .select2-selection--single{
    height:34px !important;
	width:580px;
	float:left;
}
.select2-container--default .select2-selection--single{
     border: 1px solid #ccc !important;
     border-radius: 0px !important;
	 text-align:center;

}

</style>
