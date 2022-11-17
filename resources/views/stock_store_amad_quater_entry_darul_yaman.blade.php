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
                                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/stock_store_amad_quater_entry_darul_nasar" >
                                    @csrf
                                    <div class="form-group mb-4" >
                                        <h3 style="text-align:center;padding-bottom: 40px; font-weight: 600; font-size: 25px; font-family: Jameel Noori;"> اسٹاک اسٹور </h3>


                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald"
                                                class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
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
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> سامان </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea type="text" name="saman"
                                                class="form-control border-1" rows="5"  dir="auto" style="border: 1px solid gray;font-size:20px;"  required="required"></textarea> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>فی ریٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="per_rate"
                                                class="form-control border-1" rows="5"  dir="auto" style="border: 1px solid gray;font-size:20px;"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تعداد </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="amount"
                                                class="form-control border-1" rows="5"  dir="auto" style="border: 1px solid gray;font-size:20px;"  required="required"></div>
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


            {{ View::make('footer')}}
            @else {{''}}
            @endif
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




