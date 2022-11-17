<?php
use App\Http\Controllers\quater;


  $total=quater::cartItem_mistri();
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

			<div class="row">
            <h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong>   کیش میمو</strong></h4>
            <br>
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> بل لیبر سول ورکس بنام دفتر تحریک جدید</strong></h4>
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong>  مرمت دفاتر</strong></h4>
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


					{{-- <ul class="list-unstyled">
						<li style="font-size:18px;font-family: Jameel Noori;"><script>
								var today = new Date();
								var dd = String(today.getDate()).padStart(2, '0');
								var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
								var yyyy = today.getFullYear();
								today = dd + '/' + mm + '/' + yyyy;
								document.write(today);

						</script><strong style="text-align:center;font-size:18px;font-family: Jameel Noori;"> :تاریخ</strong> </li>
						<li style="font-size:18px;font-family: Jameel Noori;"><strong style="text-align:center;font-size:18px;font-family: Jameel Noori;"> دن:</strong> <script>
				var today = new Date();
				var day = today.getDay();
				var daylist = ["اتوار","سوموار","منگل","بدھ","جمعرات","جمعہ","ہفتہ"];
				document.write(" " +daylist[day]);
						</script></li>

					</ul> --}}

				</div>

			</div>
        <br>
     


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
                <table style="border: 1px solid black">
                    <tbody>

						<tr >
							<td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">ٹوٹل رقم</td>

							<td style="text-align: center;width: 50px;font-size:16px;font-family: Jameel Noori;">تفصیل</td>
							<td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">صرف یوم</td>
							<td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">مزدور ریٹ</td>
							<td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">صرف یوم</td>

							<td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">مستری ریٹ</td>
							 <td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">  دفتر کا نام</td>

							<td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">بروز</td>
							<td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">تاریخ</td>
							<td style="text-align: center;width: 10px;font-size:16px;font-family: Jameel Noori;">   نمبر شمار</td>



						</tr>

                        <tr>

                            <td dir="auto"><span id="total"></span></td>

                            <td dir="auto"><input type="text"  id="detail"></td>
                            <td dir="auto"><input type="text"  id="mazdur_days1"></td>
                            <td dir="auto"><input type="text"  id="mazdur_rate1"></td>
                            <td dir="auto"><input type="text"  id="mistri_days1"></td>
                            <td dir="auto"><input type="text"  id="mistri_rate1"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>


                            <td>1</td>

                        </tr>

                        <tr>

                            <td dir="auto"><span id="total2"></span></td>
                            <td dir="auto"><input type="text"  id="detail"></td>
                            <td dir="auto"><input type="text"  id="mazdur_days2"></td>
                            <td dir="auto"><input type="text"  id="mazdur_rate2"></td>
                            <td dir="auto"><input type="text"  id="mistri_days2"></td>
                            <td dir="auto"><input type="text"  id="mistri_rate2"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>2</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total3"></span></td>
                            <td dir="auto"><input type="text"  id="detail"></td>
                            <td dir="auto"><input type="text"  id="mazdur_days3"></td>
                            <td dir="auto"><input type="text"  id="mazdur_rate3"></td>
                            <td dir="auto"><input type="text"  id="mistri_days3"></td>
                            <td dir="auto"><input type="text"  id="mistri_rate3"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>3</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total4"></span></td>
                            <td dir="auto"><input type="text"  id="detail"></td>
                            <td dir="auto"><input type="text"  id="mazdur_days4"></td>
                            <td dir="auto"><input type="text"  id="mazdur_rate4"></td>
                            <td dir="auto"><input type="text"  id="mistri_days4"></td>
                            <td dir="auto"><input type="text"  id="mistri_rate4"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>4</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total5"></span></td>
                            <td dir="auto"><input type="text"  id="detail"></td>
                            <td dir="auto"><input type="text"  id="mazdur_days5"></td>
                            <td dir="auto"><input type="text"  id="mazdur_rate5"></td>
                            <td dir="auto"><input type="text"  id="mistri_days5"></td>
                            <td dir="auto"><input type="text"  id="mistri_rate5"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>5</td>

                        </tr>
                        <tr>
                            <td dir="auto"><span id="total6"></span></td>
                            <td dir="auto"><input type="text"  id="detail"></td>
                            <td dir="auto"><input type="text"  id="mazdur_days6"></td>
                            <td dir="auto"><input type="text"  id="mazdur_rate6"></td>
                            <td dir="auto"><input type="text"  id="mistri_days6"></td>
                            <td dir="auto"><input type="text"  id="mistri_rate6"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>6</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total7"></span></td>
                            <td dir="auto"><input type="text"  id="detail"></td>
                            <td dir="auto"><input type="text"  id="mazdur_days7"></td>
                            <td dir="auto"><input type="text"  id="mazdur_rate7"></td>
                            <td dir="auto"><input type="text"  id="mistri_days7"></td>
                            <td dir="auto"><input type="text"  id="mistri_rate7"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td>7</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total8"></span></td>
                            <td dir="auto"><input type="text"  id="detail"></td>
                            <td dir="auto"><input type="text"  id="mazdur_days8"></td>
                            <td dir="auto"><input type="text"  id="mazdur_rate8"></td>
                            <td dir="auto"><input type="text"  id="mistri_days8"></td>
                            <td dir="auto"><input type="text"  id="mistri_rate8"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>8</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total9"></span></td>
                            <td dir="auto"><input type="text"  id="detail"></td>
                            <td dir="auto"><input type="text"  id="mazdur_days9"></td>
                            <td dir="auto"><input type="text"  id="mazdur_rate9"></td>
                            <td dir="auto"><input type="text"  id="mistri_days9"></td>
                            <td dir="auto"><input type="text"  id="mistri_rate9"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>9</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total10"></span></td>
                            <td dir="auto"><input type="text"  id="detail"></td>
                            <td dir="auto"><input type="text"  id="mazdur_days10"></td>
                            <td dir="auto"><input type="text"  id="mazdur_rate10"></td>
                            <td dir="auto"><input type="text"  id="mistri_days10"></td>
                            <td dir="auto"><input type="text"  id="mistri_rate10"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>10</td>

                        </tr>
                        <tr>
                            <td><span id="total11"></span></td>
                            <td style="font-family: Jameel Noori;">میزان</td>
                            {{-- <td dir="auto"><input type="text"  id="detail"></td> --}}
                            <td dir="auto"><input type="text"  id="mazdur_days11"></td>
                            <td dir="auto"><input type="text"  id="mazdur_rate11"></td>
                            <td dir="auto"><input type="text"  id="mistri_days11"></td>
                            <td dir="auto"><input type="text"  id="mistri_rate11"></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td></td>

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
<table style="border:1px black; ">
    <tr>
        <th style="text-align:left;font-size:18px;font-family: Jameel Noori;border: #fff;"><input  style="width: 230px; height:30px; border:#fff; border-bottom: 1px solid black; text-align:center" type="text"  dir="rtl"><strong>  : نام مع تاریخ ودستخط
 </table>
 <table style="border:1px black; ">
    <tr>
        <th style="text-align:left;font-size:18px;font-family: Jameel Noori;border: #fff;"><input  style="width: 230px; height:30px; border:#fff; border-bottom: 1px solid black; text-align:center" type="text"  dir="auto"><strong>  :فون نمبر </strong></th>
 </table>
 <table style="border:1px black; ">
    <tr>
        <th style="text-align:left;font-size:18px;font-family: Jameel Noori;border: #fff;"><input  style="width: 230px; height:30px; border:#fff; border-bottom: 1px solid black; text-align:center" type="text"  dir="auto"><strong>  :ایڈریس </strong></th>
 </table>

        <!-- <table style="border: #fff">
            <tr>
             <th style="text-align:left;font-size:18px;font-family: Jameel Noori;border: #fff;"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>دستخط نگران مرمت:</strong> ۔۔۔۔۔۔۔۔۔۔۔۔۔۔ </th>
            <br>
            <th style="text-align:right;font-size:18px;font-family: Jameel Noori;border: #fff;"> <strong> دستخط محرر: </strong> ۔۔۔۔۔۔۔۔۔۔۔۔۔۔</th>


            </tr>
            <tr>

            <th style="text-align:left;font-size:18px;font-family: Jameel Noori;border: #fff;"><strong>دستخط وکیل المال ثالث:</strong> ۔۔۔۔۔۔۔۔۔۔۔۔۔۔</th>
            <br>
            <th style="text-align:right;font-size:18px;font-family: Jameel Noori;border: #fff;"><strong> دستخط اوورسیئر: </strong> ۔۔۔۔۔۔۔۔۔۔۔۔۔۔ &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>

            </tr>
            </table> -->
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
    var mistri_rate1 = 1, mazdur_rate1 = 1, mistri_days1 = 1, mazdur_days1 = 1;

    var mistri_rate1_q=0, mazdur_rate1_q=0,  mistri_days1_q = 0, mazdur_days1_q = 0;


    var mistri_rate1Bill="",mazdur_rate1Bill="",mistri_days1Bill="",mazdur_days1Bill="";

    var total_amount=0;

    document.getElementById("mistri_rate1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        mistri_rate1Bill="";
        mistri_rate1_q=0;
        showBill();
    }else{
        mistri_rate1_q=this.value;
        mistri_rate1Bill="";
        showBill();

    }
    });
    document.getElementById("mazdur_rate1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        mazdur_rate1Bill="";
        mazdur_rate1_q=0;
        showBill();
    }else{
        mazdur_rate1_q=this.value;
        mazdur_rate1Bill="";
        showBill();

    }
    });
    document.getElementById("mistri_days1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        mistri_days1Bill="";
        mistri_days1_q=0;
        showBill();
    }else{
        mistri_days1_q=this.value;
        mistri_days1Bill="";
        showBill();

    }
    });
    document.getElementById("mazdur_days1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        mazdur_days1Bill="";
        mazdur_days1_q=0;
        showBill();
    }else{
        mazdur_days1_q=this.value;
        mazdur_days1Bill="";
        showBill();

    }
    });


    function showBill(){

        document.getElementById("total").innerHTML = (mistri_rate1*mistri_rate1_q*mistri_days1*mistri_days1_q)+(mazdur_rate1*mazdur_rate1_q*mazdur_days1*mazdur_days1_q); // total amount
    }
    </script>

    {{-- 2nd --}}

    <script>
        var mistri_rate2 = 1, mazdur_rate2 = 1, mistri_days2 = 1, mazdur_days2 = 1;

        var mistri_rate2_q=0, mazdur_rate2_q=0,  mistri_days2_q = 0, mazdur_days2_q = 0;


        var mistri_rate2Bill="",mazdur_rate2Bill="",mistri_days2Bill="",mazdur_days2Bill="";

        var total_amount=0;

        document.getElementById("mistri_rate2").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_rate2Bill="";
            mistri_rate2_q=0;
            showBill2();
        }else{
            mistri_rate2_q=this.value;
            mistri_rate2Bill="";
            showBill2();

        }
        });
        document.getElementById("mazdur_rate2").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_rate2Bill="";
            mazdur_rate2_q=0;
            showBill2();
        }else{
            mazdur_rate2_q=this.value;
            mazdur_rate2Bill="";
            showBill2();

        }
        });
        document.getElementById("mistri_days2").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_days2Bill="";
            mistri_days2_q=0;
            showBill2();
        }else{
            mistri_days2_q=this.value;
            mistri_days2Bill="";
            showBill2();

        }
        });
        document.getElementById("mazdur_days2").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_days2Bill="";
            mazdur_days2_q=0;
            showBill2();
        }else{
            mazdur_days2_q=this.value;
            mazdur_days2Bill="";
            showBill2();

        }
        });


        function showBill2(){

            document.getElementById("total2").innerHTML = (mistri_rate2*mistri_rate2_q*mistri_days2*mistri_days2_q)+(mazdur_rate2*mazdur_rate2_q*mazdur_days2*mazdur_days2_q); // total amount
        }
        </script>
    {{-- 3rd --}}

    <script>
        var mistri_rate3 = 1, mazdur_rate3 = 1, mistri_days3 = 1, mazdur_days3 = 1;

        var mistri_rate3_q=0, mazdur_rate3_q=0,  mistri_days3_q = 0, mazdur_days3_q = 0;


        var mistri_rate3Bill="",mazdur_rate3Bill="",mistri_days3Bill="",mazdur_days3Bill="";

        var total_amount=0;

        document.getElementById("mistri_rate3").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_rate3Bill="";
            mistri_rate3_q=0;
            showBill3();
        }else{
            mistri_rate3_q=this.value;
            mistri_rate3Bill="";
            showBill3();

        }
        });
        document.getElementById("mazdur_rate3").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_rate3Bill="";
            mazdur_rate3_q=0;
            showBill3();
        }else{
            mazdur_rate3_q=this.value;
            mazdur_rate3Bill="";
            showBill3();

        }
        });
        document.getElementById("mistri_days3").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_days3Bill="";
            mistri_days3_q=0;
            showBill3();
        }else{
            mistri_days3_q=this.value;
            mistri_days3Bill="";
            showBill3();

        }
        });
        document.getElementById("mazdur_days3").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_days3Bill="";
            mazdur_days3_q=0;
            showBill3();
        }else{
            mazdur_days3_q=this.value;
            mazdur_days3Bill="";
            showBill3();

        }
        });


        function showBill3(){

            document.getElementById("total3").innerHTML = (mistri_rate3*mistri_rate3_q*mistri_days3*mistri_days3_q)+(mazdur_rate3*mazdur_rate3_q*mazdur_days3*mazdur_days3_q); // total amount
        }
        </script>
    {{-- 4th --}}

    <script>
        var mistri_rate4 = 1, mazdur_rate4 = 1, mistri_days4 = 1, mazdur_days4 = 1;

        var mistri_rate4_q=0, mazdur_rate4_q=0,  mistri_days4_q = 0, mazdur_days4_q = 0;


        var mistri_rate4Bill="",mazdur_rate4Bill="",mistri_days4Bill="",mazdur_days4Bill="";

        var total_amount=0;

        document.getElementById("mistri_rate4").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_rate4Bill="";
            mistri_rate4_q=0;
            showBill4();
        }else{
            mistri_rate4_q=this.value;
            mistri_rate4Bill="";
            showBill4();

        }
        });
        document.getElementById("mazdur_rate4").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_rate4Bill="";
            mazdur_rate4_q=0;
            showBill4();
        }else{
            mazdur_rate4_q=this.value;
            mazdur_rate4Bill="";
            showBill4();

        }
        });
        document.getElementById("mistri_days4").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_days4Bill="";
            mistri_days4_q=0;
            showBill4();
        }else{
            mistri_days4_q=this.value;
            mistri_days4Bill="";
            showBill4();

        }
        });
        document.getElementById("mazdur_days4").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_days4Bill="";
            mazdur_days4_q=0;
            showBill4();
        }else{
            mazdur_days4_q=this.value;
            mazdur_days4Bill="";
            showBill4();

        }
        });


        function showBill4(){

            document.getElementById("total4").innerHTML = (mistri_rate4*mistri_rate4_q*mistri_days4*mistri_days4_q)+(mazdur_rate4*mazdur_rate4_q*mazdur_days4*mazdur_days4_q); // total amount
        }
        </script>
    {{-- 5th --}}
    <script>
        var mistri_rate5 = 1, mazdur_rate5 = 1, mistri_days5 = 1, mazdur_days5 = 1;

        var mistri_rate5_q=0, mazdur_rate5_q=0,  mistri_days5_q = 0, mazdur_days5_q = 0;


        var mistri_rate5Bill="",mazdur_rate5Bill="",mistri_days5Bill="",mazdur_days5Bill="";

        var total_amount=0;

        document.getElementById("mistri_rate5").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_rate5Bill="";
            mistri_rate5_q=0;
            showBill5();
        }else{
            mistri_rate5_q=this.value;
            mistri_rate5Bill="";
            showBill5();

        }
        });
        document.getElementById("mazdur_rate5").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_rate5Bill="";
            mazdur_rate5_q=0;
            showBill5();
        }else{
            mazdur_rate5_q=this.value;
            mazdur_rate5Bill="";
            showBill5();

        }
        });
        document.getElementById("mistri_days5").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_days5Bill="";
            mistri_days5_q=0;
            showBill5();
        }else{
            mistri_days5_q=this.value;
            mistri_days5Bill="";
            showBill5();

        }
        });
        document.getElementById("mazdur_days5").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_days5Bill="";
            mazdur_days5_q=0;
            showBill5();
        }else{
            mazdur_days5_q=this.value;
            mazdur_days5Bill="";
            showBill5();

        }
        });


        function showBill5(){

            document.getElementById("total5").innerHTML = (mistri_rate5*mistri_rate5_q*mistri_days5*mistri_days5_q)+(mazdur_rate5*mazdur_rate5_q*mazdur_days5*mazdur_days5_q); // total amount
        }
        </script>
    {{-- 6th --}}
    <script>
        var mistri_rate6 = 1, mazdur_rate6 = 1, mistri_days6 = 1, mazdur_days6 = 1;

        var mistri_rate6_q=0, mazdur_rate6_q=0,  mistri_days6_q = 0, mazdur_days6_q = 0;


        var mistri_rate6Bill="",mazdur_rate6Bill="",mistri_days6Bill="",mazdur_days6Bill="";

        var total_amount=0;

        document.getElementById("mistri_rate6").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_rate6Bill="";
            mistri_rate6_q=0;
            showBill6();
        }else{
            mistri_rate6_q=this.value;
            mistri_rate6Bill="";
            showBill6();

        }
        });
        document.getElementById("mazdur_rate6").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_rate6Bill="";
            mazdur_rate6_q=0;
            showBill6();
        }else{
            mazdur_rate6_q=this.value;
            mazdur_rate6Bill="";
            showBill6();

        }
        });
        document.getElementById("mistri_days6").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_days6Bill="";
            mistri_days6_q=0;
            showBill6();
        }else{
            mistri_days6_q=this.value;
            mistri_days6Bill="";
            showBill6();

        }
        });
        document.getElementById("mazdur_days6").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_days6Bill="";
            mazdur_days6_q=0;
            showBill6();
        }else{
            mazdur_days6_q=this.value;
            mazdur_days6Bill="";
            showBill6();

        }
        });


        function showBill6(){

            document.getElementById("total6").innerHTML = (mistri_rate6*mistri_rate6_q*mistri_days6*mistri_days6_q)+(mazdur_rate6*mazdur_rate6_q*mazdur_days6*mazdur_days6_q); // total amount
        }
        </script>
    {{-- 7th --}}
    <script>
        var mistri_rate7 = 1, mazdur_rate7 = 1, mistri_days7 = 1, mazdur_days7 = 1;

        var mistri_rate7_q=0, mazdur_rate7_q=0,  mistri_days7_q = 0, mazdur_days7_q = 0;


        var mistri_rate7Bill="",mazdur_rate7Bill="",mistri_days7Bill="",mazdur_days7Bill="";

        var total_amount=0;

        document.getElementById("mistri_rate7").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_rate7Bill="";
            mistri_rate7_q=0;
            showBill7();
        }else{
            mistri_rate7_q=this.value;
            mistri_rate7Bill="";
            showBill7();

        }
        });
        document.getElementById("mazdur_rate7").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_rate7Bill="";
            mazdur_rate7_q=0;
            showBill7();
        }else{
            mazdur_rate7_q=this.value;
            mazdur_rate7Bill="";
            showBill7();

        }
        });
        document.getElementById("mistri_days7").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_days7Bill="";
            mistri_days7_q=0;
            showBill7();
        }else{
            mistri_days7_q=this.value;
            mistri_days7Bill="";
            showBill7();

        }
        });
        document.getElementById("mazdur_days7").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_days7Bill="";
            mazdur_days7_q=0;
            showBill7();
        }else{
            mazdur_days7_q=this.value;
            mazdur_days7Bill="";
            showBill7();

        }
        });


        function showBill7(){

            document.getElementById("total7").innerHTML = (mistri_rate7*mistri_rate7_q*mistri_days7*mistri_days7_q)+(mazdur_rate7*mazdur_rate7_q*mazdur_days7*mazdur_days7_q); // total amount
        }
        </script>
    {{-- 8th --}}
    <script>
        var mistri_rate8 = 1, mazdur_rate8 = 1, mistri_days8 = 1, mazdur_days8 = 1;

        var mistri_rate8_q=0, mazdur_rate8_q=0,  mistri_days8_q = 0, mazdur_days8_q = 0;


        var mistri_rate8Bill="",mazdur_rate8Bill="",mistri_days8Bill="",mazdur_days8Bill="";

        var total_amount=0;

        document.getElementById("mistri_rate8").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_rate8Bill="";
            mistri_rate8_q=0;
            showBill8();
        }else{
            mistri_rate8_q=this.value;
            mistri_rate8Bill="";
            showBill8();

        }
        });
        document.getElementById("mazdur_rate8").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_rate8Bill="";
            mazdur_rate8_q=0;
            showBill8();
        }else{
            mazdur_rate8_q=this.value;
            mazdur_rate8Bill="";
            showBill8();

        }
        });
        document.getElementById("mistri_days8").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_days8Bill="";
            mistri_days8_q=0;
            showBill8();
        }else{
            mistri_days8_q=this.value;
            mistri_days8Bill="";
            showBill8();

        }
        });
        document.getElementById("mazdur_days8").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_days8Bill="";
            mazdur_days8_q=0;
            showBill8();
        }else{
            mazdur_days8_q=this.value;
            mazdur_days8Bill="";
            showBill8();

        }
        });


        function showBill8(){

            document.getElementById("total8").innerHTML = (mistri_rate8*mistri_rate8_q*mistri_days8*mistri_days8_q)+(mazdur_rate8*mazdur_rate8_q*mazdur_days8*mazdur_days8_q); // total amount
        }
        </script>
    {{-- 9th --}}
    <script>
        var mistri_rate9 = 1, mazdur_rate9 = 1, mistri_days9 = 1, mazdur_days9 = 1;

        var mistri_rate9_q=0, mazdur_rate9_q=0,  mistri_days9_q = 0, mazdur_days9_q = 0;


        var mistri_rate9Bill="",mazdur_rate9Bill="",mistri_days9Bill="",mazdur_days9Bill="";

        var total_amount=0;

        document.getElementById("mistri_rate9").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_rate9Bill="";
            mistri_rate9_q=0;
            showBill9();
        }else{
            mistri_rate9_q=this.value;
            mistri_rate9Bill="";
            showBill9();

        }
        });
        document.getElementById("mazdur_rate9").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_rate9Bill="";
            mazdur_rate9_q=0;
            showBill9();
        }else{
            mazdur_rate9_q=this.value;
            mazdur_rate9Bill="";
            showBill9();

        }
        });
        document.getElementById("mistri_days9").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_days9Bill="";
            mistri_days9_q=0;
            showBill9();
        }else{
            mistri_days9_q=this.value;
            mistri_days9Bill="";
            showBill9();

        }
        });
        document.getElementById("mazdur_days9").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_days9Bill="";
            mazdur_days9_q=0;
            showBill9();
        }else{
            mazdur_days9_q=this.value;
            mazdur_days9Bill="";
            showBill9();

        }
        });


        function showBill9(){

            document.getElementById("total9").innerHTML = (mistri_rate9*mistri_rate9_q*mistri_days9*mistri_days9_q)+(mazdur_rate9*mazdur_rate9_q*mazdur_days9*mazdur_days9_q); // total amount
        }
        </script>
    {{-- 10th --}}
    <script>
        var mistri_rate10 = 1, mazdur_rate10 = 1, mistri_days10 = 1, mazdur_days10 = 1;

        var mistri_rate10_q=0, mazdur_rate10_q=0,  mistri_days10_q = 0, mazdur_days10_q = 0;


        var mistri_rate10Bill="",mazdur_rate10Bill="",mistri_days10Bill="",mazdur_days10Bill="";

        var total_amount=0;

        document.getElementById("mistri_rate10").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_rate10Bill="";
            mistri_rate10_q=0;
            showBill10();
        }else{
            mistri_rate10_q=this.value;
            mistri_rate10Bill="";
            showBill10();

        }
        });
        document.getElementById("mazdur_rate10").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_rate10Bill="";
            mazdur_rate10_q=0;
            showBill10();
        }else{
            mazdur_rate10_q=this.value;
            mazdur_rate10Bill="";
            showBill10();

        }
        });
        document.getElementById("mistri_days10").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_days10Bill="";
            mistri_days10_q=0;
            showBill10();
        }else{
            mistri_days10_q=this.value;
            mistri_days10Bill="";
            showBill10();

        }
        });
        document.getElementById("mazdur_days10").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_days10Bill="";
            mazdur_days10_q=0;
            showBill10();
        }else{
            mazdur_days10_q=this.value;
            mazdur_days10Bill="";
            showBill10();

        }
        });


        function showBill10(){

            document.getElementById("total10").innerHTML = (mistri_rate10*mistri_rate10_q*mistri_days10*mistri_days10_q)+(mazdur_rate10*mazdur_rate10_q*mazdur_days10*mazdur_days10_q); // total amount
        }
        </script>
    {{-- 11th --}}
    <script>
        var mistri_rate11 = 1, mazdur_rate11 = 1, mistri_days11 = 1, mazdur_days11 = 1;

        var mistri_rate11_q=0, mazdur_rate11_q=0,  mistri_days11_q = 0, mazdur_days11_q = 0;


        var mistri_rate11Bill="",mazdur_rate11Bill="",mistri_days11Bill="",mazdur_days11Bill="";

        var total_amount=0;

        document.getElementById("mistri_rate11").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_rate11Bill="";
            mistri_rate11_q=0;
            showBill11();
        }else{
            mistri_rate11_q=this.value;
            mistri_rate11Bill="";
            showBill11();

        }
        });
        document.getElementById("mazdur_rate11").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_rate11Bill="";
            mazdur_rate11_q=0;
            showBill11();
        }else{
            mazdur_rate11_q=this.value;
            mazdur_rate11Bill="";
            showBill11();

        }
        });
        document.getElementById("mistri_days11").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mistri_days11Bill="";
            mistri_days11_q=0;
            showBill11();
        }else{
            mistri_days11_q=this.value;
            mistri_days11Bill="";
            showBill11();

        }
        });
        document.getElementById("mazdur_days11").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            mazdur_days11Bill="";
            mazdur_days11_q=0;
            showBill11();
        }else{
            mazdur_days11_q=this.value;
            mazdur_days11Bill="";
            showBill11();

        }
        });




    function showBill11(){
            document.getElementById("total11").innerHTML =
            (mistri_rate1*mistri_rate1_q*mistri_days1*mistri_days1_q)+(mazdur_rate1*mazdur_rate1_q*mazdur_days1*mazdur_days1_q)
            +(mistri_rate2*mistri_rate2_q*mistri_days2*mistri_days2_q)+(mazdur_rate2*mazdur_rate2_q*mazdur_days2*mazdur_days2_q)
            +(mistri_rate3*mistri_rate3_q*mistri_days3*mistri_days3_q)+(mazdur_rate3*mazdur_rate3_q*mazdur_days3*mazdur_days3_q)
            +(mistri_rate4*mistri_rate4_q*mistri_days4*mistri_days4_q)+(mazdur_rate4*mazdur_rate4_q*mazdur_days4*mazdur_days4_q)
            +(mistri_rate5*mistri_rate5_q*mistri_days5*mistri_days5_q)+(mazdur_rate5*mazdur_rate5_q*mazdur_days5*mazdur_days5_q)
            +(mistri_rate6*mistri_rate6_q*mistri_days6*mistri_days6_q)+(mazdur_rate6*mazdur_rate6_q*mazdur_days6*mazdur_days6_q)
            +(mistri_rate7*mistri_rate7_q*mistri_days7*mistri_days7_q)+(mazdur_rate7*mazdur_rate7_q*mazdur_days7*mazdur_days7_q)
            +(mistri_rate8*mistri_rate8_q*mistri_days8*mistri_days8_q)+(mazdur_rate8*mazdur_rate8_q*mazdur_days8*mazdur_days8_q)
            +(mistri_rate9*mistri_rate9_q*mistri_days9*mistri_days9_q)+(mazdur_rate9*mazdur_rate9_q*mazdur_days9*mazdur_days9_q)
            +(mistri_rate10*mistri_rate10_q*mistri_days10*mistri_days10_q)+(mazdur_rate10*mazdur_rate10_q*mazdur_days10*mazdur_days10_q)
            +(mistri_rate11*mistri_rate11_q*mistri_days11*mistri_days11_q)+(mazdur_rate11*mazdur_rate11_q*mazdur_days11*mazdur_days11_q);


    }

    </script>
