

 <?php
 use App\Http\Controllers\quater;


   $total=quater::cartItem_marbel();

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

			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> بل ماربل اینڈ چپس کیمیکل پالش بنام دفتر تحریک جدید</strong></h4>
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> مرمت دفاتر</strong></h4>
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
                        <table style="border: 1px solid black">
                            <tbody>
                                <tr>

                                    <td style="text-align: center;width: 20px;font-size:16px;font-family: Jameel Noori;">ٹوٹل رقم</td>
                                    <td style="text-align: center;width: 20px;font-size:16px;font-family: Jameel Noori;">صرف یوم</td>
                                    <td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">ریٹ  بوری</td>
                                    <td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">ریٹ فی بوری</td>
                                    <td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">تعداد</td>
                                    <td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">سائز</td>
                                    <td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">رنگ</td>
                                    <td style="text-align: center;width: 70px;font-size:16px;font-family: Jameel Noori;">تفصیل</td>
                                    <td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">اسٹور کا نام</td>
                                    <td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">دفتر کا نام</td>

                                    <td style="text-align: center;width: 40px;font-size:16px;font-family: Jameel Noori;">تاریخ</td>
                                    <td style="text-align: center;width: 10px;font-size:16px;font-family: Jameel Noori;">نمبر شمار</td>

                                  </tr>
                        <tr>

                            <td dir="auto"><span id="total"></span></td>

                            <td dir="auto"><input type="text"  id="days1"></td>
                            <td dir="auto"><span id="total_bags"></span></td>
                            <td dir="auto"><input type="text"  id="rate_per_bag1"></td>
                            <td dir="auto"><input type="text"  id="amount1"></td>
                            <td dir="auto"><input type="text"  id="size1"></td>
                            <td dir="auto"><input type="text"  id="color1" ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>


                            <td>1</td>

                        </tr>

                        <tr>

                            <td dir="auto"><span id="total2"></span></td>
                            <td dir="auto"><input type="text"  id="days2"></td>
                            <td dir="auto"><span id="total_bags2"></span></td>
                            <td dir="auto"><input type="text"  id="rate_per_bag2"></td>
                            <td dir="auto"><input type="text"  id="amount2"></td>
                            <td dir="auto"><input type="text"  id="size2"></td>
                            <td dir="auto"><input type="text"  id="color2" ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>2</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total3"></span></td>
                            <td dir="auto"><input type="text"  id="days3"></td>
                            <td dir="auto"><span id="total_bags3"></span></td>
                            <td dir="auto"><input type="text"  id="rate_per_bag3"></td>
                            <td dir="auto"><input type="text"  id="amount3"></td>
                            <td dir="auto"><input type="text"  id="size3"></td>
                            <td dir="auto"><input type="text"  id="color3" ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>


                            <td>3</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total4"></span></td>
                            <td dir="auto"><input type="text"  id="days4"></td>
                            <td dir="auto"><span id="total_bags4"></span></td>
                            <td dir="auto"><input type="text"  id="rate_per_bag4"></td>
                            <td dir="auto"><input type="text"  id="amount4"></td>
                            <td dir="auto"><input type="text"  id="size4"></td>
                            <td dir="auto"><input type="text"  id="color4" ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>


                            <td>4</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total5"></span></td>
                            <td dir="auto"><input type="text"  id="days5"></td>
                            <td dir="auto"><span id="total_bags5"></span></td>
                            <td dir="auto"><input type="text"  id="rate_per_bag5"></td>
                            <td dir="auto"><input type="text"  id="amount5"></td>
                            <td dir="auto"><input type="text"  id="size5"></td>
                            <td dir="auto"><input type="text"  id="color5" ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>5</td>

                        </tr>
                        <tr>
                            <td dir="auto"><span id="total6"></span></td>
                            <td dir="auto"><input type="text"  id="days6"></td>
                            <td dir="auto"><span id="total_bags6"></span></td>
                            <td dir="auto"><input type="text"  id="rate_per_bag6"></td>
                            <td dir="auto"><input type="text"  id="amount6"></td>
                            <td dir="auto"><input type="text"  id="size6"></td>
                            <td dir="auto"><input type="text"  id="color6" ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>


                            <td>6</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total7"></span></td>
                            <td dir="auto"><input type="text"  id="days7"></td>
                            <td dir="auto"><span id="total_bags7"></span></td>
                            <td dir="auto"><input type="text"  id="rate_per_bag7"></td>
                            <td dir="auto"><input type="text"  id="amount7"></td>
                            <td dir="auto"><input type="text"  id="size7"></td>
                            <td dir="auto"><input type="text"  id="color7" ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>7</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total8"></span></td>
                            <td dir="auto"><input type="text"  id="days8"></td>
                            <td dir="auto"><span id="total_bags8"></span></td>
                            <td dir="auto"><input type="text"  id="rate_per_bag8"></td>
                            <td dir="auto"><input type="text"  id="amount8"></td>
                            <td dir="auto"><input type="text"  id="size8"></td>
                            <td dir="auto"><input type="text"  id="color8" ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>8</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total9"></span></td>
                            <td dir="auto"><input type="text"  id="days9"></td>
                            <td dir="auto"><span id="total_bags9"></span></td>
                            <td dir="auto"><input type="text"  id="rate_per_bag9"></td>
                            <td dir="auto"><input type="text"  id="amount9"></td>
                            <td dir="auto"><input type="text"  id="size9"></td>
                            <td dir="auto"><input type="text"  id="color9" ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>9</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total10"></span></td>
                            <td dir="auto"><input type="text"  id="days10"></td>
                            <td dir="auto"><span id="total_bags10"></span></td>
                            <td dir="auto"><input type="text"  id="rate_per_bag10"></td>
                            <td dir="auto"><input type="text"  id="amount10"></td>
                            <td dir="auto"><input type="text"  id="size10"></td>
                            <td dir="auto"><input type="text"  id="color10" ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>


                            <td>10</td>

                        </tr>
                        <tr>
                            <td><span id="total11"></span></td>
                            <td style="font-family: Jameel Noori;">میزان</td>
                            <td dir="auto"><span id="total_bags11"></span></td>

                            <td dir="auto"><input type="text"  id="amount11"></td>
                            <td dir="auto"><input type="text"  id="size11"></td>
                            <td dir="auto"><input type="text"  id="color11" ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td></td>
                            <td></td>
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
    var size1 = 1, amount1 = 1, days1 = 1, rate_per_bag1 = 1;

    var size1_q=0, amount1_q=0,  days1_q = 0, rate_per_bag1_q = 0;


    var size1Bill="",amount1Bill="",days1Bill="",rate_per_bag1Bill="";

    var total_amount=0;

    document.getElementById("size1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        size1Bill="";
        size1_q=0;
        showBill();
    }else{
        size1_q=this.value;
        size1Bill="";
        showBill();

    }
    });
    document.getElementById("amount1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        amount1Bill="";
        amount1_q=0;
        showBill();
    }else{
        amount1_q=this.value;
        amount1Bill="";
        showBill();

    }
    });
    document.getElementById("days1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        days1Bill="";
        days1_q=0;
        showBill();
    }else{
        days1_q=this.value;
        days1Bill="";
        showBill();

    }
    });
    document.getElementById("rate_per_bag1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate_per_bag1Bill="";
        rate_per_bag1_q=0;
        showBill();
    }else{
        rate_per_bag1_q=this.value;
        rate_per_bag1Bill="";
        showBill();

    }
    });


    function showBill(){
        document.getElementById("total_bags").innerHTML = (size1*size1_q*amount1*amount1_q*rate_per_bag1*rate_per_bag1_q);

        document.getElementById("total").innerHTML = (size1*size1_q*amount1*amount1_q*days1*days1_q*rate_per_bag1*rate_per_bag1_q);
    }
    </script>

    {{-- 2nd --}}

    <script>
        var size2 = 1, amount2 = 1, days2 = 1, rate_per_bag2 = 1;

        var size2_q=0, amount2_q=0,  days2_q = 0, rate_per_bag2_q = 0;


        var size2Bill="",amount2Bill="",days2Bill="",rate_per_bag2Bill="";

        var total_amount=0;

        document.getElementById("size2").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            size2Bill="";
            size2_q=0;
            showBill2();
        }else{
            size2_q=this.value;
            size2Bill="";
            showBill2();

        }
        });
        document.getElementById("amount2").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            amount2Bill="";
            amount2_q=0;
            showBill2();
        }else{
            amount2_q=this.value;
            amount2Bill="";
            showBill2();

        }
        });
        document.getElementById("days2").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            days2Bill="";
            days2_q=0;
            showBill2();
        }else{
            days2_q=this.value;
            days2Bill="";
            showBill2();

        }
        });
        document.getElementById("rate_per_bag2").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rate_per_bag2Bill="";
            rate_per_bag2_q=0;
            showBill2();
        }else{
            rate_per_bag2_q=this.value;
            rate_per_bag2Bill="";
            showBill2();

        }
        });


        function showBill2(){
            document.getElementById("total_bags2").innerHTML = (size2*size2_q*amount2*amount2_q*rate_per_bag2*rate_per_bag2_q);

            document.getElementById("total2").innerHTML = (size2*size2_q*amount2*amount2_q*days2*days2_q*rate_per_bag2*rate_per_bag2_q);
        }
        </script>
    {{-- 3rd --}}

    <script>
        var size3 = 1, amount3 = 1, days3 = 1, rate_per_bag3 = 1;

        var size3_q=0, amount3_q=0,  days3_q = 0, rate_per_bag3_q = 0;


        var size3Bill="",amount3Bill="",days3Bill="",rate_per_bag3Bill="";

        var total_amount=0;

        document.getElementById("size3").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            size3Bill="";
            size3_q=0;
            showBill3();
        }else{
            size3_q=this.value;
            size3Bill="";
            showBill3();

        }
        });
        document.getElementById("amount3").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            amount3Bill="";
            amount3_q=0;
            showBill3();
        }else{
            amount3_q=this.value;
            amount3Bill="";
            showBill3();

        }
        });
        document.getElementById("days3").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            days3Bill="";
            days3_q=0;
            showBill3();
        }else{
            days3_q=this.value;
            days3Bill="";
            showBill3();

        }
        });
        document.getElementById("rate_per_bag3").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rate_per_bag3Bill="";
            rate_per_bag3_q=0;
            showBill3();
        }else{
            rate_per_bag3_q=this.value;
            rate_per_bag3Bill="";
            showBill3();

        }
        });


        function showBill3(){
            document.getElementById("total_bags3").innerHTML = (size3*size3_q*amount3*amount3_q*rate_per_bag3*rate_per_bag3_q);

            document.getElementById("total3").innerHTML = (size3*size3_q*amount3*amount3_q*days3*days3_q*rate_per_bag3*rate_per_bag3_q);
        }
        </script>
    {{-- 4th --}}

    <script>
        var size4 = 1, amount4 = 1, days4 = 1, rate_per_bag4 = 1;

        var size4_q=0, amount4_q=0,  days4_q = 0, rate_per_bag4_q = 0;


        var size4Bill="",amount4Bill="",days4Bill="",rate_per_bag4Bill="";

        var total_amount=0;

        document.getElementById("size4").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            size4Bill="";
            size4_q=0;
            showBill4();
        }else{
            size4_q=this.value;
            size4Bill="";
            showBill4();

        }
        });
        document.getElementById("amount4").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            amount4Bill="";
            amount4_q=0;
            showBill4();
        }else{
            amount4_q=this.value;
            amount4Bill="";
            showBill4();

        }
        });
        document.getElementById("days4").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            days4Bill="";
            days4_q=0;
            showBill4();
        }else{
            days4_q=this.value;
            days4Bill="";
            showBill4();

        }
        });
        document.getElementById("rate_per_bag4").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rate_per_bag4Bill="";
            rate_per_bag4_q=0;
            showBill4();
        }else{
            rate_per_bag4_q=this.value;
            rate_per_bag4Bill="";
            showBill4();

        }
        });


        function showBill4(){
            document.getElementById("total_bags4").innerHTML = (size4*size4_q*amount4*amount4_q*rate_per_bag4*rate_per_bag4_q);

            document.getElementById("total4").innerHTML = (size4*size4_q*amount4*amount4_q*days4*days4_q*rate_per_bag4*rate_per_bag4_q);
        }
        </script>
    {{-- 5th --}}
    <script>
        var size5 = 1, amount5 = 1, days5 = 1, rate_per_bag5 = 1;

        var size5_q=0, amount5_q=0,  days5_q = 0, rate_per_bag5_q = 0;


        var size5Bill="",amount5Bill="",days5Bill="",rate_per_bag5Bill="";

        var total_amount=0;

        document.getElementById("size5").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            size5Bill="";
            size5_q=0;
            showBill5();
        }else{
            size5_q=this.value;
            size5Bill="";
            showBill5();

        }
        });
        document.getElementById("amount5").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            amount5Bill="";
            amount5_q=0;
            showBill5();
        }else{
            amount5_q=this.value;
            amount5Bill="";
            showBill5();

        }
        });
        document.getElementById("days5").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            days5Bill="";
            days5_q=0;
            showBill5();
        }else{
            days5_q=this.value;
            days5Bill="";
            showBill5();

        }
        });
        document.getElementById("rate_per_bag5").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rate_per_bag5Bill="";
            rate_per_bag5_q=0;
            showBill5();
        }else{
            rate_per_bag5_q=this.value;
            rate_per_bag5Bill="";
            showBill5();

        }
        });


        function showBill5(){
            document.getElementById("total_bags5").innerHTML = (size5*size5_q*amount5*amount5_q*rate_per_bag5*rate_per_bag5_q);

            document.getElementById("total5").innerHTML = (size5*size5_q*amount5*amount5_q*days5*days5_q*rate_per_bag5*rate_per_bag5_q);
        }
        </script>
    {{-- 6th --}}
    <script>
        var size6 = 1, amount6 = 1, days6 = 1, rate_per_bag6 = 1;

        var size6_q=0, amount6_q=0,  days6_q = 0, rate_per_bag6_q = 0;


        var size6Bill="",amount6Bill="",days6Bill="",rate_per_bag6Bill="";

        var total_amount=0;

        document.getElementById("size6").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            size6Bill="";
            size6_q=0;
            showBill6();
        }else{
            size6_q=this.value;
            size6Bill="";
            showBill6();

        }
        });
        document.getElementById("amount6").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            amount6Bill="";
            amount6_q=0;
            showBill6();
        }else{
            amount6_q=this.value;
            amount6Bill="";
            showBill6();

        }
        });
        document.getElementById("days6").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            days6Bill="";
            days6_q=0;
            showBill6();
        }else{
            days6_q=this.value;
            days6Bill="";
            showBill6();

        }
        });
        document.getElementById("rate_per_bag6").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rate_per_bag6Bill="";
            rate_per_bag6_q=0;
            showBill6();
        }else{
            rate_per_bag6_q=this.value;
            rate_per_bag6Bill="";
            showBill6();

        }
        });


        function showBill6(){
            document.getElementById("total_bags6").innerHTML = (size6*size6_q*amount6*amount6_q*rate_per_bag6*rate_per_bag6_q);

            document.getElementById("total6").innerHTML = (size6*size6_q*amount6*amount6_q*days6*days6_q*rate_per_bag6*rate_per_bag6_q);
        }
        </script>
    {{-- 7th --}}
    <script>
        var size7 = 1, amount7 = 1, days7 = 1, rate_per_bag7 = 1;

        var size7_q=0, amount7_q=0,  days7_q = 0, rate_per_bag7_q = 0;


        var size7Bill="",amount7Bill="",days7Bill="",rate_per_bag7Bill="";

        var total_amount=0;

        document.getElementById("size7").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            size7Bill="";
            size7_q=0;
            showBill7();
        }else{
            size7_q=this.value;
            size7Bill="";
            showBill7();

        }
        });
        document.getElementById("amount7").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            amount7Bill="";
            amount7_q=0;
            showBill7();
        }else{
            amount7_q=this.value;
            amount7Bill="";
            showBill7();

        }
        });
        document.getElementById("days7").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            days7Bill="";
            days7_q=0;
            showBill7();
        }else{
            days7_q=this.value;
            days7Bill="";
            showBill7();

        }
        });
        document.getElementById("rate_per_bag7").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rate_per_bag7Bill="";
            rate_per_bag7_q=0;
            showBill7();
        }else{
            rate_per_bag7_q=this.value;
            rate_per_bag7Bill="";
            showBill7();

        }
        });


        function showBill7(){
            document.getElementById("total_bags7").innerHTML = (size7*size7_q*amount7*amount7_q*rate_per_bag7*rate_per_bag7_q);

            document.getElementById("total7").innerHTML = (size7*size7_q*amount7*amount7_q*days7*days7_q*rate_per_bag7*rate_per_bag7_q);
        }
        </script>
    {{-- 8th --}}
    <script>
        var size8 = 1, amount8 = 1, days8 = 1, rate_per_bag8 = 1;

        var size8_q=0, amount8_q=0,  days8_q = 0, rate_per_bag8_q = 0;


        var size8Bill="",amount8Bill="",days8Bill="",rate_per_bag8Bill="";

        var total_amount=0;

        document.getElementById("size8").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            size8Bill="";
            size8_q=0;
            showBill8();
        }else{
            size8_q=this.value;
            size8Bill="";
            showBill8();

        }
        });
        document.getElementById("amount8").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            amount8Bill="";
            amount8_q=0;
            showBill8();
        }else{
            amount8_q=this.value;
            amount8Bill="";
            showBill8();

        }
        });
        document.getElementById("days8").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            days8Bill="";
            days8_q=0;
            showBill8();
        }else{
            days8_q=this.value;
            days8Bill="";
            showBill8();

        }
        });
        document.getElementById("rate_per_bag8").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rate_per_bag8Bill="";
            rate_per_bag8_q=0;
            showBill8();
        }else{
            rate_per_bag8_q=this.value;
            rate_per_bag8Bill="";
            showBill8();

        }
        });


        function showBill8(){
            document.getElementById("total_bags8").innerHTML = (size8*size8_q*amount8*amount8_q*rate_per_bag8*rate_per_bag8_q);

            document.getElementById("total8").innerHTML = (size8*size8_q*amount8*amount8_q*days8*days8_q*rate_per_bag8*rate_per_bag8_q);
        }
        </script>
    {{-- 9th --}}
    <script>
        var size9 = 1, amount9 = 1, days9 = 1, rate_per_bag9 = 1;

        var size9_q=0, amount9_q=0,  days9_q = 0, rate_per_bag9_q = 0;


        var size9Bill="",amount9Bill="",days9Bill="",rate_per_bag9Bill="";

        var total_amount=0;

        document.getElementById("size9").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            size8Bill="";
            size8_q=0;
            showBill9();
        }else{
            size9_q=this.value;
            size9Bill="";
            showBill9();

        }
        });
        document.getElementById("amount9").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            amount9Bill="";
            amount9_q=0;
            showBill9();
        }else{
            amount9_q=this.value;
            amount9Bill="";
            showBill9();

        }
        });
        document.getElementById("days9").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            days9Bill="";
            days9_q=0;
            showBill9();
        }else{
            days9_q=this.value;
            days9Bill="";
            showBill9();

        }
        });
        document.getElementById("rate_per_bag9").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rate_per_bag9Bill="";
            rate_per_bag9_q=0;
            showBill9();
        }else{
            rate_per_bag9_q=this.value;
            rate_per_bag9Bill="";
            showBill9();

        }
        });


        function showBill9(){
            document.getElementById("total_bags9").innerHTML = (size9*size9_q*amount9*amount9_q*rate_per_bag9*rate_per_bag9_q);

            document.getElementById("total9").innerHTML = (size9*size9_q*amount9*amount9_q*days9*days9_q*rate_per_bag9*rate_per_bag9_q);
        }
        </script>
    {{-- 10th --}}
    <script>
        var size10 = 1, amount10 = 1, days10 = 1, rate_per_bag10= 1;

        var size10_q=0, amount10_q=0,  days10_q = 0, rate_per_bag10_q = 0;


        var size10Bill="",amount10Bill="",days10Bill="",rate_per_bag10Bill="";

        var total_amount=0;

        document.getElementById("size10").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            size10Bill="";
            size10_q=0;
            showBill10();
        }else{
            size10_q=this.value;
            size10Bill="";
            showBill10();

        }
        });
        document.getElementById("amount10").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            amount10Bill="";
            amount10_q=0;
            showBill10();
        }else{
            amount10_q=this.value;
            amount10Bill="";
            showBill10();

        }
        });
        document.getElementById("days10").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            days10Bill="";
            days10_q=0;
            showBill10();
        }else{
            days10_q=this.value;
            days10Bill="";
            showBill10();

        }
        });
        document.getElementById("rate_per_bag10").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rate_per_bag10Bill="";
            rate_per_bag10_q=0;
            showBill10();
        }else{
            rate_per_bag10_q=this.value;
            rate_per_bag10Bill="";
            showBill10();

        }
        });


        function showBill10(){
            document.getElementById("total_bags10").innerHTML = (size10*size10_q*amount10*amount10_q*rate_per_bag10*rate_per_bag10_q);

            document.getElementById("total10").innerHTML = (size10*size10_q*amount10*amount10_q*days10*days10_q*rate_per_bag10*rate_per_bag10_q);
        }
        </script>
    {{-- 11th --}}
    <script>
        var size11 = 1, amount11 = 1, days11 = 1, rate_per_bag11= 1;

        var size11_q=0, amount11_q=0,  days11_q = 0, rate_per_bag11_q = 0;


        var size11Bill="",amount11Bill="",days11Bill="",rate_per_bag11Bill="";

        var total_amount=0;

        document.getElementById("size11").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            size11Bill="";
            size11_q=0;
            showBill11();
        }else{
            size11_q=this.value;
            size11Bill="";
            showBill11();

        }
        });
        document.getElementById("amount11").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            amount11Bill="";
            amount11_q=0;
            showBill11();
        }else{
            amount11_q=this.value;
            amount11Bill="";
            showBill11();

        }
        });
        document.getElementById("days11").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            days11Bill="";
            days11_q=0;
            showBill1();
        }else{
            days11_q=this.value;
            days11Bill="";
            showBill11();

        }
        });
        document.getElementById("rate_per_bag11").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rate_per_bag11Bill="";
            rate_per_bag11_q=0;
            showBill11();
        }else{
            rate_per_bag11_q=this.value;
            rate_per_bag11Bill="";
            showBill11();

        }
        });


    function showBill11(){
            document.getElementById("total_bags11").innerHTML =
            (size1*size1_q*amount1*amount1_q*rate_per_bag1*rate_per_bag1_q)
            +(size2*size2_q*amount2*amount2_q*rate_per_bag2*rate_per_bag2_q)
            +(size3*size3_q*amount3*amount3_q*rate_per_bag3*rate_per_bag3_q)
            +(size4*size4_q*amount4*amount4_q*rate_per_bag4*rate_per_bag4_q)
            +(size5*size5_q*amount5*amount5_q*rate_per_bag5*rate_per_bag5_q)
            +(size6*size6_q*amount6*amount6_q*rate_per_bag6*rate_per_bag6_q)
            +(size7*size7_q*amount7*amount7_q*rate_per_bag7*rate_per_bag7_q)
            +(size8*size8_q*amount8*amount8_q*rate_per_bag8*rate_per_bag8_q)
            +(size9*size9_q*amount9*amount9_q*rate_per_bag9*rate_per_bag9_q)
            +(size10*size10_q*amount10*amount10_q*rate_per_bag10*rate_per_bag10_q)
            +(size11*size11_q*amount11*amount11_q*rate_per_bag11*rate_per_bag11_q);

            document.getElementById("total11").innerHTML =
            (size1*size1_q*amount1*amount1_q*days1*days1_q*rate_per_bag1*rate_per_bag1_q)
            +(size2*size2_q*amount2*amount2_q*days2*days2_q*rate_per_bag2*rate_per_bag2_q)
            +(size3*size3_q*amount3*amount3_q*days3*days3_q*rate_per_bag3*rate_per_bag3_q)
            +(size4*size4_q*amount4*amount4_q*days4*days4_q*rate_per_bag4*rate_per_bag4_q)
            +(size5*size5_q*amount5*amount5_q*days5*days5_q*rate_per_bag5*rate_per_bag5_q)
            +(size6*size6_q*amount6*amount6_q*days6*days6_q*rate_per_bag6*rate_per_bag6_q)
            +(size7*size7_q*amount7*amount7_q*days7*days7_q*rate_per_bag7*rate_per_bag7_q)
            +(size8*size8_q*amount8*amount8_q*days8*days8_q*rate_per_bag8*rate_per_bag8_q)
            +(size9*size9_q*amount9*amount9_q*days9*days9_q*rate_per_bag9*rate_per_bag9_q)
            +(size10*size10_q*amount10*amount10_q*days10*days10_q*rate_per_bag10*rate_per_bag10_q)
            +(size11*size11_q*amount11*amount11_q*days11*days11_q*rate_per_bag11*rate_per_bag11_q);


    }

    </script>
