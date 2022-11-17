
  @if(Session::has('user'))
  {{ View::make('header')}}
  <link rel="stylesheet" href="{{asset('maalsaalas_style/css/css/list.css')}}">

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <body>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b>  آمد  تعمیر ٹربائین واٹر ٹینک دارالفتوح  </b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">


                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div  class="container-fluid" >
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row" style="padding-left: 10px;">
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9 col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <form enctype="multipart/form-data" action="/maal_saalas/water_tank_amad_quater_entry" class="form-horizontal form-material" method="POST">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>تاریخ</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="date" placeholder="تاریخ سلیکٹ کریں" id="cald"
                                                class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px; text-align:center"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> دکان کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="maal_type"
                                                class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px;"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل آمد ایڈریس </b></label>
                                                 <div class="col-md-12 border-bottom p-0">
                                                    <textarea name="detail"  rows="5" class="form-control  border-1" style="border: 1px solid gray; font-size:20px;"   dir="auto"  required="required"></textarea>
                                                </div>

                                    </div>



                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> بل کی رقم </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="amount"
                                                class="form-control border-1" style="border: 1px solid gray; font-size:20px;"  dir="auto"   required="required"> </div>
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

    </body>
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




