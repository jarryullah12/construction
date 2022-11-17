
    @if(Session::has('user'))
    {{ View::make('header')}}

       <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 500px; font-size: 25px; font-family: Jameel Noori;"><b> سٹورز </b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">


                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 style="padding-left: 100px; font-size: 25px; font-family: Jameel Noori;"><b> سٹور تحریک جدید </b></h3>
                            <hr>
                            <div style="padding-left:80px;">
                                 <img style="width: 115px;" src="{{asset('maalsaalas_style/plugins/images/store.png')}}" >
                                 <ul class="list-inline two-part d-flex align-items-center mb-0" >
                                </ul>
                            </div>
                            <hr>
                            <div style="padding-left: 80px;">
                            <button style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  <a style="color: white;" href="store_categores"> اندراج کریں </a>  </button>

                            </div>


                   </div>
                    </div>



                </div>
            </div>
            {{ View::make('footer')}}
            @else {{''}}
            @endif
