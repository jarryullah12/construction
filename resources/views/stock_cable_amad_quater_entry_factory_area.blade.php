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
                                <div class="col-lg-12 col-xlg-9 col-md-12">
                                    <div class="card">

                                        <div class="card-body">
                                            <form enctype="multipart/form-data" action="/maal_saalas/stock_cable_amad_quater_entry_factory_area" class="form-horizontal form-material" method="POST">
                                                @csrf
                                                <h3 style="text-align: center;  font-size: larger; font-size: 25px; font-family: Jameel Noori;"> <strong> اسٹاک  الیکٹرک،کیبل ڈکٹ </strong> </h3>
                                                    <br><br>
                                                <div class="form-group mb-4">
                                                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تاریخ </b></label>
                                                    <div class="col-md-12 border-bottom p-0">
                                                        <input type="text" name="date" id="cald5"
                                                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;text-align: center"  dir="auto" placeholder="تاریخ سلیکٹ کریں"  required="required"> </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label  style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori; "><b>   کوارٹر نمبر  </b></label>

                                                                <select class="form-control select2" name="factory_quater_no" style="border: 1px solid gray;font-size:20px;" >
                                                                   <option style="text-align: center;">سلیکٹ کریں</option>
                                                                   @foreach ($cols as $col)
                                                                   <option value="{{$col['factory_quater_no']}}">{{$col['factory_quater_no']}}</option>
                                                                   @endforeach

                                                                </select>


                                                </div>
                                                &nbsp;
                                                {{-- <div class="form-group mb-4">
                                                    <label style="float:right; 200px; font-size: larger; font-size:25px; font-family: Jameel Noori;"><b> مکام   </b></label>
                                                    <div class="col-md-12 border-bottom p-0">
                                                        <select type="text"  name="muhala" style="text-align: center;font-size:20px;  font-family: Jameel Noori;border: 1px solid gray;"

                                                            class="form-control border-1"   >
                                                        <option>سلیکٹ کریں</option>
                                                        <option value="{{"دارالصدر"}}">دارالصدر</option>
                                                        <option value="{{"دارالنصر"}}"> دارالنصر </option>
                                                        <option value="{{" دارالفتوح"}}"> دارالفتوح</option>
                                                        <option value="{{" دارالیمن"}}"> دارالیمن</option>
                                                        <option value="{{"فیکٹری ایریا"}}">فیکٹری ایریا</option>
                                                        <option value="{{"دارالواقفین"}}">دارالواقفین</option>

                                                        </select></div>
                                                </div> --}}
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
</div>
</div>
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
                date.setDate(date.getDate() -3);
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
	width:1170px;
	float:left;
}
.select2-container--default .select2-selection--single{
     border: 1px solid #ccc !important;
     border-radius: 0px !important;
	 text-align:center;

}

</style>




