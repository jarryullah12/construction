<?php
use App\Http\Controllers\quater;


  $total=quater::cartItem_yaman_mistri();
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
 <!-- 2nd portion for mistari + mazdoor -->
 {{-- <div class="col-lg-12 col-xlg-9 col-md-2">
    <div class="card">

        <div class="card-body">
            <form class="form-horizontal form-material" method="POST" action="/maal_saalas/stock_mistri_amad_quater_entry_darul_yaman">
                @csrf

                <div class="form-group mb-4">

                    <div class="form-group mb-4">
                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald2"
                                class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label  style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   کوارٹر نمبر  </b></label>

                                <select class="select2 form-control " name="yaman_quater_no" style="border: 1px solid gray;font-size:20px;">
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
</div> --}}
<h3 style="text-align:center; padding-bottom: 40px; font-weight: 600; font-size: 25px; font-family: Jameel Noori;"> اسٹاک سول ورکس</h3>
<form method="POST" action="/maal_saalas/stock_mistri_amad_quater_entry_darul_yaman">
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


                <div style="width: 500px">
                    <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> تفصیل  </b></label>
                    <textarea type="text" dir="auto" rows="1" name="detail[]" class="form-control" style="border: 1px solid black" required="required"></textarea>
                    </div >
                    &nbsp;
                    <div style="width: 60px">
                        <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> کل یوم  </b></label>
                        <input type="text" dir="auto" name="mazdur_total_days[]" class="form-control" style="border: 1px solid black" required="required"/>
                        </div>
                        &nbsp;
                <div style="width: 60px">
                    <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b>مزدور ریٹ  </b></label>
                    <input type="text" dir="auto" name="mazdur_rate[]" class="form-control" style="border: 1px solid black" required="required"/>
                    </div >
                    &nbsp;
                    <div style="width: 60px">
                        <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> کل یوم  </b></label>
                        <input type="text" dir="auto" name="mistri_total_days[]" class="form-control" style="border: 1px solid black" required="required"/>
                        </div>
                        &nbsp;
                <div style="width: 60px">
                    <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b>مستری ریٹ  </b></label>
                    <input type="text" dir="auto" name="mistri_rate[]" class="form-control" style="border: 1px solid black" required="required"/>
                    </div >
                    &nbsp;

                <div style="width: 130px">
                    <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> مستری /مزدور کا نام  </b></label>
                    <input type="text" dir="auto" name="mistri_name[]" class="form-control" style="border: 1px solid black" required="required"/>
                    </div>
                    &nbsp;
                    {{-- <div style="width: 100px">
                        <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> بروز </b></label>
                        <input type="text" dir="auto" name="day[]" class="form-control" style="border: 1px solid black" />
                        </div>
                        &nbsp; --}}
                <div style="width: 130px">
                    <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b>   کوارٹر نمبر  </b></label>

                    <select  type="text" name="yaman_quater_no[]" class="form-control select2" style="border: 1px solid black" required="required">

                    <option style="text-align: center;">سلیکٹ کریں</option>
                    @foreach ($cols as $col)
                    <option value="{{$col['yaman_quater_no']}}">{{$col['yaman_quater_no']}}</option>
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
                <div style="width: 150px">
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


                        <div style="width: 500px">
                            <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> تفصیل  </b></label>
                            <textarea type="text" dir="auto" rows="1" name="detail[]" class="form-control" style="border: 1px solid black" required="required"></textarea>
                            </div >
                            &nbsp;
                            <div style="width: 60px">
                                <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> کل یوم  </b></label>
                                <input type="text" dir="auto" name="mazdur_total_days[]" class="form-control" style="border: 1px solid black" required="required"/>
                                </div>
                                &nbsp;
                        <div style="width: 60px">
                            <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b>مزدور ریٹ  </b></label>
                            <input type="text" dir="auto" name="mistri_rate[]" class="form-control" style="border: 1px solid black" required="required"/>
                            </div >
                            &nbsp;
                            <div style="width: 60px">
                                <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> کل یوم  </b></label>
                                <input type="text" dir="auto" name="mistri_total_days[]" class="form-control" style="border: 1px solid black" required="required"/>
                                </div>
                                &nbsp;
                        <div style="width: 60px">
                            <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b>مستری ریٹ  </b></label>
                            <input type="text" dir="auto" name="mazdur_rate[]" class="form-control" style="border: 1px solid black" required="required"/>
                            </div >
                            &nbsp;

                        <div style="width: 130px">
                            <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> مستری /مزدور کا نام  </b></label>
                            <input type="text" dir="auto" name="mistri_name[]" class="form-control" style="border: 1px solid black" required="required"/>
                            </div>
                            &nbsp;
                            {{-- <div style="width: 100px">
                                <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b> بروز </b></label>
                                <input type="text" dir="auto" name="day[]" class="form-control" style="border: 1px solid black" />
                                </div>

                                &nbsp; --}}
                        <div style="width: 130px">
                            <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b>   کوارٹر نمبر  </b></label>

                            <select  type="text" name="yaman_quater_no[]" class="form-control " style="border: 1px solid black" >

                            <option style="text-align: center;">سلیکٹ کریں</option>
                            @foreach ($cols as $col)
                            <option value="{{$col['yaman_quater_no']}}">{{$col['yaman_quater_no']}}</option>
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
                            <div style="width: 150px">
                                <label  style="float:right; font-size: larger; font-size: 16px; font-family: Jameel Noori; "><b>  تاریخ  </b></label>
                                <input type="text"  name="date[]" class="form-control" class="col-md-2" style="border: 1px solid black" required="required"/>
                                </div>
                        </div>

                </div>
            </div></div>




    {{--  --}}
    {{-- <!-- copy of input fields group -->
    <div class="form-group " id="fieldGroupCopy" style="display: none;">
        <div class="input-group">
            <input type="hidden"  value="{{0}}" name="date[]" class="form-control" placeholder="Enter name" />
            <input type="text" name="inc_id[]" class="form-control" placeholder="Enter name"/>
            <input type="text" name="total_days[]" class="form-control" placeholder="Enter name"/>

            <input type="text" name="carpenter_name[]" class="form-control" placeholder="Enter name"/>
            <input type="text" name="detail[]" class="form-control" placeholder="Enter name"/>
            <select type="text" name="quater_no[]" class="form-control" placeholder="Enter name">
                <option style="text-align: center;">سلیکٹ کریں</option>
                @foreach ($cols as $col)
                <option value="{{$col['quater_no']}}">{{$col['quater_no']}}</option>
                @endforeach

                </select>

            <input type="text" name="total[]" class="form-control" placeholder="Enter email"/>
            <div class="input-group-addon">
                <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
            </div>
        </div>
    </div> --}}

    </div>
    </div></div>
    </div></div>

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
        width:130px;
        float:left;
    }
    .select2-container--default .select2-selection--single{
         border: 1px solid #000 !important;
         border-radius: 0px !important;
         text-align:center;

    }

    </style>

