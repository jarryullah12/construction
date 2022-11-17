@if(Session::has('user'))
{{ View::make('header_edit')}}
<link rel="stylesheet" href="{{asset('maalsaalas_style/css/css/list.css')}}">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b>اسٹاک ٹھیکیدار</b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">



                        </div>
                    </div>
                </div>
            </div>

            <div  class="container-fluid" >

                <div class="row" style="padding-left:10px;">

                    <div class="col-lg-12 col-xlg-9 col-md-2">
                        <div class="card">

                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/edit_thekedar_tameer">
                                    @csrf
                                    <div class="form-group mb-4" >
                                        <input type="hidden" name="id" value={{$data['id']}}>


                                        <div >
                                            <input type="hidden" name="date"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  > </div>
                                    </div>

                                    <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> مقام   </b></label>

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

                                        </select>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="col-md-12 ">
                                        <input type="hidden"
                                            class="form-control border-1"   dir="auto" > </div>
                                </div>

                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  دکان کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="thekedar_name" value={{$data['thekedar_name']}}
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> قسم ٹھیکیدار  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select type="text" name="thekedar_type" style="text-align: center; border: 1px solid gray; font-weight:600; font-size:20px;font-family: Jameel Noori;"

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
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="detail" value={{$data['detail']}}
                                                class="form-control border-1"  style="border: 1px solid gray;font-size:20px;" dir="auto"  > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> کورڈایریا </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="mrubah_rate" value={{$data['mrubah_rate']}}
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>ریٹ	 </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="mrubah_per_rate" value={{$data['mrubah_per_rate']}}
                                                class="form-control border-1"  style="border: 1px solid gray;font-size:20px;"  dir="auto"  > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> پراگرس </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="progress" value={{$data['progress']}}
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ادائیگی </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="adaigi" value={{$data['adaigi']}}
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> سکیورٹی ریٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="security_rate" value={{$data['security_rate']}}
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  > </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div style="text-align:center;">
                                            <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> تبدیل کریں</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- 2nd portion for mistari + mazdoor -->




                </div>

            </div>

            <script>
                $('.select2').select2();
            </script>
            <style>
                .select2-container .select2-selection--single{
                height:34px !important;
                width:1240px;
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
