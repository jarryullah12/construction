
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
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b> درخواست مرمت دفاتر/گیسٹ ہاوس </b></h3>
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
                                <form method="POST" action="/maal_saalas/amad_daftr_letter_list" class="form-horizontal form-material" >
                                    @csrf
                                    <div class="form-group mb-4">
                                        <div class="col-md-12 ">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تاریخ </b></label>
                                            <input type="text" style="text-align: center;border: 1px solid gray;font-size: 20px;" id="cald" name="date"
                                                class="form-control border-1" placeholder="تاریخ سلیکٹ کریں"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;" ><b> نام درخواست گزار </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="name_letter_person"
                                                class="form-control border-1" style="border: 1px solid gray;font-size: 20px;"  dir="auto" required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="form-group mb-4">
                                            <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> رابطہ نمبر </b></label>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="col-md-12 border-bottom p-0">

                                                <select type="text" name="contact_code"
                                                    class="form-control select2 border-1" dir="auto"  style="border: 1px solid gray;font-size:20px; width:100px;float: left;" required>
                                                <option style="text-align: center" value="">سلیکٹ کوڈ</option>
                                                <option value="{{'0000'}}">0000</option>
                                                <option value="{{'0311'}}">0311</option>
                                                <option value="{{"0312"}}">0312</option>
                                                <option value="{{"0313"}}">0313</option>
                                                <option value="{{"0314"}}">0314</option>
                                                <option value="{{"0315"}}">0315</option>
                                                <option value="{{"0340"}}">0340</option>
                                                <option value="{{"0341"}}">0341</option>
                                                <option value="{{"0342"}}">0342</option>
                                                <option value="{{"0343"}}">0343</option>
                                                <option value="{{"0344"}}">0344</option>
                                                <option value="{{"0345"}}">0345</option>
                                                <option value="{{"0346"}}">0346</option>
                                                <option value="{{"0347"}}">0347</option>
                                                <option value="{{"0300"}}">0300</option>
                                                <option value="{{"0301"}}">0301</option>
                                                <option value="{{"0302"}}">0302</option>
                                                <option value="{{"0303"}}">0303</option>
                                                <option value="{{"0304"}}">0304</option>
                                                <option value="{{"0305"}}">0305</option>
                                                <option value="{{"0306"}}">0306</option>
                                                <option value="{{"0307"}}">0307</option>
                                                <option value="{{"0308"}}">0308</option>
                                                <option value="{{"0309"}}">0309</option>
                                                <option value="{{"0330"}}">0330</option>
                                                <option value="{{"0331"}}">0331</option>
                                                <option value="{{"0332"}}">0332</option>
                                                <option value="{{"0333"}}">0333</option>
                                                <option value="{{"0334"}}">0334</option>
                                                <option value="{{"0335"}}">0335</option>
                                                <option value="{{"0336"}}">0336</option>
                                                <option value="{{"0337"}}">0337</option>
                                                <option value="{{"0320"}}">0320</option>
                                                <option value="{{"0321"}}">0321</option>
                                                <option value="{{"0323"}}">0322</option>
                                                <option value="{{"0323"}}">0323</option>
                                                <option value="{{"0324"}}">0324</option>
                                                <option value="{{"0325"}}">0325</option>


                                                </select>

                                                    &nbsp;
                                            <input type="text" name="contact_no"
                                                class="form-control border-1" style="border: 1px solid gray; width:1100px; float:right;font-size: 20px;" dir="auto"  required="required">

                                            </div>

                                    </div>
                                    @error('contact_no')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                    <div class="form-group mb-4">
                                        <br>
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  دفتر/گیسٹ ہاوس نمبر </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="daftr_no"
                                                class="form-control border-1" style="border: 1px solid gray;font-size: 20px;"  dir="auto" required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;font-size: 20px;"><b> تفصیل </b></label>
                                                 <div class="col-md-12 border-bottom p-0">
                                                    <textarea name="detail" rows="5" class="form-control  border-1" style="border: 1px solid gray;font-size: 20px;" dir="auto" required="required"></textarea>
                                                </div>

                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> نام سٹاف </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="name_staff"
                                                class="form-control border-1" style="border: 1px solid gray;font-size: 20px;"  dir="auto"  required="required"> </div>
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
                date.setDate(date.getDate() -3);
                $('#cald').datepicker({
                    format:("dd/mm/yy"),
                    uiLibrary: 'bootstrap4',
                iconsLibrary: 'fontawesome',
                minDate: date,


                });
         </script>
             <script>
                $('.select2').select2();
            </script>

<style>
    .select2-container .select2-selection--single{
    height:40px !important;
	width:100px;
	float:left;
}
.select2-container--default .select2-selection--single{
     border: 1px solid #ccc !important;
     border-radius: 0px !important;
	 text-align:center;

}

</style>

            </body>
            {{ View::make('footer')}}
            @else {{''}}
            @endif
