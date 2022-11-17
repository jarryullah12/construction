
  @if(Session::has('user'))
  {{ View::make('header_edit')}}

    <body>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-yellow" >

                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b>  آمد تعمیر کوارٹرز </b></h3>
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
                                <form enctype="multipart/form-data" action="/maal_saalas/edit_amad_quater_tameer_entry" class="form-horizontal form-material" method="POST">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <input type="hidden"  name="id" value={{$data['id']}}
                                                class="form-control"   dir="auto"  >
                                        <div class="col-md-12 ">
                                            <input type="hidden"  name="date"
                                                class="form-control"   dir="auto"  > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> بل بنام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="maal_type"
                                                class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px;" value={{$data['maal_type']}} > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل آمد ایڈریس </b></label>
                                                 <div class="col-md-12 border-bottom p-0">
                                                    <input name="detail"  rows="5" class="form-control  border-1" style="border: 1px solid gray; font-size:20px;"   dir="auto"  value={{$data['detail']}}>
                                                </div>

                                    </div>



                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> بل کی رقم </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="amount"
                                                class="form-control border-1" style="border: 1px solid gray; font-size:20px;"  dir="auto"  value={{$data['amount']}}> </div>
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


    {{ View::make('footer')}}
            @else {{''}}
            @endif




