
  @if(Session::has('user'))
  {{ View::make('header_edit')}}


        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b>پروفائل سیٹنگ </b></h3>
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
                                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/profile" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value={{$data['id']}}>
                                    <div class="form-group mb-4">
                                        <label style="float: right;  font-size: 25px; font-family: Jameel Noori;"><b> نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="name" value={{$data['name']}}
                                                class="form-control border-1"  dir="auto" style="font-size: 20px; border:1px solid gray;"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right;font-size: 25px; font-family: Jameel Noori;"><b> ای میل ایڈریس  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email" name="email" value={{$data['email']}}
                                                class="form-control border-1"   style="font-size: 20px; border:1px solid gray;" > </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: 25px; font-family: Jameel Noori;"><b> پاسورڈ </b></label>
                                                 <div class="col-md-12 border-bottom p-0">
                                                    <input type="password" name="password"  style="font-size: 20px; border:1px solid gray;" value={{$data['password']}} class="form-control  border-1">
                                                </div>

                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: 25px; font-family: Jameel Noori;"><b> پاسورڈ دوبارہ لکھیں </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="password" name="confirm_password"  style="font-size: 20px; border:1px solid gray;" value={{$data['confirm_password']}}
                                                class="form-control border-1"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div style="text-align:center; padding-top: 20px;">
                                            <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> تبدیل کریں </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

            </div>
            {{ View::make('footer')}}
            @else {{''}}
            @endif
