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
                        <h3 style="padding-left: 650px; font-size: 25px; font-family: Jameel Noori;"><b> اسٹور  </b></h3>
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
                                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/store">
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
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  اشیاء کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="ishya_name"
                                                class="form-control border-1"  style="border: 1px solid gray;font-size:20px;" dir="auto"  required> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  مقام  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select type="text"  name="maqam" style="text-align: center; font-weight:600; font-size:20px;font-family: Jameel Noori;border: 1px solid gray;font-size:20px;"

                                                class="form-control border-1"   required>
                                            <option>سلیکٹ کریں</option>
                                            <option value="{{"سرائے ناصر اسٹور"}}">سرائے ناصر اسٹور </option>
                                            <option value="{{"چلڈرن پارک اسٹور"}}"> چلڈرن پارک اسٹور </option>
                                            <option value="{{"دارالفتوح اسٹور"}}"> دارالفتوح اسٹور</option>
                                            <option value="{{"دارالیمن اسٹور"}}"> دارالیمن اسٹور</option>
                                            <option value="{{"150 دارالصدر اسٹور"}}"> 150 دارالصدر اسٹور</option>
                                            <option value="{{"ورکشاپ،نزد بیت محمود"}}">ورکشاپ،نزد بیت محمود</option>


                                            </select></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> قسم اشیاء  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select type="text"  name="saman_type" style="text-align: center; font-weight:600; font-size:20px;font-family: Jameel Noori;border: 1px solid gray;font-size:20px;"

                                                class="form-control border-1"  required >
                                            <option>سلیکٹ کریں</option>
                                            <option value="{{"پینٹ کا سامان"}}">پینٹ کا سامان</option>
                                            <option value="{{"لکڑی کا سامان"}}"> لکڑی کا سامان </option>
                                            <option value="{{"سول کا سامان"}}">سول کا سامان</option>
                                            <option value="{{"بجلی کا سامان"}}">بجلی کا سامان</option>
                                            <option value="{{"سینٹری کا سامان"}}">سینٹری کا سامان</option>
                                            <option value="{{"ھارڈوئیر کا سامان"}}">ھارڈوئیر کا سامان</option>

                                            </select></div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea type="text" name="detail"
                                                class="form-control border-1" rows="5" style="border: 1px solid gray;font-size:20px;"  dir="auto" required ></textarea> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  ریٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="rate"
                                                class="form-control border-1"   dir="auto" style="border: 1px solid gray;font-size:20px;"  > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> آمد تعداد </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="amount"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto" >

                                            </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> نکاس تعداد </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="naqas"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  >

                                            </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div style="text-align:center;">
                                            <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> اندراج کریں</button>
                                         <br><br>
                                            <!-- <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;width:200px;"><input style="width: 150px;background-color:#2f323e; color:white; border:1px solid black" class="btn btn-success" type="submit" value="کوارٹرز میں شامل کریں " formaction="{{url('store_list_quater')}}"></td>
                                            <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;width:200px;"> <input style="width: 150px;background-color:#2f323e; color:white; border:1px solid black" class="btn btn-success" type="submit"   value="دفاتر میں شامل کریں" formaction="{{url('store_list_daftr')}}"  >
                                            <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;width:200px;"><input style="width: 180px;background-color:#2f323e; color:white; border:1px solid black" class="btn btn-success" type="submit" value="تعمیر کوارٹرز میں شامل کریں" formaction="{{url('store_list_tameer_quater')}}"></td> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- 2nd portion for mistari + mazdoor -->




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
            {{ View::make('footer')}}
            @else {{''}}
            @endif
