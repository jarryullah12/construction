@if(Session::has('user'))
{{ View::make('header_edit')}}

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;"><b>اسٹاک اسٹیل ڈیکوریٹر</b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">



                        </div>
                    </div>
                </div>
            </div>

            <div  class="container-fluid" >

                <div class="row" style="padding-left:10px;">

                    <div class="col-lg-12 col-xlg-9 col-md-2">
                        <div class="card">

                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" action="/maal_saalas/edit_steel_tank">
                                    @csrf
                                    <div class="form-group mb-4" >
                                        <input type="hidden" name="id" value={{$data['id']}}>


                                        <div >
                                            <input type="hidden" name="date"
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  > </div>
                                    </div>
                                   {{-- <div class="form-group mb-4">
                                <label style="float:right;  font-size: larger;  font-family:  Jameel Noori;font-size: 25px;"><b> مکام   </b></label>
                                <div class="col-md-12 border-bottom p-0">
                                    <select type="text"  name="muhala" style="text-align: center; font-size: 20px; font-family: Jameel Noori;border: 1px solid gray;"

                                        class="form-control border-1"   >
                                    <option>سلیکٹ کریں</option>
                                    <option value="{{"تعمیر واٹر ٹینک دارالفتوح"}}">تعمیر واٹر ٹینک دارالفتوح</option>


                                    </select></div>
                                      </div> --}}
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  دکان کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="decorator_name" value={{$data['decorator_name']}}
                                                class="form-control border-1"  style="border: 1px solid gray;font-size:20px;" dir="auto"> </div>
                                    </div>




                                   <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> وزن( کلوگرام) </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="weight" value={{$data['weight']}}
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    {{-- </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> وزن(فی کلوگرام) </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="per_weight" value={{$data['per_weight']}}
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div> --}}
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ریٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="rate" value={{$data['rate']}}
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div><div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تعداد </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="amount" value={{$data['amount']}}
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="detail" value={{$data['detail']}}
                                                class="form-control border-1"  style="border: 1px solid gray;font-size:20px;" dir="auto"> </div>
                                    </div>
                                    {{-- <div class="form-group mb-4">
                                        <label style="float: right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ٹوٹل رقم</b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="total" value={{$data['total']}}
                                                class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                                    </div> --}}

                                    <div class="form-group mb-4">
                                        <div style="text-align:center;">
                                            <button type="submit" style="color: white; background-color: #2f323e; font-size: 25px; font-family: Jameel Noori; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> تبدیل کریں</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- 2nd portion for mistari + mazdoor -->




                </div>

            </div>

            {{ View::make('footer')}}
            @else {{''}}
            @endif
