
  @if(Session::has('user'))
  {{ View::make('header')}}

  <link rel="stylesheet" href="{{asset('maalsaalas_style/css/css/list.css')}}">

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.12.4.js"></script>
      <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


    <body>

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 650px; font-size: 25px; font-family: Jameel Noori;"><b> دفاتر بل </b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">


                        </div>
                    </div>
                </div>
            </div>
            <div  class="container-fluid" >

                <div class="row" style="padding-left: 10px;">

                    <div class="col-lg-6 col-xlg-9 col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <form enctype="multipart/form-data"  action="/maal_saalas/daftr_bill_entry_mistri" class="form-horizontal form-material" method="POST">

                                    @csrf
                                    <h3 style="text-align: center;  font-size: larger; font-size: 25px; font-family: Jameel Noori;">بل مستری/مزدور </h3>

                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>     تاریخ  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
										<input type="text" name="date" id="cald"   class="form-control border-1" style="border: 1px solid gray;font-size:20px;text-align: center" placeholder="تاریخ سلیکٹ کریں"  dir="auto"  required="required">
                                            </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   بروز </b></label>
                                        <div class="col-md-12 border-bottom p-0">
										<input type="text" name="day"  class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required">
                                            </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>     دفتر کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
										<input type="text" name="daftr_no"  class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required">
                                            </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    مستری/مزدور کا نام  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="mistri_name"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    تفصیل  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea type="text"  name="detail"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;" rows="5" dir="auto"  required="required"></textarea> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    مستری ریٹ  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="mistri_rate"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    کل یوم  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="mistri_days"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    مزدور ریٹ  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number"  name="mazdur_rate"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   کل یوم  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number"  name="mazdur_days"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div style="text-align:center;">
                                            <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> اندراج کریں
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
















                    <!-- Column -->
                    <div class="col-lg-6 col-xlg-9 col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <form enctype="multipart/form-data" action="/maal_saalas/daftr_bill_entry_carpenter" class="form-horizontal form-material" method="POST">
                                    @csrf
                                    <h3 style="text-align: center;  font-size: larger; font-size: 25px; font-family: Jameel Noori;"> بل کارپینٹر </h3>

                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="date" id="cald2"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;text-align: center"  dir="auto" placeholder="تاریخ سلیکٹ کریں"   required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  بروز </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="day"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>     دفتر کا نام  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="daftr_no"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  دکان کا نام  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="carpenter_name"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    تفصیل  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea type="text" name="detail"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;" rows="5" dir="auto"  required="required"></textarea> </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    صرف یوم  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="total_days"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    سائز  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="size"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    ریٹ  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="rate"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    تعداد  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="amount"
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

                    {{-- yomiya painter --}}

{{-- 4th column --}}
<div class="col-lg-6 col-xlg-9 col-md-12">
    <div class="card">

        <div class="card-body">
            <form enctype="multipart/form-data" action="/maal_saalas/daftr_bill_paint_yomiay_entry" class="form-horizontal form-material" method="POST">
                @csrf
                <h3 style="text-align: center;  font-size: larger; font-size: 25px; font-family: Jameel Noori;">  بل سفیدی وپینٹ یومیہ  </h3>

                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" id="cald4"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;text-align: center"  dir="auto" placeholder="تاریخ سلیکٹ کریں"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  بروز </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="day"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    دفتر کا نام  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="daftr_no"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    پینٹر کا نام  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="painter_name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div> <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    کل یوم </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="total_days"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   تفصیل </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea type="text" name="detail" rows="4"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </textarea></div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  ٹوٹل رقم </b></label>
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
{{-- yomiya painter end --}}
 {{-- 4th column --}}
 <div class="col-lg-6 col-xlg-9 col-md-12">
    <div class="card">

        <div class="card-body">
            <form enctype="multipart/form-data" action="/maal_saalas/daftr_bill_entry_marbel" class="form-horizontal form-material" method="POST">
                @csrf
                <h3 style="text-align: center;  font-size: larger; font-size: 25px; font-family: Jameel Noori;">ماربل اینڈ چپس کیمیکل پالش  </h3>

                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" id="cald5"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;text-align: center"  dir="auto" placeholder="تاریخ سلیکٹ کریں"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  بروز </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="day"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   دفتر کا نام  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="daftr_no"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
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
                        <textarea type="text" name="detail" rows="4"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </textarea></div>
                </div>
                <div class="form-group mb-4">
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

{{-- 3rd column --}}
<div class="col-lg-6 col-xlg-9 col-md-12">
    <div class="card">

        <div class="card-body">
            <form enctype="multipart/form-data" action="/maal_saalas/daftr_bill_entry" class="form-horizontal form-material" method="POST">
                @csrf
                <h3 style="text-align: center;  font-size: larger; font-size: 25px; font-family: Jameel Noori;"> بل سفیدی وپینٹ   </h3>

                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" id="cald3"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;text-align: center"  dir="auto" placeholder="تاریخ سلیکٹ کریں"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  بروز </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="day"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    دفتر کا نام  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="daftr_no"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    پینٹر کا نام  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="painter_name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>     کام نمبر 1    </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <select type="text"  name="kaam_no_1"
                        class="form-control border-1" style="text-align:center; border: 1px solid gray;font-size:20px;"  dir="auto"  required="required">
                            <option>سلیکٹ کریں</option>
                            <option value="{{"سفیدی"}}">سفیدی</option>
                            <option value="{{"ڈسٹیمپر"}}">ڈسٹیمپر</option>
                            <option value="{{"پینٹ"}}">پینٹ</option>
                            <option value="{{"ویدر شیٹ"}}">ویدر شیٹ</option>
                            <option value="{{"میٹ"}}">میٹ</option>
                            <option value="{{"سپریٹ پالش "}}">سپریٹ پالش </option>
                            <option value="{{"لیکر پالش"}}">لیکر پالش</option>

                        </select>

                        </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>      رقبہ  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="rukbah_kaam_no1"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    فی مربع ریٹ  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="per_murbah_rate_kaam1"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>     کام نمبر 2     </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <select type="text"  name="kaam_no_2"
                        class="form-control border-1" style="text-align:center; border: 1px solid gray;font-size:20px;"  dir="auto"  required="required">
                            <option>سلیکٹ کریں</option>
                            <option value="{{"سفیدی"}}">سفیدی</option>
                            <option value="{{"ڈسٹیمپر"}}">ڈسٹیمپر</option>
                            <option value="{{"پینٹ"}}">پینٹ</option>
                            <option value="{{"ویدر شیٹ"}}">ویدر شیٹ</option>
                            <option value="{{"میٹ"}}">میٹ</option>
                            <option value="{{"سپریٹ پالش "}}">سپریٹ پالش </option>
                            <option value="{{"لیکر پالش"}}">لیکر پالش</option>

                        </select>

                        </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>      رقبہ  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="rukbah_kaam_no2"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    فی مربع ریٹ  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="per_murbah_rate_kaam2"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>      کام نمبر 3      </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <select type="text"  name="kaam_no_3"
                        class="form-control border-1" style="text-align:center; border: 1px solid gray;font-size:20px;"  dir="auto"  required="required">
                            <option>سلیکٹ کریں</option>
                            <option value="{{"سفیدی"}}">سفیدی</option>
                            <option value="{{"ڈسٹیمپر"}}">ڈسٹیمپر</option>
                            <option value="{{"پینٹ"}}">پینٹ</option>
                            <option value="{{"ویدر شیٹ"}}">ویدر شیٹ</option>
                            <option value="{{"میٹ"}}">میٹ</option>
                            <option value="{{"سپریٹ پالش "}}">سپریٹ پالش </option>
                            <option value="{{"لیکر پالش"}}">لیکر پالش</option>

                        </select>

                        </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>      رقبہ  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="rukbah_kaam_no3"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    فی مربع ریٹ  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="per_murbah_rate_kaam3"
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
  {{-- 6th column --}}
  <div class="col-lg-6 col-xlg-9 col-md-12">
    <div class="card">

        <div class="card-body">
            <form enctype="multipart/form-data" action="/maal_saalas/daftr_bill_entry_cable_dict" class="form-horizontal form-material" method="POST">
                @csrf
                <h3 style="text-align: center;  font-size: larger; font-size: 25px; font-family: Jameel Noori;">بل سول ورکس ،الیکٹرک،کیبل ڈکٹ </h3>

                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" id="cald6"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;text-align: center"  dir="auto" placeholder="تاریخ سلیکٹ کریں"  required="required"></div>


                        </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  بروز </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="day"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   دفتر کا نام </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="daftr_no"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
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
                        <textarea type="text" name="detail" rows="8"
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
{{-- paint yomiya start--}}
<div class="col-lg-12 col-xlg-9 col-md-12">
    <div class="card">

        <div class="card-body">
            <form enctype="multipart/form-data" action="/maal_saalas/daftr_bill_paint_yomiya_entry" class="form-horizontal form-material" method="POST">
                @csrf
                <h3 style="text-align: center;  font-size: larger; font-size: 25px; font-family: Jameel Noori;">  بل سفیدی وپینٹ یومیہ  </h3>

                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" id="cald4"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;text-align: center"  dir="auto" placeholder="تاریخ سلیکٹ کریں"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  بروز </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="day"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>دفتر کا نام </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="daftr_no"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div> <div class="form-group mb-4">
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    پینٹر کا نام  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="painter_name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div> <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>    کل یوم </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="total_days"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   تفصیل </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea type="text" name="detail" rows="4"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </textarea></div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  ٹوٹل رقم </b></label>
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
{{-- pant yomiya end --}}
{{-- paint yomiya start--}}
<div class="col-lg-12 col-xlg-9 col-md-12">
    <div class="card">

        <div class="card-body">
            <form enctype="multipart/form-data" action="/maal_saalas/daftr_bill_steel_entry" class="form-horizontal form-material" method="POST">
                @csrf
                <h3 style="text-align: center;  font-size: larger; font-size: 25px; font-family: Jameel Noori;">  بل اسٹاک اسٹیل ڈیکوریٹر
                </h3>

                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" id="cald4"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;text-align: center"  dir="auto" placeholder="تاریخ سلیکٹ کریں"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  بروز </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="day"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>


                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>دفتر کا نام </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="daftr_no"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required">
                     </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ڈیکوریٹر کا نام  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="decorator_name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تعدار </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="amount"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> وزن  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="weight"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ریٹ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   تفصیل </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea type="text" name="detail" rows="4"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </textarea></div>
                </div>
                {{-- <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  ٹوٹل رقم </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="total"
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
{{-- pant yomiya end --}}
{{-- chair bunti  start--}}

<div class="col-lg-12 col-xlg-9 col-md-2">
    <div class="card">

        <div class="card-body">
                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/daftr_bill_chair_entry">
                    @csrf
                <h3 style="text-align:center; padding-bottom: 40px; font-weight:600; font-size: 25px; font-family: Jameel Noori;"> اسٹاک کرسی بُنتی </h3>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald3"
                            class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
                </div>
                {{-- <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori; "><b>  دفتر کا نام </b></label>

                                <select class="form-control select2" name="daftr_no" style="border: 1px solid gray;font-size:20px;">
                                   <option style="text-align: center;">سلیکٹ کریں</option>
                                   @foreach ($cols as $col)
                                   <option value="{{$col['daftr_no']}}">{{$col['daftr_no']}}</option>
                                   @endforeach

                                </select>


                </div> --}}
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> دفتر کا نام </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="daftr_no"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                 <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> بروز </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="day"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> نام </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>



                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تعداد</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="seat_amount"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ریٹ</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="per_seat_rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  سیٹ بنیت تفصیل </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea type="text" name="seat_detail"
                            class="form-control border-1" rows="5"  style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </textarea></div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تعداد</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="chair_amount"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ریٹ</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="per_chair_rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> کرسی بنیت تفصیل  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea type="text" name="chair_detail"
                            class="form-control border-1" rows="5"  style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </textarea></div>
                </div>
                {{-- <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ٹوٹل رقم</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="total"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div> --}}

                <div class="form-group mb-4">
                    <div style="text-align:center;">
                        <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  اندراج کریں</button>


                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- chair bunti end --}}













                </div>

            </div>
        </div></div></div>


    </body>

    <script >
        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        var date = new Date();
        date.setDate(date.getDate()-5);
        $('#cald').datepicker({
            format:("dd/mm/yy"),
            uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        minDate: date,


        });
</script>
    <script >
        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        var date = new Date();
        date.setDate(date.getDate()-5);
        $('#cald2').datepicker({
            format:("dd/mm/yy"),
            uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        minDate: date,


        });
</script>
      <script >
        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        var date = new Date();
        date.setDate(date.getDate()-5);
        $('#cald3').datepicker({
            format:("dd/mm/yy"),
            uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        minDate: date,


        });
</script>
       <script >
        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        var date = new Date();
        date.setDate(date.getDate()-5);
        $('#cald4').datepicker({
            format:("dd/mm/yy"),
            uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        minDate: date,


        });
</script>
        <script >
            var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
            var date = new Date();
            date.setDate(date.getDate()-5);
	        $('#cald5').datepicker({
                format:("dd/mm/yy"),
                uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: date,


	        });
	</script>
    <script >
            var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
            var date = new Date();
            date.setDate(date.getDate()-5);
	        $('#cald6').datepicker({
                format:("dd/mm/yy"),
                uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: date,


	        });
	</script>
      <script>
         $('.select2').select2();
     </script>
    {{ View::make('footer')}}
            @else {{''}}
            @endif






