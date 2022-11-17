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
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b> اشیاء ریٹ </b></h3>
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
                                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/ishya_rate">
                                    @csrf
                                    <div class="form-group mb-4" >

                                        <div class="form-group mb-4">
                                            <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald"
                                                    class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  اشیاء کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="ishya_name"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  قسم اشیاء  </b></label>


                                                        <select class="form-control select2" name="ishya_type" style="border: 1px solid gray;font-size:20px;width:1230px;">
                                                           <option style="text-align: center;">سلیکٹ کریں</option>
                                                           <option style="font-family: Jameel Noori;" value="{{"مصالحہ جات"}}">مصالحہ جات </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"دالیں"}}">دالیں </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"آئل"}}">آئل </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"گھی"}}">گھی </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"پتی"}}">پتی </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"صابن"}}">صابن </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"دودھ"}}">دودھ </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"ٹشو"}}">ٹشو </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"کافی"}}">کافی </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"نوڈلز"}}">نوڈلز </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"سرف"}}">سرف</option>
                                                           <option style="font-family: Jameel Noori;" value="{{"انڈے"}}">انڈے </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"جوس"}}">جوس </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"ساوس اور کچن"}}">ساوس اور کچن </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"شمپو"}}">شمپو </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"جیم اور پکل"}}">جیم اور پکل </option>
                                                           <option style="font-family: Jameel Noori;" value="{{"متفرق"}}">متفرق </option>



                                                        </select>
                                        </div>

                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>موجودہ ریٹ  </b></label>
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
                <script>
                    $('.select2').select2();
                </script>


                {{ View::make('footer')}}
                @else {{''}}
                @endif
    <style>
        .select2-container .select2-selection--single{
        height:34px !important;
        width:1230px;
        float:left;
    }
    .select2-container--default .select2-selection--single{
         border: 1px solid #ccc !important;
         border-radius: 0px !important;
         text-align:center;

    }

    </style>
