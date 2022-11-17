
  @if(Session::has('user'))
  {{ View::make('header_edit')}}

    <body>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-yellow">

                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b>    اسٹاک  ووڈ ورکس   </b></h3>
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
                                <form enctype="multipart/form-data" action="/maal_saalas/edit_tameer_wood_work_list" class="form-horizontal form-material" method="POST">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <input type="hidden" name="id" value={{$data['id']}}
                                        class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px;"  >
                                    </div>
                                    <div class="form-group mb-4">
                                    <div class="col-md-12 border-bottom p-0">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>مقام </b></label>

                                        <select type="text"  name="muhala" style="text-align: center; font-weight:600; font-size:20px;font-family: Jameel Noori;border: 1px solid gray;"

                                            class="form-control border-1"   >
                                        <option>سلیکٹ کریں</option>
                                        <option value="{{"تعمیر کوارٹر دارالصدر "}}">تعمیر کوارٹر دارالصدر </option>
                                        <option value="{{" تعمیر کوارٹر دارالنصر "}}">  تعمیر کوارٹر دارالنصر </option>
                                        <option value="{{" تعمیر کوارٹر دارالفتوح"}}"> تعمیر کوارٹر دارالفتوح</option>
                                        <option value="{{" تعمیر کوارٹر دارالیمن"}}">  تعمیر کوارٹر دارالیمن</option>
                                        <option value="{{" تعمیر کوارٹر فیکٹری ایریا"}}">تعمیر کوارٹر فیکٹری ایریا</option>
                                        <option value="{{"تعمیر کوارٹر دارالواقفین"}}">تعمیر کوارٹر دارالواقفین</option>

                                        </select>
                                     </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>دکان کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="store_name" value={{$data['store_name']}}
                                                class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px;"  > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>پیمائش (مربع فٹ) </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="murabah_foot" value={{$data['murabah_foot']}}
                                                class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px;"  > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>ریٹ</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="rate" value={{$data['rate']}}
                                                class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px;"  > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل   </b></label>
                                                 <div class="col-md-12 border-bottom p-0">
                                                    <input name="detail" value={{$data['detail']}}  class="form-control  border-1" style="border: 1px solid gray; font-size:20px;"  dir="auto"  required="required">
                                                </div>

                                    </div>


                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>اڈوانس</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="advance" value={{$data['advance']}}
                                                class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px;"  > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>ادائیگی</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="adaighi" value={{$data['adaighi']}}
                                                class="form-control border-1" dir="auto" style="border: 1px solid gray; font-size:20px;"  > </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div style="text-align:center;">
                                            <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;">  تبدیل کریں</button>

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




