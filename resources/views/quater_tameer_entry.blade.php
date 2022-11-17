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
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b>  تعمیر کوارٹرز  </b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">


                        </div>
                    </div>
                </div>

            </div>

            <div  class="container-fluid" >

                <div class="row" >

                    <div class="col-lg-6 col-xlg-9 col-md-2">
                        <div class="card">

                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/quater_tameer_entry_ishya">
                                    @csrf

                                    <div class="form-group mb-4">
                                        <h3 style="text-align:center;padding-bottom: 40px; font-weight: 600; font-size: 25px; font-family: Jameel Noori;"> اسٹاک اشیاء</h3>

                                        <div class="col-md-12 ">
                                            <input type="hidden"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald"
                                                class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; 200px; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> مکام   </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select type="text"  name="muhala" style="text-align: center; font-weight:600; font-size:20px;font-family: Jameel Noori;border: 1px solid gray;"

                                                class="form-control border-1"   >
                                            <option>سلیکٹ کریں</option>
                                            <option value="{{"دارالصدر"}}">دارالصدر</option>
                                            <option value="{{"دارالنصر"}}"> دارالنصر </option>
                                            <option value="{{" دارالفتوح"}}"> دارالفتوح</option>
                                            <option value="{{" دارالیمن"}}"> دارالیمن</option>
                                            <option value="{{"فیکٹری ایریا"}}">فیکٹری ایریا</option>
                                            <option value="{{"دارالواقفین"}}">دارالواقفین</option>

                                            </select></div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: 25px; font-family: Jameel Noori;"><b>  دکان کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="ishya_name"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;" dir="auto" required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: 25px; font-family: Jameel Noori;"><b>  تفصیل </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea type="text" rows='5' name="detail"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </textarea></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: 25px; font-family: Jameel Noori;"><b>  ٹوٹل رقم  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="total"
                                                class="form-control border-1"  style="border: 1px solid gray;font-size:20px;" dir="auto" required="required"></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: 25px; font-family: Jameel Noori;"><b>  نکاس </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="naqas"
                                                class="form-control border-1"  style="border: 1px solid gray;font-size:20px;" dir="auto" required="required"></div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: 25px; font-family: Jameel Noori;"><b>  تعداد  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="amount"
                                                class="form-control border-1"  style="border: 1px solid gray;font-size:20px;" dir="auto" required="required"></div>
                                    </div>



                                    <div class="form-group mb-4">
                                        <div style="text-align:center;">
                                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  اندراج کریں</button>

                                        </div>
                                    </div>
                                    <br> <br> <br> <br> <br> <br> <br>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- 2nd portion for mistari + mazdoor -->
                    <div class="col-lg-6 col-xlg-9 col-md-2">
                        <div class="card">

                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/quater_tameer_thekedar">
                                    @csrf
                                    <h3 style="text-align:center;padding-bottom: 40px; font-weight:600; font-size: 25px; font-family: Jameel Noori;"> اسٹاک ٹھیکیدار</h3>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald2"
                                                class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>مکام  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select type="text"  name="muhala" style="text-align: center; font-weight:600; font-size:20px;font-family: Jameel Noori;border: 1px solid gray;font-size:20px;"

                                                class="form-control border-1"   >
                                            <option>سلیکٹ کریں</option>
                                            <option value="{{"دارالصدر"}}">دارالصدر</option>
                                            <option value="{{"دارالنصر"}}"> دارالنصر </option>
                                            <option value="{{" دارالفتوح"}}"> دارالفتوح</option>
                                            <option value="{{" دارالیمن"}}"> دارالیمن</option>
                                            <option value="{{"فیکٹری ایریا"}}">فیکٹری ایریا</option>
                                            <option value="{{"دارالواقفین"}}">دارالواقفین</option>

                                            </select></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-md-12 ">
                                            <input type="hidden"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required"> </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   دکان کا نام</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="thekedar_name"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> قسم ٹھیکیدار  </b></label>
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
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea type="text" name="detail" rows="3"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required"> </textarea></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> مربع ریٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="mrubah_rate"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> فی مربع ریٹ</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="mrubah_per_rate"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  پراگریس   </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="progress"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  سکیورٹی ریٹ  </b></label>
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
  <div class="col-lg-6 col-xlg-9 col-md-2">
    <div class="card">

        <div class="card-body">
                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/quater_tameer_steel">
                    @csrf
                <h3 style="text-align:center;padding-bottom: 40px; font-weight:600; font-size: 25px; font-family: Jameel Noori;"> اسٹیل ڈیکوریٹر</h3>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald3"
                            class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>مکام  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <select type="text"  name="muhala" style="text-align: center; font-weight:600; font-size:20px;font-family: Jameel Noori;border: 1px solid gray;font-size:20px;"

                            class="form-control border-1"   >
                        <option>سلیکٹ کریں</option>
                        <option value="{{"دارالصدر"}}">دارالصدر</option>
                        <option value="{{"دارالنصر"}}"> دارالنصر </option>
                        <option value="{{" دارالفتوح"}}"> دارالفتوح</option>
                        <option value="{{" دارالیمن"}}"> دارالیمن</option>
                        <option value="{{"فیکٹری ایریا"}}">فیکٹری ایریا</option>
                        <option value="{{"دارالواقفین"}}">دارالواقفین</option>

                        </select></div>
                </div>

                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> دکان کا نام  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="decorator_name"
                            class="form-control border-1"   style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" ></div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea type="text" name="detail"
                            class="form-control border-1" rows="8"  style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </textarea></div>
                </div>
                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>ٹوٹل رقم</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="total"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>



                <div class="form-group mb-4">
                    <div style="text-align:center;">
                        <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  اندراج کریں</button>


                    </div>
                </div>
                <br> <br> <br> <br> <br>
            </form>
        </div>
    </div>
</div>
<!-- 3rd portion for wood works -->
<div class="col-lg-6 col-xlg-2 col-md-2">
    <div class="card">

        <div class="card-body">
                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/tameer_quater_entry_wood">
                    @csrf
                <h3 style="text-align:center; padding-bottom: 40px; font-weight:600; font-size: 25px; font-family: Jameel Noori;">بل وڈورکس </h3>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald4"
                            class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
                </div>
                 <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>مکام  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <select type="text"  name="muhala" style="text-align: center; font-weight:600; font-size:20px;font-family: Jameel Noori;border: 1px solid gray;font-size:20px;"

                            class="form-control border-1"   >
                        <option>سلیکٹ کریں</option>
                        <option value="{{"دارالصدر"}}">دارالصدر</option>
                        <option value="{{"دارالنصر"}}"> دارالنصر </option>
                        <option value="{{" دارالفتوح"}}"> دارالفتوح</option>
                        <option value="{{" دارالیمن"}}"> دارالیمن</option>
                        <option value="{{"فیکٹری ایریا"}}">فیکٹری ایریا</option>
                        <option value="{{"دارالواقفین"}}">دارالواقفین</option>

                        </select></div>
                </div>


                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  دکان کا نام </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="thekedar_name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>

                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea type="text" name="detail"
                            class="form-control border-1" rows="12"  style="border: 1px solid gray;font-size:20px;"  dir="auto" required="required" > </textarea></div>
                </div>

                <div class="form-group mb-4">
                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ٹوٹل رقم  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="number" name="total"
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
            <script>
                $('.select2').select2();
            </script>

            <script>
                $('.select2').select2();
            </script>
            <style>
                .select2-container .select2-selection--single{
                height:34px !important;
                width:350px;
                float:left;
            }
            .select2-container--default .select2-selection--single{
                 border: 1px solid #ccc !important;
                 border-radius: 0px !important;
                 text-align:center;

            }

            </style>
            {{ View::make('footer')}}
            @else {{''}}
            @endif