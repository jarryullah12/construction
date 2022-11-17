@if(Session::has('user'))
{{ View::make('header_edit')}}
<link rel="stylesheet" href="{{asset('maalsaalas_style/css/css/list2.css')}}">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b>اسٹاک اسٹیل ڈیکوریٹر فہرست دارالیمن </b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">



                        </div>
                    </div>
                </div>
            </div>

            <div  class="container-fluid" >

                <div class="row" style="padding-left:10px;">




                    <!-- 2nd portion for mistari + mazdoor -->
                    <div class="col-lg-12 col-xlg-9 col-md-2">
                        <div class="card">

                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/edit_quater_yaman_steel_entry">
                                    @csrf

                                    <div>

                                        <div >
                                            <input type="hidden" name="id" value={{$data['id']}}>
                                            <input type="hidden" name="date" value={{$data['date']}}
                                                class="form-control border-1"  dir="auto" style="border: 1px solid gray;font-size:20px;"> </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   کوارٹر نمبر  </b></label>

                                                    <select class="form-control select2" name="yaman_quater_no" style="border: 1px solid gray;font-size:20px;">
                                                       <option style="text-align: center;">سلیکٹ کریں</option>
                                                       <option value="{{$data['yaman_quater_no']}}">{{$data['yaman_quater_no']}}</option>

                                                    </select>


                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  ڈیکوریڑ کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="decorator_name" value={{$data['decorator_name']}}
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;" dir="auto"> </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> وزن </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="weight" value="{{$data['weight']}}"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تعداد </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="amount" value="{{$data['amount']}}"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ریٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="rate" value="{{$data['rate']}}"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تفصیل </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="detail" value="{{$data['detail']}}"
                                                class="form-control border-1" rows="5" style="border: 1px solid gray;font-size:20px;" dir="auto"  required="required" > </div>
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
            <script>
                $('.select2').select2();
            </script>
            {{ View::make('footer')}}
            @else {{''}}
            @endif
