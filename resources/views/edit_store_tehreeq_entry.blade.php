@if(Session::has('user'))
{{ View::make('header')}}

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div >
                        <h3 style="padding-left: 450px; font-size: 25px; font-family: Jameel Noori;"><b>سٹور</b></h3>
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
                                <form class="form-horizontal form-material" method="POST" action="/edit_store_tehreeq_entry">
                                    @csrf
                                    <div class="form-group mb-4" >
                                        <input type="hidden" name="id" value={{$data['id']}}>


                                        <div >
                                            <input type="hidden" name="date"
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="padding-left: 950px; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> نام اشیاء  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="ishya_name" value={{$data['ishya_name']}}
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="padding-left: 950px; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>  مکام  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select type="text"  name="maqam" style="text-align: center; font-weight:600; font-size:20px;font-family: Jameel Noori;"

                                                class="form-control border-1"   >
                                            <option>سلیکٹ کریں</option>
                                            <option value="{{"سرائے ناصر سٹور"}}">سرائے ناصر سٹور </option>
                                            <option value="{{"چلڈرن پارک سٹور"}}"> چلڈرن پارک سٹور </option>
                                            <option value="{{"دارالفتوح سٹور"}}"> دارالفتوح سٹور</option>
                                            <option value="{{"ورکشاپ،نزد بیت محمود"}}">ورکشاپ،نزد بیت محمود</option>


                                            </select></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="padding-left: 950px; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> قسم اشیاء  </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select type="text"  name="saman_type" style="text-align: center; font-weight:600; font-size:20px;font-family: Jameel Noori;"

                                                class="form-control border-1"   >
                                            <option>سلیکٹ کریں</option>
                                            <option value={{'پینٹ کا سامان'}}>پینٹ کا سامان</option>
                                            <option value="{{'لکڑی کا سامان'}}"> لکڑی کا سامان</option>
                                            <option value="{{'سول کا سامان'}}">سول کا سامان</option>
                                            <option value="{{'بجلی کا سامان'}}">بجلی کا سامان</option>
                                            <option value="{{'سینٹری کا سامان'}}">سینٹری کا سامان</option>


                                            </select></div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="padding-left: 950px; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> تفصیل </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="detail" value={{$data['detail']}}
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="padding-left: 940px; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> آمد تعداد </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="amount" value={{$data['amount']}}
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label style="padding-left: 960px; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b>بقایا	 </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="remain_amount" value={{$data['remain_amount']}}
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label style="padding-left: 940px; font-size: larger; font-size: 25px; font-family: Jameel Noori;"><b> ٹوٹل رقم	 </b></label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="total" value={{$data['total']}}
                                                class="form-control border-1"  style=" direction:RTL; unicode-bidi:bidi-override; " > </div>
                                    </div>
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
