<?php
use App\Http\Controllers\quater;


  $total=quater::cartItem_fatuh_painter();
?>
@if(Session::has('user'))
{{ View::make('header')}}
<link rel="stylesheet" href="{{asset('maalsaalas_style/css/css/list.css')}}">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!------ Include the above in your HEAD tag ---------->


        <div class="page-wrapper">


            <div  class="container-fluid" >

                <div class="row" style="padding-left:10px;">

                    <div class="col-lg-12 col-xlg-9 col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 style="text-align:center; padding-bottom: 40px; font-weight: 600; font-size: 25px; font-family: Jameel Noori;"> اسٹاک سفیدی و پینٹ</h3>

                                     <!-- 3rd portion for mistari + mazdoor -->
                                       {{--
 <div class="col-lg-12 col-xlg-9 col-md-2">
    <div class="card">

        <div class="card-body">
            <form class="form-horizontal form-material" method="POST" action="/maal_saalas/stock_painter_amad_quater_entry_darul_fatuh">
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

                                <select class="form-control select2" name="fatuh_quater_no" style="border: 1px solid gray;font-size:20px;" >
                                   <option style="text-align: center;">سلیکٹ کریں</option>
                                   @foreach ($cols as $col)
                                   <option value="{{$col['fatuh_quater_no']}}">{{$col['fatuh_quater_no']}}</option>
                                   @endforeach

                                </select>


                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  پینٹر کا نام </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="painter_name"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required" > </div>
                </div>
              <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> سفیدی کا رقبہ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="safaidi_rakbah"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"   required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> فی مربع ریٹ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="safaidi_per_murabah_rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  پینٹ کا رقبہ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="paint_rakbah"
                            class="form-control border-1"  style="border: 1px solid gray;font-size:20px;" dir="auto"  required="required" > </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> فی مربع ریٹ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="paint_per_murabah_rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  ڈسٹیمپر کا رقبہ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="distamper_rakbah"
                            class="form-control border-1"  style="border: 1px solid gray;font-size:20px;" dir="auto"  required="required" > </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> فی مربع ریٹ </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="distamper_per_murabah_rate"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> کل یوم </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="total_days"
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div>
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
        --}}
        <form method="POST" action="/maal_saalas/stock_painter_amad_quater_entry_darul_fatuh">
            @csrf
                <div class="form-group fieldGroup">
                    <div class="row" >
                        <div class="input-group-addon">

                            <a href="javascript:void(0)" style="color: white" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> +</a>
                        </div>

                    <div class="input-group"  >

                        <div style="width: 1px">
                        <input type="hidden" name="inc_id[]" class="form-control"  value="{{$total+1}}" style="border: 1px solid black" />
                        </div>
                         &nbsp;
                        {{-- <div style="width: 80px">
                        <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b>  ٹوٹل رقم  </b></label>
                        <input  type="text" name="total[]" class="form-control" style="border: 1px solid black" />
                        </div >
                        &nbsp; --}}

                        <div style="width: 120px">
                            <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> فی مربع ریٹ </b></label>
                            <input type="text" dir="auto" name="per_murabah_rate[]" class="form-control" style="border: 1px solid black" required="required"/>
                            </div>
                            &nbsp;
                        <div style="width: 220px">
                            <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> رقبہ </b></label>
                            <input type="text" dir="auto" name="rakbah[]" class="form-control" style="border: 1px solid black" required="required"/>
                            </div>
                            &nbsp;

                            <div style="width: 320px">
                                <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> کام </b></label>

                                <select  type="text" name="kaam[]" class="form-control " style="border: 1px solid black" >

                                <option style="text-align: center;">سلیکٹ کریں</option>
                                <option value="{{"سفیدی"}}" style="text-align: center;">سفیدی</option>
                                <option value="{{"ڈسٹیمپر"}}" style="text-align: center;">ڈسٹیمپر</option>
                                <option value="{{"پینٹ"}}" style="text-align: center;">پینٹ</option>
                                <option value="{{"ویدر شیٹ"}}" style="text-align: center;">ویدر شیٹ</option>
                                <option value="{{"میٹ"}}" style="text-align: center;">میٹ</option>
                                <option value="{{"پالش"}}" style="text-align: center;">پالش</option>
                                <option value="{{"لیکر پالش"}}" style="text-align: center;">لیکر پالش</option>



                                </select>
                                </div>
                            &nbsp;

                        <div style="width: 160px">
                            <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> پینٹر کا نام  </b></label>
                            <input type="text" dir="auto" name="painter_name[]" class="form-control" style="border: 1px solid black" required="required"/>
                            </div>
                            {{-- &nbsp;
                            <div style="width: 120px">
                                <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> بروز </b></label>
                                <input type="text" dir="auto" name="day[]" class="form-control" style="border: 1px solid black" />
                                </div>
                                &nbsp; --}}
                        <div style="width: 230px">
                            <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b>   کوارٹر نمبر  </b></label>

                            <select  type="text" name="fatuh_quater_no[]" class="form-control select2" style="border: 1px solid black" >

                            <option style="text-align: center;">سلیکٹ کریں</option>
                            @foreach ($cols as $col)
                            <option value="{{$col['fatuh_quater_no']}}">{{$col['fatuh_quater_no']}}</option>
                            @endforeach

                            </select>
                            </div>
                            &nbsp;
                            {{-- <div class="form-group mb-4">
                                <label style="float:right; 200px; font-size: larger;  font-family: Jameel Noori;"><b> مکام   </b></label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select type="text"  name="muhala[]" style="text-align: center;  font-family: Jameel Noori;border: 1px solid black;"

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

                        &nbsp; --}}
                        <div style="width: 140px">
                            <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b>  تاریخ  </b></label>
                            <input type="text" id="cald2" name="date[]" class="form-control" class="col-md-2" style="border: 1px solid black" required="required"/>
                            </div>
                    </div>

                </div></div>

                <button type="submit" class="btn btn-primary" style="background-color:#313131; border:#313131;font-family: Jameel Noori;">اندراج کریں</button>

            </form>

            {{--  --}}
            {{-- 2nd form --}}
            <div class="form-group " id="fieldGroupCopy" style="display: none;">

                        <div class="row" >
                            <div class="input-group-addon">
                                <a href="javascript:void(0)" style="color: white" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> -</a>
                            </div>
                            <div class="input-group"  >

                                <div style="width: 1px">
                                <input type="hidden" name="inc_id[]" class="form-control"  value="{{$total+1}}" style="border: 1px solid black" />
                                </div>
                                 &nbsp;
                                {{-- <div style="width: 80px">
                                <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b>  ٹوٹل رقم  </b></label>
                                <input  type="text" name="total[]" class="form-control" style="border: 1px solid black" />
                                </div >
                                &nbsp; --}}

                                <div style="width: 120px">
                                    <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> فی مربع ریٹ </b></label>
                                    <input type="text" name="per_murabah_rate[]" dir="auto" class="form-control" style="border: 1px solid black" required="required"/>
                                    </div>
                                    &nbsp;
                                <div style="width: 220px">
                                    <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> رقبہ </b></label>
                                    <input type="text" name="rakbah[]" dir="auto" class="form-control" style="border: 1px solid black" required="required"/>
                                    </div>
                                    &nbsp;

                                    <div style="width: 320px">
                                        <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> کام </b></label>

                                        <select  type="text" name="kaam[]" class="form-control " style="border: 1px solid black" >

                                        <option style="text-align: center;">سلیکٹ کریں</option>
                                        <option value="{{"سفیدی"}}" style="text-align: center;">سفیدی</option>
                                        <option value="{{"ڈسٹیمپر"}}" style="text-align: center;">ڈسٹیمپر</option>
                                        <option value="{{"پینٹ"}}" style="text-align: center;">پینٹ</option>
                                        <option value="{{"ویدر شیٹ"}}" style="text-align: center;">ویدر شیٹ</option>
                                        <option value="{{"میٹ"}}" style="text-align: center;">میٹ</option>
                                        <option value="{{"پالش"}}" style="text-align: center;">پالش</option>
                                        <option value="{{"لیکر پالش"}}" style="text-align: center;">لیکر پالش</option>



                                        </select>
                                        </div>
                                    &nbsp;

                                <div style="width: 160px">
                                    <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> پینٹر کا نام  </b></label>
                                    <input type="text" dir="auto" name="painter_name[]" dir="auto" class="form-control" style="border: 1px solid black" required="required"/>
                                    </div>
                                    &nbsp;
                                    {{-- <div style="width: 120px">
                                        <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> بروز </b></label>
                                        <input type="text" dir="auto" name="day[]" dir="auto" class="form-control" style="border: 1px solid black" />
                                        </div>
                                        &nbsp; --}}

                                        <div style="width: 230px">
                                            <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b>   کوارٹر نمبر  </b></label>

                                            <select  type="text" name="fatuh_quater_no[]" class="form-control " style="border: 1px solid black" >

                                            <option style="text-align: center;">سلیکٹ کریں</option>
                                            @foreach ($cols as $col)
                                            <option value="{{$col['fatuh_quater_no']}}">{{$col['fatuh_quater_no']}}</option>
                                            @endforeach

                                            </select>
                                            </div>
                                        &nbsp;

                                        {{-- <div class="form-group mb-4">
                                            <label style="float:right; 200px; font-size: larger;  font-family: Jameel Noori;"><b> مکام   </b></label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <select type="text"  name="muhala[]" style="text-align: center;  font-family: Jameel Noori;border: 1px solid black;"

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

                                &nbsp; --}}
                                <div style="width: 140px">
                                    <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b>  تاریخ  </b></label>
                                    <input type="text"  name="date[]" class="form-control" class="col-md-2" style="border: 1px solid black" required="required"/>
                                    </div>
                            </div>


                        </div></div>


                        </div>
                    </div></div>
            </div>
            </div>
        </div>

                    </div>
                    <script >
                        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                        var date = new Date();
                        date.setDate(date.getDate() -3);
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
                    date.setDate(date.getDate() -3);
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

            <br><br><br>
        {{ View::make('footer')}}
        @else {{''}}
        @endif

         {{-- add button script --}}
        <script type="text/javascript">
            $(document).ready(function(){
            //group add limit
            var maxGroup = 10;

            //add more fields group
            $(".addMore").click(function(){
                if($('body').find('.fieldGroup').length < maxGroup){
                    var fieldHTML = '<div class="form-group fieldGroup">'+$("#fieldGroupCopy").html()+'</div>';
                    $('body').find('.fieldGroup:last').after(fieldHTML);
                }else{
                    alert('Maximum '+maxGroup+' groups are allowed.');
                }
            });

            //remove fields group
            $("body").on("click",".remove",function(){
                $(this).parents(".fieldGroup").remove();
            });
        });
        </script>

        <style>
            .select2-container .select2-selection--single{
            height:34px !important;
            width:230px;
            float:left;
        }
        .select2-container--default .select2-selection--single{
             border: 1px solid #000 !important;
             border-radius: 0px !important;
             text-align:center;

        }

        </style>
