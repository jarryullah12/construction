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
                        <h3 style="padding-left: 550px; font-size: 25px; font-family: Jameel Noori;"><b>اسٹاک ماربل اینڈ چپس کیمیکل پالش   </b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">



                        </div>
                    </div>
                </div>
            </div>

            <div  class="container-fluid" >

                <div class="row" style="padding-left:10px;">





<!-- 4th portion for carpenter -->
<div class="col-lg-12 col-xlg-9 col-md-8">
    <div class="card">

        <div class="card-body">
            <form class="form-horizontal form-material" method="POST" action="/maal_saalas/edit_stock_tameer_quater_marbel">
                @csrf


                <div class="form-group mb-4">

                    <div class="col-md-12">
                        <input type="hidden" name="date"
                            class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                </div>

                <div class="form-group mb-4">
                    <div class="form-group mb-4" >
                        <input type="hidden" name="id" value={{$data['id']}}>



                    </div>
                   
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  اسٹور کا نام </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="store_name" value={{$data['store_name']}}
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  > </div>
                </div>
                <div class="form-group mb-4">
                        <label style="float:right; 200px; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> مقام   </b></label>
                        <div class="col-md-12 border-bottom p-0">
                            <select type="text" value={{$data['muhala']}} name="muhala" style="text-align: center;  font-family: Jameel Noori;border: 1px solid black;"

                                class="form-control border-1"   >
                                <option>سلیکٹ کریں</option>
                                <option value="{{"تعمیر کوارٹرز دارالصدر"}}"> تعمیر کوارٹرز دارالصدر </option>
                                <option value="{{"تعمیر کوارٹرز دارالنصر"}}"> تعمیر کوارٹرز دارالنصر </option>
                                <option value="{{" تعمیر کوارٹرز دارالفتوح"}}"> تعمیر کوارٹرز دارالفتوح</option>
                                <option value="{{" تعمیر کوارٹرز دارالیمن"}}"> تعمیر کوارٹرز دارالیمن</option>
                                <option value="{{"تعمیر کوارٹرز فیکٹری ایریا"}}">تعمیر کوارٹرز فیکٹری ایریا</option>
                                <option value="{{"تعمیر کوارٹرز دارالواقفین"}}">تعمیر کوارٹرز دارالواقفین</option>


                            </select></div>
                    </div> 
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  پیمائش (فٹ) </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="foot" value={{$data['foot']}}
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  > </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تعداد </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="amount" value={{$data['amount']}}
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  > </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  ریٹ  </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="rate" value={{$data['rate']}}
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  > </div>
                </div>
                <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  تفصیل </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="detail" value={{$data['detail']}}
                            class="form-control border-1" rows="5" style="border: 1px solid gray;font-size:20px;" dir="auto"  ></div>
                </div>
                {{-- <div class="form-group mb-4">
                    <label style="float:right; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  ٹوٹل رقم </b></label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" name="total" value={{$data['total']}}
                            class="form-control border-1" style="border: 1px solid gray;font-size:20px;"  dir="auto"  required="required"> </div>
                </div> --}}
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
