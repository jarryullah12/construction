

 <?php
 use App\Http\Controllers\quater;


   $total=quater::cartItem_steel_bill();

 ?>
@if(Session::has('user'))
<style>
    @font-face {
        font-family: Jameel Noori;
        src: url('{{asset('maalsaalas_style/scss/Jameel Noori Nastaleeq Regular.ttf')}}');

    }
</style>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>وکالت مال ثالث</title>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.12.4.js"></script>
      <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>




  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



<div>
	<div class="panel panel-default text-center" >
		<div class="panel-body  " >
        <h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong>   کیش میمو</strong></h4>
            <br>

			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> بل  ٹھیکیدار بنام دفتر تحریک جدید</strong></h4>
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> تعمیر کوارٹرز</strong></h4>
            <hr style="border:1px solid black">

				<div class="col-md-6 col-sm-6 text-left">
					<h4><strong></strong> </h4>
					<ul class="list-unstyled">
						<li><strong> </strong> </li>
						<li><strong></strong> </li>
						<li><strong></strong> </li>
						<li><strong></strong> </li>
					</ul>
				</div>

				<div class="col-md-6 col-sm-6 text-right">
{{--
					<ul class="list-unstyled">
						<li style="font-size:18px;font-family: Jameel Noori;"><script>
								var today = new Date();
								var dd = String(today.getDate()).padStart(2, '0');
								var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
								var yyyy = today.getFullYear();
								today = dd + '/' + mm + '/' + yyyy;
								document.write(today);

						</script><strong> :تاریخ</strong> </li>
						<li style="font-size:18px;font-family: Jameel Noori;"><strong> دن:</strong> <script>
				var today = new Date();
				var day = today.getDay();
				var daylist = ["اتوار","سوموار","منگل","بدھ","جمعرات","جمعہ","ہفتہ"];
				document.write(" " +daylist[day]);
						</script></li>

					</ul> --}}

				</div>

			</div>
<br>
<table style="border:1px black; ">
    <tr>
        <th style="text-align:left;font-size:18px;font-family: Jameel Noori;border: #fff;"><input  style="width: 230px; height:30px; border:#fff; border-bottom: 1px solid black; text-align:center" type="text"  dir="auto"><strong>  :فون نمبر </strong></th>
        <th style="text-align:right;font-size:18px;font-family: Jameel Noori;border: #fff;"><input  style="width: 230px; height:30px; border:#fff; border-bottom: 1px solid black; text-align:center" type="text"  dir="rtl"><strong>  : نام

        </strong></th>



        </tr>
        {{-- <tr>
        <th style="text-align:left;font-size:18px;font-family: Jameel Noori;border: #fff;"><input  style="width: 230px; height:30px; border:#fff; border-bottom: 1px solid black; text-align:center" type="text"  dir="auto"><strong> : فون نمبر</strong></th>
        <th style="text-align:right;font-size:18px;font-family: Jameel Noori;border: #fff;"><input  style="width: 230px; height:30px; border:#fff; border-bottom: 1px solid black; text-align:center" type="text"  dir="auto"><strong> :فون نمبر</strong></th>


        </tr> --}}
        {{-- <tr>
            <th style="text-align:left;font-size:18px;font-family: Jameel Noori;border: #fff;"><input  style="width: 230px; height:30px; border:#fff; border-bottom: 1px solid black; text-align:center" type="text"  dir="auto"><strong> :فون نمبر</strong></th>
            <th style="text-align:right;font-size:18px;font-family: Jameel Noori;border: #fff;"><input  style="width: 230px; height:30px; border:#fff; border-bottom: 1px solid black; text-align:center" type="text"  dir="rtl"><strong> :مقام

        </tr> --}}
    </table>

			<div class="table-responsive">
				<table style=" border: 1px solid black">
					<thead >
						<tr style="text-align: center">
							<td style="text-align: center;width: 20px;font-size:15px;font-family: Jameel Noori;">ٹوٹل رقم</td>
							<td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">سکیورٹی ریٹ</td>
							<td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">ادائیگی</td>
							<td style="text-align: center;width: 20px;font-size:15px;font-family: Jameel Noori;">پراگریس</td>
							<td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">  ریٹ</td>
							<td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;"> کورڈ ایریا </td>
							<td style="text-align: center;width: 70px;font-size:15px;font-family: Jameel Noori;">تفصیل</td>
							<td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">قسم ٹھیکیدار</td>
							<td style="text-align: center;width: 20px;font-size:15px;font-family: Jameel Noori;">مقام</td>
							<td style="text-align: center;width: 40px;font-size:15px;font-family: Jameel Noori;">تاریخ</td>
							<td style="text-align: center;width: 10px;font-size:15px;font-family: Jameel Noori;">نمبر شمار</td>



						</tr>
                        <tr>

                            <td dir="auto"><span id="total"></span></td>
                            <td dir="auto"><input type="text"  id="security_rate1"></td>
                            <td dir="auto"><input type="text"  id="adaigi1"></td>
                            <td dir="auto"><input type="text"  id="progress1"></td>
                            <td dir="auto"><input type="text"  id="murabah_rate1"></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate1"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >پینٹر</option>
                                <option >کارپنٹر</option>
                                <option >الیکٹریشن</option>
                                <option >سول ورکس</option>
                                <option >سینٹری کنٹریکٹر</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>1</td>

                        </tr>

                        <tr>

                            <td dir="auto"><span id="total2"></span></td>
                            <td dir="auto"><input type="text"  id="security_rate2"></td>
                            <td dir="auto"><input type="text"  id="adaigi2"></td>
                            <td dir="auto"><input type="text"  id="progress2"></td>
                            <td dir="auto"><input type="text"  id="murabah_rate2"></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate2"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >پینٹر</option>
                                <option >کارپنٹر</option>
                                <option >الیکٹریشن</option>
                                <option >سول ورکس</option>
                                <option >سینٹری کنٹریکٹر</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>2</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total3"></span></td>
                            <td dir="auto"><input type="text"  id="security_rate3"></td>
                            <td dir="auto"><input type="text"  id="adaigi3"></td>
                            <td dir="auto"><input type="text"  id="progress3"></td>
                            <td dir="auto"><input type="text"  id="murabah_rate3"></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate3"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >پینٹر</option>
                                <option >کارپنٹر</option>
                                <option >الیکٹریشن</option>
                                <option >سول ورکس</option>
                                <option >سینٹری کنٹریکٹر</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>3</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total4"></span></td>
                           <td dir="auto"><input type="text"  id="security_rate4"></td>
                           <td dir="auto"><input type="text"  id="adaigi4"></td>
                            <td dir="auto"><input type="text"  id="progress4"></td>
                            <td dir="auto"><input type="text"  id="murabah_rate4"></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate4"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >پینٹر</option>
                                <option >کارپنٹر</option>
                                <option >الیکٹریشن</option>
                                <option >سول ورکس</option>
                                <option >سینٹری کنٹریکٹر</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>4</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total5"></span></td>
                            <td dir="auto"><input type="text"  id="security_rate5"></td>
                            <td dir="auto"><input type="text"  id="adaigi5"></td>
                            <td dir="auto"><input type="text"  id="progress5"></td>
                            <td dir="auto"><input type="text"  id="murabah_rate5"></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate5"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >پینٹر</option>
                                <option >کارپنٹر</option>
                                <option >الیکٹریشن</option>
                                <option >سول ورکس</option>
                                <option >سینٹری کنٹریکٹر</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>5</td>

                        </tr>
                        <tr>
                            <td dir="auto"><span id="total6"></span></td>
                            <td dir="auto"><input type="text"  id="security_rate6"></td>
                            <td dir="auto"><input type="text"  id="adaigi6"></td>
                            <td dir="auto"><input type="text"  id="progress6"></td>
                            <td dir="auto"><input type="text"  id="murabah_rate6"></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate6"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >پینٹر</option>
                                <option >کارپنٹر</option>
                                <option >الیکٹریشن</option>
                                <option >سول ورکس</option>
                                <option >سینٹری کنٹریکٹر</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>6</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total7"></span></td>
                           <td dir="auto"><input type="text"  id="security_rate7"></td>
                           <td dir="auto"><input type="text"  id="adaigi7"></td>
                            <td dir="auto"><input type="text"  id="progress7"></td>
                            <td dir="auto"><input type="text"  id="murabah_rate7"></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate7"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >پینٹر</option>
                                <option >کارپنٹر</option>
                                <option >الیکٹریشن</option>
                                <option >سول ورکس</option>
                                <option >سینٹری کنٹریکٹر</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>7</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total8"></span></td>
                            <td dir="auto"><input type="text"  id="security_rate8"></td>
                            <td dir="auto"><input type="text"  id="adaigi8"></td>
                            <td dir="auto"><input type="text"  id="progress8"></td>
                            <td dir="auto"><input type="text"  id="murabah_rate8"></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate8"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >پینٹر</option>
                                <option >کارپنٹر</option>
                                <option >الیکٹریشن</option>
                                <option >سول ورکس</option>
                                <option >سینٹری کنٹریکٹر</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>


                            <td>8</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total9"></span></td>
                           <td dir="auto"><input type="text"  id="security_rate9"></td>
                           <td dir="auto"><input type="text"  id="adaigi9"></td>
                            <td dir="auto"><input type="text"  id="progress9"></td>
                            <td dir="auto"><input type="text"  id="murabah_rate9"></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate9"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >پینٹر</option>
                                <option >کارپنٹر</option>
                                <option >الیکٹریشن</option>
                                <option >سول ورکس</option>
                                <option >سینٹری کنٹریکٹر</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>9</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total10"></span></td>
                             <td dir="auto"><input type="text"  id="security_rate10"></td>
                            <td dir="auto"><input type="text"  id="adaigi10"></td>
                            <td dir="auto"><input type="text"  id="progress10"></td>
                            <td dir="auto"><input type="text"  id="murabah_rate10"></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate10"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >پینٹر</option>
                                <option >کارپنٹر</option>
                                <option >الیکٹریشن</option>
                                <option >سول ورکس</option>
                                <option >سینٹری کنٹریکٹر</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>10</td>

                        </tr>
                        <tr>
                            <td><span id="total11"></span></td>
                            <td style="font-family: Jameel Noori;">میزان</td>
                            <td dir="auto"><input type="text"  id="security_rate11"></td>
                            <td dir="auto"><input type="text"  id="adaigi11"></td>
                            <td dir="auto"><input type="text"  id="progress11"></td>
                            <td dir="auto"><input type="text"  id="murabah_rate11"></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate11"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>


                        </tr>
                        {{-- <tr>

                            <td dir="auto"></td>
                            <td></td>

                            <td dir="auto"><input type="text" ></td>
                            <td style="font-family: Jameel Noori;">فی مزدور یومیہ ریٹ</td>

                            <td dir="auto"><input type="text" ></td>
                            <td style="font-family: Jameel Noori;">فی مستری یومیہ ریٹ</td>

                            <td dir="auto"><input type="text" ></td>

                            <td></td>
                            <td dir="auto"></td>

                        </tr> --}}
                        <tr>

                            {{-- <td style="text-align:center;font-size:16px;font-family: Jameel Noori;">
                                {{($col['per_seat_rate']*$col['seat_amount']+$col['per_chair_rate']*$col['chair_amount'])*$total}}


                            </td>

                               <div class="col-md-12 col-sm-6 text-right" style="font-size:16px;font-family: Jameel Noori;  ">
                                {{$col['decorator_name']}}
                                <strong style="font-size:18px;font-family: Jameel Noori;"> :  ڈیکوریٹر کا نام </strong>
                            </div> --}}
                            <br><br>
                            {{-- <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> --}}



                        </tr>


                    </tbody>
                </table>
                <br>
                <tr>
    <th style="text-align:right;font-size:18px;font-family: Jameel Noori;border: #fff;"><input  style="width: 230px; height:30px; border:#fff; border-bottom: 1px solid black; text-align:center" type="text"  dir="auto"><strong> :مبلغ</strong></th>

    <br>
                </tr>
            </div>




            <br>
            <table style="border: #fff">
                <tr>
                <th style="text-align:left;font-size:18px;font-family: Jameel Noori;border: #fff;"><strong>دستخط نگران مرمت:</strong> ۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔</th>
                <br>
                <th style="text-align:right;font-size:18px;font-family: Jameel Noori;border: #fff;"><strong>دستخط محرر:</strong> ۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔</th>


                </tr>
                <tr>

                <th style="text-align:left;font-size:18px;font-family: Jameel Noori;border: #fff;"><strong>دستخط وکیل المال ثالث:</strong> ۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔</th>
                <br>
                <th style="text-align:right;font-size:18px;font-family: Jameel Noori;border: #fff;"><strong>دستخط اوورسیئر:</strong> ۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔</th>

                </tr>
                </table>
            <br>
            <button style="float:right;font-size:16px;font-family: Jameel Noori;" onClick="window.print()"><strong>پرنٹ نکالیں</strong></button>
            {{-- <button style="float:right;font-size:16px;font-family: Jameel Noori;" ><strong><a style="text-decoration: none; color:black" href={{"delete_bill_daftr_chair/".$col['id']}}>ختم کریں</a></strong></button> --}}

        </div>
    </div>


    </div>












    <style>
    table, td  {
    text-align: center;
    border: 1px solid #000;

    }

    table {
    border-collapse: collapse;
    width: 95%;
    table-layout: fixed;
    margin: auto;
    }

    /* th, td {
    padding: 5px;
    } */
    td {
    text-align: center;
    }
    td input {
    text-align: center;
    width: 100%;
    box-sizing: border-box;
    border: 1px  #000;
    }
    td select {
    text-align: center;
    width: 100%;
    box-sizing: border-box;
    border: 1px  #000;
    }
    </style>

    {{-- table {
    width: 550px;
    border-collapse:collapse;
    margin: auto;
    background-color: #A4A4A4;
    border: 2px solid black;
    table-layout: fixed;
    }
    td {
    text-align: center;
    border: 2px solid green;
    }
    td input {
    width: 100%;
    box-sizing: border-box;
    } --}}




    @else {{''}}
    @endif



{{-- 1st --}}

    <script>
    var murabah_rate1 = 1, per_murabah_rate1 = 1, progress1 = 1,adaigi1 = 1, security_rate1 = 1;

    var murabah_rate1_q=0, per_murabah_rate1_q = 0, progress1_q = 0, adaigi1_q = 0, security_rate1_q = 0;


    var murabah_rate1Bill="",per_murabah_rate1Bill="",progress1Bill="",adaigi1Bill="",security_rate1Bill="";

    var total_amount=0;

    document.getElementById("murabah_rate1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_rate1Bill="";
        murabah_rate1_q=0;
        showBill();
    }else{
        murabah_rate1_q=this.value;
        murabah_rate1Bill="";
        showBill();

    }
    });
    document.getElementById("adaigi1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        adaigi1Bill="";
        adaigi1_q=0;
        showBill();
    }else{
        adaigi1_q=this.value;
        adaigi1Bill="";
        showBill();

    }
    });
    document.getElementById("per_murabah_rate1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        per_murabah_rate1Bill="";
        per_murabah_rate1_q=0;
        showBill();
    }else{
        per_murabah_rate1_q=this.value;
        per_murabah_rate1Bill="";
        showBill();

    }
    });
       document.getElementById("progress1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            progress1Bill="";
            progress1_q=0;
            showBill();
        }else{
            progress1_q=this.value;
            progress1Bill="";
            showBill();

    }
    });
     document.getElementById("security_rate1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            security_rate1Bill="";
            security_rate1_q=0;
            showBill();
        }else{
            security_rate1_q=this.value;
            security_rate1Bill="";
            showBill();

    }
    });


    function showBill(){

        document.getElementById("total").innerHTML = ((murabah_rate1*murabah_rate1_q*per_murabah_rate1*per_murabah_rate1_q*progress1*progress1_q*adaigi1*adaigi1_q)/100-security_rate1*security_rate1_q); // total amount
    }
    </script>

    {{-- 2nd --}}

      <script>
    var murabah_rate2 = 1, per_murabah_rate2 = 1, progress2 = 1,adaigi2 = 1, security_rate2 = 1;

    var murabah_rate2_q=0, per_murabah_rate2_q = 0, progress2_q = 0,adaigi2_q = 0, security_rate2_q = 0;


    var murabah_rate2Bill="",per_murabah_rate2Bill="",progress2Bill="",adaigi2Bill="",security_rate2Bill="";

    var total_amount=0;

    document.getElementById("murabah_rate2").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_rate2Bill="";
        murabah_rate2_q=0;
        showBill2();
    }else{
        murabah_rate2_q=this.value;
        murabah_rate2Bill="";
        showBill2();

    }
    });
    document.getElementById("adaigi2").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        adaigi2Bill="";
        adaigi2_q=0;
        showBill2();
    }else{
        adaigi2_q=this.value;
        adaigi2Bill="";
        showBill2();

    }
    });
    document.getElementById("per_murabah_rate2").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        per_murabah_rate2Bill="";
        per_murabah_rate2_q=0;
        showBill2();
    }else{
        per_murabah_rate2_q=this.value;
        per_murabah_rate2Bill="";
        showBill2();

    }
    });
       document.getElementById("progress2").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            progress2Bill="";
            progress2_q=0;
            showBill2();
        }else{
            progress2_q=this.value;
            progress2Bill="";
            showBill2();

    }
    });
     document.getElementById("security_rate2").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            security_rate2Bill="";
            security_rate2_q=0;
            showBill2();
        }else{
            security_rate2_q=this.value;
            security_rate2Bill="";
            showBill2();

    }
    });


    function showBill2(){

        document.getElementById("total2").innerHTML = ((murabah_rate2*murabah_rate2_q*per_murabah_rate2*per_murabah_rate2_q*progress2*progress2_q*adaigi2*adaigi2_q)/100-security_rate2*security_rate2_q); // total amount
    }
    </script>
    {{-- 3rd --}}

      <script>
    var murabah_rate3 = 1, per_murabah_rate3 = 1, progress3 = 1,adaigi3 = 1, security_rate3 = 1;

    var murabah_rate3_q=0, per_murabah_rate3_q = 0, progress3_q = 0, adaigi3_q = 0, security_rate3_q = 0;


    var murabah_rate3Bill="",per_murabah_rate3Bill="",progress3Bill="",adaigi3Bill="",security_rate3Bill="";

    var total_amount=0;

    document.getElementById("murabah_rate3").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_rate3Bill="";
        murabah_rate3_q=0;
        showBill3();
    }else{
        murabah_rate3_q=this.value;
        murabah_rate3Bill="";
        showBill3();

    }
    });
    document.getElementById("adaigi3").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        adaigi3Bill="";
        adaigi3_q=0;
        showBill3();
    }else{
        adaigi3_q=this.value;
        adaigi3Bill="";
        showBill3();

    }
    });
    document.getElementById("per_murabah_rate3").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        per_murabah_rate3Bill="";
        per_murabah_rate3_q=0;
        showBill3();
    }else{
        per_murabah_rate3_q=this.value;
        per_murabah_rate3Bill="";
        showBill3();

    }
    });
       document.getElementById("progress3").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            progress3Bill="";
            progress3_q=0;
            showBill3();
        }else{
            progress3_q=this.value;
            progress3Bill="";
            showBill3();

    }
    });
     document.getElementById("security_rate3").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            security_rate3Bill="";
            security_rate3_q=0;
            showBill3();
        }else{
            security_rate3_q=this.value;
            security_rate3Bill="";
            showBill3();

    }
    });


    function showBill3(){

        document.getElementById("total3").innerHTML = ((murabah_rate3*murabah_rate3_q*per_murabah_rate3*per_murabah_rate3_q*progress3*progress3_q*adaigi3*adaigi3_q)/100-security_rate3*security_rate3_q); // total amount
    }
    </script>
    {{-- 4th --}}

        <script>
    var murabah_rate4 = 1, per_murabah_rate4 = 1, progress4 = 1,adaigi4 = 1, security_rate4 = 1;

    var murabah_rate4_q=0, per_murabah_rate4_q = 0, progress4_q = 0,adaigi4_q = 0, security_rate4_q = 0;


    var murabah_rate4Bill="",per_murabah_rate4Bill="",progress4Bill="",adaigi4Bill="",security_rate4Bill="";

    var total_amount=0;

    document.getElementById("murabah_rate4").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_rate4Bill="";
        murabah_rate4_q=0;
        showBill4();
    }else{
        murabah_rate4_q=this.value;
        murabah_rate4Bill="";
        showBill4();

    }
    });
    document.getElementById("adaigi4").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        adaigi4Bill="";
        adaigi4_q=0;
        showBill4();
    }else{
        adaigi4_q=this.value;
        adaigi4Bill="";
        showBill4();

    }
    });
    document.getElementById("per_murabah_rate4").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        per_murabah_rate3Bill="";
        per_murabah_rate4_q=0;
        showBill4();
    }else{
        per_murabah_rate4_q=this.value;
        per_murabah_rate4Bill="";
        showBill4();

    }
    });
       document.getElementById("progress4").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            progress4Bill="";
            progress4_q=0;
            showBill4();
        }else{
            progress4_q=this.value;
            progress4Bill="";
            showBill4();

    }
    });
     document.getElementById("security_rate4").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            security_rate4Bill="";
            security_rate4_q=0;
            showBill4();
        }else{
            security_rate4_q=this.value;
            security_rate4Bill="";
            showBill4();

    }
    });


    function showBill4(){

        document.getElementById("total4").innerHTML = ((murabah_rate4*murabah_rate4_q*per_murabah_rate4*per_murabah_rate4_q*progress4*progress4_q*adaigi4*adaigi4_q)/100-security_rate4*security_rate4_q); // total amount
    }
    </script>
    {{-- 5th --}}
   <script>
    var murabah_rate5 = 1, per_murabah_rate5 = 1, progress5 = 1,adaigi5 = 1, security_rate5 = 1;

    var murabah_rate5_q=0, per_murabah_rate5_q = 0, progress5_q = 0, adaigi5_q = 0, security_rate5_q = 0;


    var murabah_rate5Bill="",per_murabah_rate5Bill="",progress5Bill="",adaigi5Bill="",security_rate5Bill="";

    var total_amount=0;

    document.getElementById("murabah_rate5").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_rate5Bill="";
        murabah_rate5_q=0;
        showBill5();
    }else{
        murabah_rate5_q=this.value;
        murabah_rate5Bill="";
        showBill5();

    }
    });
    document.getElementById("adaigi5").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        adaigi5Bill="";
        adaigi5_q=0;
        showBill5();
    }else{
        adaigi5_q=this.value;
        adaigi5Bill="";
        showBill5();

    }
    });
    document.getElementById("per_murabah_rate5").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        per_murabah_rate5Bill="";
        per_murabah_rate5_q=0;
        showBill5();
    }else{
        per_murabah_rate5_q=this.value;
        per_murabah_rate5Bill="";
        showBill5();

    }
    });
       document.getElementById("progress5").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            progress5Bill="";
            progress5_q=0;
            showBill5();
        }else{
            progress5_q=this.value;
            progress5Bill="";
            showBill5();

    }
    });
     document.getElementById("security_rate5").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            security_rate5Bill="";
            security_rate5_q=0;
            showBill5();
        }else{
            security_rate5_q=this.value;
            security_rate5Bill="";
            showBill5();

    }
    });


    function showBill5(){

        document.getElementById("total5").innerHTML = ((murabah_rate5*murabah_rate5_q*per_murabah_rate5*per_murabah_rate5_q*progress5*progress5_q*adaigi5*adaigi5_q)/100-security_rate5*security_rate5_q); // total amount
    }
    </script>
    {{-- 6th --}}
     <script>
    var murabah_rate6 = 1, per_murabah_rate6 = 1, progress6 = 1,adaigi6 = 1, security_rate6 = 1;

    var murabah_rate6_q=0, per_murabah_rate6_q = 0, progress6_q = 0,adaigi6_q = 0, security_rate6_q = 0;


    var murabah_rate6Bill="",per_murabah_rate6Bill="",progress6Bill="",adaigi6Bill="",security_rate6Bill="";

    var total_amount=0;

    document.getElementById("murabah_rate6").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_rate6Bill="";
        murabah_rate6_q=0;
        showBill6();
    }else{
        murabah_rate6_q=this.value;
        murabah_rate6Bill="";
        showBill6();

    }
    });
    document.getElementById("adaigi6").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        adaigi6Bill="";
        adaigi6_q=0;
        showBill6();
    }else{
        adaigi6_q=this.value;
        adaigi6Bill="";
        showBill6();

    }
    });
    document.getElementById("per_murabah_rate6").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        per_murabah_rate6Bill="";
        per_murabah_rate6_q=0;
        showBill6();
    }else{
        per_murabah_rate6_q=this.value;
        per_murabah_rate6Bill="";
        showBill6();

    }
    });
       document.getElementById("progress6").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            progress6Bill="";
            progress6_q=0;
            showBill6();
        }else{
            progress6_q=this.value;
            progress6Bill="";
            showBill6();

    }
    });
     document.getElementById("security_rate6").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            security_rate6Bill="";
            security_rate6_q=0;
            showBill6();
        }else{
            security_rate6_q=this.value;
            security_rate6Bill="";
            showBill6();

    }
    });


    function showBill6(){

        document.getElementById("total6").innerHTML = ((murabah_rate6*murabah_rate6_q*per_murabah_rate6*per_murabah_rate6_q*progress6*progress6_q*adaigi6*adaigi6_q)/100-security_rate6*security_rate6_q); // total amount
    }
    </script>
    {{-- 7th --}}
      <script>
    var murabah_rate7 = 1, per_murabah_rate7 = 1, progress7 = 1,adaigi7 = 1, security_rate7 = 1;

    var murabah_rate7_q=0, per_murabah_rate7_q = 0, progress7_q = 0,adaigi7_q = 0, security_rate7_q = 0;


    var murabah_rate7Bill="",per_murabah_rate7Bill="",progress7Bill="",adaigi7Bill="",security_rate7Bill="";

    var total_amount=0;

    document.getElementById("murabah_rate7").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_rate7Bill="";
        murabah_rate7_q=0;
        showBill7();
    }else{
        murabah_rate7_q=this.value;
        murabah_rate7Bill="";
        showBill7();

    }
    });
    document.getElementById("adaigi7").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        adaigi7Bill="";
        adaigi7_q=0;
        showBill7();
    }else{
        adaigi7_q=this.value;
        adaigi7Bill="";
        showBill7();

    }
    });
    document.getElementById("per_murabah_rate7").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        per_murabah_rate7Bill="";
        per_murabah_rate7_q=0;
        showBill7();
    }else{
        per_murabah_rate7_q=this.value;
        per_murabah_rate7Bill="";
        showBill7();

    }
    });
       document.getElementById("progress7").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            progress7Bill="";
            progress7_q=0;
            showBill7();
        }else{
            progress7_q=this.value;
            progress7Bill="";
            showBill7();

    }
    });
     document.getElementById("security_rate7").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            security_rate7Bill="";
            security_rate7_q=0;
            showBill7();
        }else{
            security_rate7_q=this.value;
            security_rate7Bill="";
            showBill7();

    }
    });


    function showBill7(){

        document.getElementById("total7").innerHTML = ((murabah_rate7*murabah_rate7_q*per_murabah_rate7*per_murabah_rate7_q*progress7*progress7_q*adaigi7*adaigi7_q)/100-security_rate7*security_rate7_q); // total amount
    }
    </script>
    {{-- 8th --}}
    <script>
    var murabah_rate8 = 1, per_murabah_rate8 = 1, progress8 = 1,adaigi8 = 1, security_rate8 = 1;

    var murabah_rate8_q=0, per_murabah_rate8_q = 0, progress8_q = 0,adaigi8_q = 0, security_rate8_q = 0;


    var murabah_rate8Bill="",per_murabah_rate8Bill="",progress8Bill="",adaigi8Bill="",security_rate8Bill="";

    var total_amount=0;

    document.getElementById("murabah_rate8").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_rate8Bill="";
        murabah_rate8_q=0;
        showBill8();
    }else{
        murabah_rate8_q=this.value;
        murabah_rate8Bill="";
        showBill8();

    }
    });
    document.getElementById("adaigi8").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        adaigi8Bill="";
        adaigi8_q=0;
        showBill8();
    }else{
        adaigi8_q=this.value;
        adaigi8Bill="";
        showBill8();

    }
    });
    document.getElementById("per_murabah_rate8").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        per_murabah_rate8Bill="";
        per_murabah_rate8_q=0;
        showBill8();
    }else{
        per_murabah_rate8_q=this.value;
        per_murabah_rate8Bill="";
        showBill8();

    }
    });
       document.getElementById("progress8").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            progress8Bill="";
            progress8_q=0;
            showBill8();
        }else{
            progress8_q=this.value;
            progress8Bill="";
            showBill8();

    }
    });
     document.getElementById("security_rate8").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            security_rate8Bill="";
            security_rate8_q=0;
            showBill8();
        }else{
            security_rate8_q=this.value;
            security_rate8Bill="";
            showBill8();

    }
    });


    function showBill8(){

        document.getElementById("total8").innerHTML = ((murabah_rate8*murabah_rate8_q*per_murabah_rate8*per_murabah_rate8_q*progress8*progress8_q*adaigi8*adaigi8_q)/100-security_rate8*security_rate8_q); // total amount
    }
    </script>
    {{-- 9th --}}
     <script>
    var murabah_rate9 = 1, per_murabah_rate9 = 1, progress9 = 1,adaigi9 = 1, security_rate9 = 1;

    var murabah_rate9_q=0, per_murabah_rate9_q = 0, progress9_q = 0,adaigi9_q = 0, security_rate9_q = 0;


    var murabah_rate9Bill="",per_murabah_rate9Bill="",progress9Bill="",adaigi9Bill="",security_rate9Bill="";

    var total_amount=0;

    document.getElementById("murabah_rate9").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_rate9Bill="";
        murabah_rate9_q=0;
        showBill9();
    }else{
        murabah_rate9_q=this.value;
        murabah_rate9Bill="";
        showBill9();

    }
    });
    document.getElementById("adaigi9").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        adaigi9Bill="";
        adaigi9_q=0;
        showBill9();
    }else{
        adaigi9_q=this.value;
        adaigi9Bill="";
        showBill9();

    }
    });
    document.getElementById("per_murabah_rate9").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        per_murabah_rate9Bill="";
        per_murabah_rate9_q=0;
        showBill9();
    }else{
        per_murabah_rate9_q=this.value;
        per_murabah_rate9Bill="";
        showBill9();

    }
    });
       document.getElementById("progress9").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            progress9Bill="";
            progress9_q=0;
            showBill9();
        }else{
            progress9_q=this.value;
            progress9Bill="";
            showBill9();

    }
    });
     document.getElementById("security_rate9").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            security_rate9Bill="";
            security_rate9_q=0;
            showBill9();
        }else{
            security_rate9_q=this.value;
            security_rate9Bill="";
            showBill9();

    }
    });


    function showBill9(){

        document.getElementById("total9").innerHTML = ((murabah_rate9*murabah_rate9_q*per_murabah_rate9*per_murabah_rate9_q*progress9*progress9_q*adaigi9*adaigi9_q)/100-security_rate9*security_rate9_q); // total amount
    }
    </script>


{{-- 10th --}}
  <script>
    var murabah_rate10 = 1, per_murabah_rate10 = 1, progress10 = 1,adaigi10 = 1, security_rate10 = 1;

    var murabah_rate10_q=0, per_murabah_rate10_q = 0, progress10_q = 0, adaigi10_q = 0, security_rate10_q = 0;


    var murabah_rate10Bill="",per_murabah_rate10Bill="",progress10Bill="",security_rate10Bill="";

    var total_amount=0;

    document.getElementById("murabah_rate10").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_rate10Bill="";
        murabah_rate10_q=0;
        showBill10();
    }else{
        murabah_rate10_q=this.value;
        murabah_rate10Bill="";
        showBill10();

    }
    });
    document.getElementById("adaigi10").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        adaigi10Bill="";
        adaigi10_q=0;
        showBill10();
    }else{
        adaigi10_q=this.value;
        adaigi10Bill="";
        showBill10();

    }
    });
    document.getElementById("per_murabah_rate10").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        per_murabah_rate10Bill="";
        per_murabah_rate10_q=0;
        showBill10();
    }else{
        per_murabah_rate10_q=this.value;
        per_murabah_rate10Bill="";
        showBill10();

    }
    });
       document.getElementById("progress10").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            progress10Bill="";
            progress10_q=0;
            showBill10();
        }else{
            progress10_q=this.value;
            progress10Bill="";
            showBill10();

    }
    });
     document.getElementById("security_rate10").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            security_rate10Bill="";
            security_rate10_q=0;
            showBill10();
        }else{
            security_rate10_q=this.value;
            security_rate10Bill="";
            showBill10();

    }
    });


    function showBill10(){

        document.getElementById("total10").innerHTML = ((murabah_rate10*murabah_rate10_q*per_murabah_rate10*per_murabah_rate10_q*progress10*progress10_q*adaigi10*adaigi10_q)/100-security_rate10*security_rate10_q); // total amount
    }
    </script>


    {{-- 11th --}}
    <script>
    var murabah_rate11 = 1, per_murabah_rate11 = 1, progress11 = 1, adaigi11 = 1, security_rate11 = 1;

    var murabah_rate11_q=0, per_murabah_rate11_q = 0, progress11_q = 0, adaigi11_q = 0,  security_rate11_q = 0;


    var murabah_rate11Bill="",per_murabah_rate11Bill="",progress11Bill="", adaigi11Bill="", security_rate11Bill="";

    var total_amount=0;

    document.getElementById("murabah_rate11").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_rate11Bill="";
        murabah_rate11_q=0;
        showBill11();
    }else{
        murabah_rate11_q=this.value;
        murabah_rate11Bill="";
        showBill11();

    }
    });
    document.getElementById("adaigi11").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        adaigi11Bill="";
        adaigi11_q=0;
        showBill11();
    }else{
        adaigi11q=this.value;
        adaigi11Bill="";
        showBill11();

    }
    });
    document.getElementById("per_murabah_rate11").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        per_murabah_rate11Bill="";
        per_murabah_rate11_q=0;
        showBill11();
    }else{
        per_murabah_rate11_q=this.value;
        per_murabah_rate11Bill="";
        showBill11();

    }
    });
       document.getElementById("progress11").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            progress11Bill="";
            progress11_q=0;
            showBill11();
        }else{
            progress11_q=this.value;
            progress11Bill="";
            showBill11();

    }
    });
     document.getElementById("security_rate11").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
            security_rate11Bill="";
            security_rate11_q=0;
            showBill11();
        }else{
            security_rate11_q=this.value;
            security_rate11Bill="";
            showBill11();

    }
    });


    // function showBill11(){

    //     document.getElementById("total11").innerHTML = ((murabah_rate10*murabah_rate10_q*per_murabah_rate10*per_murabah_rate10_q*progress10*progress10_q)/100-security_rate10*security_rate10_q); // total amount
    // }




    function showBill11(){
            document.getElementById("total11").innerHTML =
            (((murabah_rate1*murabah_rate1_q*per_murabah_rate1*per_murabah_rate1_q*progress1*progress1_q*adaigi1*adaigi1_q)/100-security_rate1*security_rate1_q))
            +(((murabah_rate2*murabah_rate2_q*per_murabah_rate2*per_murabah_rate2_q*progress2*progress2_q*adaigi2*adaigi2_q)/100-security_rate2*security_rate2_q))
            +(((murabah_rate3*murabah_rate3_q*per_murabah_rate3*per_murabah_rate3_q*progress3*progress3_q*adaigi3*adaigi3_q)/100-security_rate3*security_rate3_q))
            +(((murabah_rate4*murabah_rate4_q*per_murabah_rate4*per_murabah_rate4_q*progress4*progress4_q*adaigi4*adaigi4_q)/100-security_rate4*security_rate4_q))
            +(((murabah_rate5*murabah_rate5_q*per_murabah_rate5*per_murabah_rate5_q*progress5*progress5_q*adaigi5*adaigi5_q)/100-security_rate5*security_rate5_q))
            +(((murabah_rate6*murabah_rate6_q*per_murabah_rate6*per_murabah_rate6_q*progress6*progress6_q*adaigi6*adaigi6_q)/100-security_rate6*security_rate6_q))
            +(((murabah_rate7*murabah_rate7_q*per_murabah_rate7*per_murabah_rate7_q*progress7*progress7_q*adaigi7*adaigi7_q)/100-security_rate7*security_rate7_q))
            +(((murabah_rate8*murabah_rate8_q*per_murabah_rate8*per_murabah_rate8_q*progress8*progress8_q*adaigi8*adaigi8_q)/100-security_rate8*security_rate8_q))
            +(((murabah_rate9*murabah_rate9_q*per_murabah_rate9*per_murabah_rate9_q*progress9*progress9_q*adaigi9*adaigi9_q)/100-security_rate9*security_rate9_q))
            +(((murabah_rate10*murabah_rate10_q*per_murabah_rate10*per_murabah_rate10_q*progress10*progress10_q*adaigi10*adaigi10_q)/100-security_rate10*security_rate10_q));
            // +(((murabah_rate11*murabah_rate11_q*per_murabah_rate11*per_murabah_rate11_q*progress11*progress11_q)/100-security_rate11*security_rate11_q));


    }

    </script>
