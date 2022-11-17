@if(Session::has('user'))
    {{ View::make('header')}}
        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 450px;"><b> سٹاک مرمت کوارٹر اندراج </b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">


                        </div>
                    </div>
                </div>

            </div>

            <div  class="container-fluid" >

                <div class="row" style="padding-left: 40px;">

                    <div class="col-lg-6 col-xlg-9 col-md-2">
                        <div class="card">

                            <div class="card-body">
                                <form class="form-horizontal form-material">

                                    <div class="form-group mb-4">
                                        <h3 style="padding-left:150px;padding-bottom: 40px; "> سٹاک سٹور سامان</h3>

                                        <label style="padding-left:400px; font-size: larger;"><b>  تاریخ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="date"
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="padding-left: 370px; font-size: larger;"><b>  سٹور کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="padding-left: 400px; font-size: larger;"><b>  سامان </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="padding-left: 400px; font-size: larger;"><b>  ریٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="padding-left: 400px; font-size: larger;"><b>  تعداد </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div style="text-align:center;">
                                            <button style="color: white; background-color: #2f323e; font-size:20px; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> بھیج دیں</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- 2nd portion for mistari + mazdoor -->
                    <div class="col-lg-6 col-xlg-9 col-md-2">
                        <div class="card">

                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <h3 style="padding-left:150px;padding-bottom: 40px; "> سٹاک مستری/ مزدور</h3>
                                    <div class="form-group mb-4">
                                        <label style="padding-left:400px; font-size: larger;"><b>  تاریخ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="date"
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="padding-left: 320px; font-size: larger;"><b>  مستری/ مزدور کا نام </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="padding-left: 370px; font-size: larger;"><b> مستری ریٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="padding-left: 370px; font-size: larger;"><b> مزدور ریٹ </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="padding-left: 400px; font-size: larger;"><b>  کل یوم </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div style="text-align:center;">
                                            <button style="color: white; background-color: #2f323e; font-size:20px; width: 120px; height: 40px; border-color: #2f323e; border-radius: 5px;"> بھیج دیں</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{ View::make('footer')}}
            @else {{''}}
            @endif


