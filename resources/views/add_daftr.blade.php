
  @if(Session::has('user'))
  {{ View::make('header')}}

    <body>

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b> دفتر شامل کریں </b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">


                        </div>
                    </div>
                </div>
            </div>

            <div  class="container-fluid" >

                <div class="row" style="padding-left: 10px;">

                    <div class="col-lg-12 col-xlg-9 col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <form enctype="multipart/form-data" action="/maal_saalas/add_daftr" class="form-horizontal form-material" method="POST">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   دفتر  نمبر  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="daftr_no"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div style="text-align:center;">
                                            <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> شامل کریں</button>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div> </div>
                    </div>

                     <!-- Column -->


            </div>


    </body>


    {{ View::make('footer')}}
            @else {{''}}
            @endif



