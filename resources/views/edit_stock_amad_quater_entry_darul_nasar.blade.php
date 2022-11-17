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
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b>اسٹاک اسٹور  دارالنصر </b></h3>
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
                                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/edit_stock_amad_quater_entry_darul_nasar">
                                    @csrf
                                    <input type="hidden" name="id" value={{$data['id']}}>

                                    <div class="form-group mb-4" >


                                        <div >
                                            <input type="hidden" name="date"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;" dir="auto"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>   کوارٹر نمبر  </b></label>

                                                    <select class="form-control select2" name="nasar_quater_no" style="border: 1px solid gray;font-size:20px;">
                                                       <option style="text-align: center;">سلیکٹ کریں</option>
                                                       <option value="{{$data['nasar_quater_no']}}">{{$data['nasar_quater_no']}}</option>

                                                    </select>


                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  اسٹور کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="store_name" value={{$data['store_name']}}
                                                class="form-control border-1"  dir="auto" style="border: 1px solid gray;font-size:20px;"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  سامان </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="saman" value={{$data['saman']}}
                                                class="form-control border-1"  dir="auto" style="border: 1px solid gray;font-size:20px;"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> فی ریٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="per_rate" value={{$data['per_rate']}}
                                                class="form-control border-1"  dir="auto" style="border: 1px solid gray;font-size:20px;"> </div>
                                    </div><div class="form-group mb-4">
                                        <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تعداد  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="amount" value={{$data['amount']}}
                                                class="form-control border-1"  dir="auto" style="border: 1px solid gray;font-size:20px;"> </div>
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
