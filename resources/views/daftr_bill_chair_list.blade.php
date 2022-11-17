

 <?php
 use App\Http\Controllers\daftr;


   $total=daftr::cartItem_chair_bill_daftr();

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
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> بل بُنتی کرسی بنام دفتر تحریک جدید</strong></h4>
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

            <div class="table-responsive">
				<table style="border: 1px solid black">
                    <tbody>
						<tr >
							<td style="text-align: center;width: 20px;font-size:15px;font-family: Jameel Noori;">ٹوٹل رقم</td>
							<td style="text-align: center;width: 60px;font-size:15px;font-family: Jameel Noori;">کرسی بنیت تفصیل</td>
							<td style="text-align: center;width: 20px;font-size:15px;font-family: Jameel Noori;">تعداد</td>

							<td style="text-align: center;width: 20px;font-size:15px;font-family: Jameel Noori;">ریٹ</td>

							<td style="text-align: center;width: 60px;font-size:15px;font-family: Jameel Noori;">سیٹ بنیت تفصیل</td>
							<td style="text-align: center;width: 20px;font-size:15px;font-family: Jameel Noori;">تعداد</td>

							<td style="text-align: center;width: 20px;font-size:15px;font-family: Jameel Noori;">ریٹ</td>
							{{-- <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;"> دفتر کا نام</td>
						     <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">نام</td> --}}
							<td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">بروز</td>
							<td style="text-align: center;width: 40px;font-size:16px;font-family: Jameel Noori;">تاریخ</td>
							<td style="text-align: center;width: 10px;font-size:16px;font-family: Jameel Noori;">   نمبر شمار</td>



						</tr>



                        {{-- @foreach($cols  as $col)

						<tr>
							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:15px;">{{$col['per_seat_rate']*$col['seat_amount']+$col['per_chair_rate']*$col['chair_amount']}}</td>
							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:15px;">{{$col['chair_detail']}}</td>

							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:15px;">{{$col['chair_amount']}}</td>
							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:15px;">{{$col['per_chair_rate']}}</td>
							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:15px;">{{$col['seat_detail']}}</td>
							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:15px;">{{$col['seat_amount']}}</td>
							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:15px;">{{$col['per_seat_rate']}}</td>
							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:15px;">{{$col['daftr_no']}}</td>
							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:5px;">{{$col['name']}}</td>
							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:15px;">{{$col['day']}}</td>
							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:5px;">{{$col['date']}}</td>


						</tr>
                        @endforeach --}}

                        <tr>

                            <td dir="auto"><span id="total"></span></td>

                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="amount_chair1"></td>

                            <td dir="auto"><input type="text"  id="rate_chair1"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="rate1"></td>
                            <td dir="auto"><input type="text"  id="amount1"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  value=""></td>

                            <td>1</td>

                        </tr>

                        <tr>

                            <td dir="auto"><span id="total2"></span></td>

                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="amount_chair2"></td>

                            <td dir="auto"><input type="text"  id="rate_chair2"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="rate2"></td>
                            <td dir="auto"><input type="text"  id="amount2"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td>2</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total3"></span></td>

                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="amount_chair3"></td>

                            <td dir="auto"><input type="text"  id="rate_chair3"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="rate3"></td>
                            <td dir="auto"><input type="text"  id="amount3"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td>3</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total4"></span></td>

                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="amount_chair4"></td>

                            <td dir="auto"><input type="text"  id="rate_chair4"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="rate4"></td>
                            <td dir="auto"><input type="text"  id="amount4"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td>4</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total5"></span></td>

                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="amount_chair5"></td>

                            <td dir="auto"><input type="text"  id="rate_chair5"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="rate5"></td>
                            <td dir="auto"><input type="text"  id="amount5"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td>5</td>

                        </tr>
                        <tr>
                            <td dir="auto"><span id="total6"></span></td>

                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="amount_chair6"></td>

                            <td dir="auto"><input type="text"  id="rate_chair6"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="rate6"></td>
                            <td dir="auto"><input type="text"  id="amount6"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td>6</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total7"></span></td>

                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="amount_chair7"></td>

                            <td dir="auto"><input type="text"  id="rate_chair7"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="rate7"></td>
                            <td dir="auto"><input type="text"  id="amount7"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td>7</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total8"></span></td>

                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="amount_chair8"></td>

                            <td dir="auto"><input type="text"  id="rate_chair8"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="rate8"></td>
                            <td dir="auto"><input type="text"  id="amount8"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td>8</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total9"></span></td>

                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="amount_chair9"></td>

                            <td dir="auto"><input type="text"  id="rate_chair9"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="rate9"></td>
                            <td dir="auto"><input type="text"  id="amount9"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td>9</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total10"></span></td>

                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="amount_chair10"></td>

                            <td dir="auto"><input type="text"  id="rate_chair10"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="rate10"></td>
                            <td dir="auto"><input type="text"  id="amount10"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td>10</td>

                        </tr>
                        <tr>
                            <td><span id="total11"></span></td>
                            <td style="font-family: Jameel Noori;">میزان</td>
                            <td dir="auto"><input type="text"  id="amount_chair11"></td>
                            <td dir="auto"><input type="text"  id="rate_chair11"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  id="amount11"></td>
                            <td dir="auto"><input type="text"  id="rate11"></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td dir="auto"><input type="text"  value=""></td>
                            <td></td>

                        </tr>
                        {{-- <tr>

                            <td dir="auto"></td>
                            <td></td>

                            <td dir="auto"><input type="text" ></td>
                            <td style="font-family: Jameel Noori;">فی کرسی ریٹ</td>

                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            <td style="font-family: Jameel Noori;">فی سیٹ ریٹ</td>

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
<!-- 
        <table style="border: #fff">
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





<script>
    var rate1 = 1, amount1 = 1;
    var rate1_q=0, amount1_q=0;
    var rate_chair1 = 1, amount_chair1 = 1;
    var rate_chair1_q=0, amount_chair1_q=0;

    var rate1Bill="",amount1Bill="";
    var rate_chair1Bill="",amount_chair1Bill="";

    var total_amount=0;



    document.getElementById("rate1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate1Bill="";
        rate1_q=0;
        showBill();
    }else{
        rate1_q=this.value;
        rate1Bill="";
        showBill();

    }
    });
    document.getElementById("rate_chair1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate_chair1Bill="";
        rate_chair1_q=0;
        showBill();
    }else{
        rate_chair1_q=this.value;
        rate_chair1Bill="";
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
    document.getElementById("amount_chair1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        amount_chair1Bill="";
        amount_chair1_q=0;
        showBill();

    }else{
        amount_chair1_q=this.value;
        amount_chair1Bill="";
        showBill();
    }
    });



    function showBill(){

        document.getElementById("total").innerHTML = (rate1*rate1_q*amount1*amount1_q)+(rate_chair1*rate_chair1_q*amount_chair1*amount_chair1_q); // total amount
    }
    </script>

{{-- 2nd --}}
<script>
    var rate2 = 1, amount2 = 1;
    var rate2_q=0, amount2_q=0;
    var rate_chair2 = 1, amount_chair2 = 1;
    var rate_chair2_q=0, amount_chair2_q=0;

    var rate2Bill="",amount2Bill="";
    var rate_chair2Bill="",amount_chair2Bill="";

    var total_amount=0;



    document.getElementById("rate2").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate2Bill="";
        rate2_q=0;
        showBill2();
    }else{
        rate2_q=this.value;
        rate2Bill="";
        showBill2();

    }
    });
    document.getElementById("rate_chair2").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate_chair2Bill="";
        rate_chair2_q=0;
        showBill2();
    }else{
        rate_chair2_q=this.value;
        rate_chair2Bill="";
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
    document.getElementById("amount_chair2").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        amount_chair2Bill="";
        amount_chair2_q=0;
        showBill2();

    }else{
        amount_chair2_q=this.value;
        amount_chair2Bill="";
        showBill2();
    }
    });



    function showBill2(){
        document.getElementById("total2").innerHTML = (rate2*rate2_q*amount2*amount2_q)+(rate_chair2*rate_chair2_q*amount_chair2*amount_chair2_q); // total amount
    }

    </script>
{{-- 3rd --}}
<script>
    var rate3 = 1, amount3 = 1;
    var rate3_q=0, amount3_q=0;
    var rate_chair3 = 1, amount_chair3 = 1;
    var rate_chair3_q=0, amount_chair3_q=0;

    var rate3Bill="",amount3Bill="";
    var rate_chair3Bill="",amount_chair3Bill="";

    var total_amount=0;



    document.getElementById("rate3").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate3Bill="";
        rate3_q=0;
        showBill3();
    }else{
        rate3_q=this.value;
        rate3Bill="";
        showBill3();

    }
    });
    document.getElementById("rate_chair3").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate_chair3Bill="";
        rate_chair3_q=0;
        showBill3();
    }else{
        rate_chair3_q=this.value;
        rate_chair3Bill="";
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
    document.getElementById("amount_chair3").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        amount_chair3Bill="";
        amount_chair3_q=0;
        showBill3();

    }else{
        amount_chair3_q=this.value;
        amount_chair3Bill="";
        showBill3();
    }
    });



    function showBill3(){
        document.getElementById("total3").innerHTML = (rate3*rate3_q*amount3*amount3_q)+(rate_chair3*rate_chair3_q*amount_chair3*amount_chair3_q); // total amount
    }

    </script>
{{-- 4th --}}
<script>
    var rate4 = 1, amount4 = 1;
    var rate4_q=0, amount4_q=0;
    var rate_chair4 = 1, amount_chair4 = 1;
    var rate_chair4_q=0, amount_chair4_q=0;

    var rate4Bill="",amount4Bill="";
    var rate_chair4Bill="",amount_chair4Bill="";

    var total_amount=0;



    document.getElementById("rate4").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate4Bill="";
        rate4_q=0;
        showBill4();
    }else{
        rate4_q=this.value;
        rate4Bill="";
        showBill4();

    }
    });
    document.getElementById("rate_chair4").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate_chair4Bill="";
        rate_chair4_q=0;
        showBill4();
    }else{
        rate_chair4_q=this.value;
        rate_chair4Bill="";
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
    document.getElementById("amount_chair4").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        amount_chair4Bill="";
        amount_chair4_q=0;
        showBill4();

    }else{
        amount_chair4_q=this.value;
        amount_chair4Bill="";
        showBill4();
    }
    });



    function showBill4(){
        document.getElementById("total4").innerHTML = (rate4*rate4_q*amount4*amount4_q)+(rate_chair4*rate_chair4_q*amount_chair4*amount_chair4_q); // total amount
    }

    </script>
{{-- 5th --}}
<script>
    var rate5 = 1, amount5 = 1;
    var rate5_q=0, amount5_q=0;
    var rate_chair5 = 1, amount_chair5 = 1;
    var rate_chair5_q=0, amount_chair5_q=0;

    var rate5Bill="",amount5Bill="";
    var rate_chair5Bill="",amount_chair5Bill="";

    var total_amount=0;



    document.getElementById("rate5").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate5Bill="";
        rate5_q=0;
        showBill5();
    }else{
        rate5_q=this.value;
        rate5Bill="";
        showBill5();

    }
    });
    document.getElementById("rate_chair5").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate_chair5Bill="";
        rate_chair5_q=0;
        showBill5();
    }else{
        rate_chair5_q=this.value;
        rate_chair5Bill="";
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
    document.getElementById("amount_chair5").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        amount_chair5Bill="";
        amount_chair5_q=0;
        showBill5();

    }else{
        amount_chair5_q=this.value;
        amount_chair5Bill="";
        showBill5();
    }
    });



    function showBill5(){
        document.getElementById("total5").innerHTML = (rate5*rate5_q*amount5*amount5_q)+(rate_chair5*rate_chair5_q*amount_chair5*amount_chair5_q); // total amount
    }

    </script>
{{-- 6th --}}
<script>
    var rate6 = 1, amount6 = 1;
    var rate6_q=0, amount6_q=0;
    var rate_chair6 = 1, amount_chair6 = 1;
    var rate_chair6_q=0, amount_chair6_q=0;

    var rate6Bill="",amount6Bill="";
    var rate_chair6Bill="",amount_chair6Bill="";

    var total_amount=0;



    document.getElementById("rate6").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate6Bill="";
        rate6_q=0;
        showBill6();
    }else{
        rate6_q=this.value;
        rate6Bill="";
        showBill6();

    }
    });
    document.getElementById("rate_chair6").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate_chair6Bill="";
        rate_chair6_q=0;
        showBill6();
    }else{
        rate_chair6_q=this.value;
        rate_chair6Bill="";
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
    document.getElementById("amount_chair6").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        amount_chair6Bill="";
        amount_chair6_q=0;
        showBill6();

    }else{
        amount_chair6_q=this.value;
        amount_chair6Bill="";
        showBill6();
    }
    });



    function showBill6(){
        document.getElementById("total6").innerHTML = (rate6*rate6_q*amount6*amount6_q)+(rate_chair6*rate_chair6_q*amount_chair6*amount_chair6_q); // total amount
    }

    </script>
{{-- 7th --}}
<script>
    var rate7 = 1, amount7 = 1;
    var rate7_q=0, amount7_q=0;
    var rate_chair7 = 1, amount_chair7 = 1;
    var rate_chair7_q=0, amount_chair7_q=0;

    var rate7Bill="",amount7Bill="";
    var rate_chair7Bill="",amount_chair7Bill="";

    var total_amount=0;



    document.getElementById("rate7").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate7Bill="";
        rate7_q=0;
        showBill7();
    }else{
        rate7_q=this.value;
        rate7Bill="";
        showBill7();

    }
    });
    document.getElementById("rate_chair7").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate_chair7Bill="";
        rate_chair7_q=0;
        showBill7();
    }else{
        rate_chair7_q=this.value;
        rate_chair7Bill="";
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
    document.getElementById("amount_chair7").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        amount_chair7Bill="";
        amount_chair7_q=0;
        showBill7();

    }else{
        amount_chair7_q=this.value;
        amount_chair7Bill="";
        showBill7();
    }
    });



    function showBill7(){
        document.getElementById("total7").innerHTML = (rate7*rate7_q*amount7*amount7_q)+(rate_chair7*rate_chair7_q*amount_chair7*amount_chair7_q); // total amount
    }

    </script>
{{-- 8th --}}
<script>
    var rate8 = 1, amount8 = 1;
    var rate8_q=0, amount8_q=0;
    var rate_chair8 = 1, amount_chair8 = 1;
    var rate_chair8_q=0, amount_chair8_q=0;

    var rate8Bill="",amount8Bill="";
    var rate_chair8Bill="",amount_chair8Bill="";

    var total_amount=0;



    document.getElementById("rate8").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate8Bill="";
        rate8_q=0;
        showBill8();
    }else{
        rate8_q=this.value;
        rate8Bill="";
        showBill8();

    }
    });
    document.getElementById("rate_chair8").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate_chair8Bill="";
        rate_chair8_q=0;
        showBill8();
    }else{
        rate_chair8_q=this.value;
        rate_chair8Bill="";
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
    document.getElementById("amount_chair8").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        amount_chair8Bill="";
        amount_chair8_q=0;
        showBill8();

    }else{
        amount_chair8_q=this.value;
        amount_chair8Bill="";
        showBill8();
    }
    });



    function showBill8(){
        document.getElementById("total8").innerHTML = (rate8*rate8_q*amount8*amount8_q)+(rate_chair8*rate_chair8_q*amount_chair8*amount_chair8_q); // total amount
    }

    </script>
{{-- 9th --}}
<script>
    var rate9 = 1, amount9 = 1;
    var rate9_q=0, amount9_q=0;
    var rate_chair9 = 1, amount_chair9 = 1;
    var rate_chair9_q=0, amount_chair9_q=0;

    var rate9Bill="",amount9Bill="";
    var rate_chair9Bill="",amount_chair9Bill="";

    var total_amount=0;



    document.getElementById("rate9").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate9Bill="";
        rate9_q=0;
        showBill9();
    }else{
        rate9_q=this.value;
        rate9Bill="";
        showBill9();

    }
    });
    document.getElementById("rate_chair9").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate_chair9Bill="";
        rate_chair9_q=0;
        showBill9();
    }else{
        rate_chair9_q=this.value;
        rate_chair9Bill="";
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
    document.getElementById("amount_chair9").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        amount_chair9Bill="";
        amount_chair9_q=0;
        showBill9();

    }else{
        amount_chair9_q=this.value;
        amount_chair9Bill="";
        showBill9();
    }
    });



    function showBill9(){
        document.getElementById("total9").innerHTML = (rate9*rate9_q*amount9*amount9_q)+(rate_chair9*rate_chair9_q*amount_chair9*amount_chair9_q); // total amount
    }

    </script>
{{-- 10th --}}
<script>
    var rate10 = 1, amount10 = 1;
    var rate10_q=0, amount10_q=0;
    var rate_chair10 = 1, amount_chair10 = 1;
    var rate_chair10_q=0, amount_chair10_q=0;

    var rate10Bill="",amount10Bill="";
    var rate_chair10Bill="",amount_chair10Bill="";

    var total_amount=0;



    document.getElementById("rate10").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate10Bill="";
        rate10_q=0;
        showBill10();
    }else{
        rate10_q=this.value;
        rate10Bill="";
        showBill10();

    }
    });
    document.getElementById("rate_chair10").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate_chair10Bill="";
        rate_chair10_q=0;
        showBill10();
    }else{
        rate_chair10_q=this.value;
        rate_chair10Bill="";
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
    document.getElementById("amount_chair10").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        amount_chair10Bill="";
        amount_chair10_q=0;
        showBill10();

    }else{
        amount_chair10_q=this.value;
        amount_chair10Bill="";
        showBill10();
    }
    });



    function showBill10(){
        document.getElementById("total10").innerHTML = (rate10*rate10_q*amount10*amount10_q)+(rate_chair10*rate_chair10_q*amount_chair10*amount_chair10_q); // total amount
    }

    </script>
{{-- 11th --}}
<script>
    var rate11 = 1, amount11 = 1;
    var rate11_q=0, amount11_q=0;
    var rate_chair11 = 1, amount_chair11 = 1;
    var rate_chair11_q=0, amount_chair11_q=0;

    var rate11Bill="",amount11Bill="";
    var rate_chair11Bill="",amount_chair11Bill="";

    var total_amount=0;



    document.getElementById("rate11").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate11Bill="";
        rate11_q=0;
        showBill11();
    }else{
        rate11_q=this.value;
        rate11Bill="";
        showBill11();

    }
    });
    document.getElementById("rate_chair11").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rate_chair11Bill="";
        rate_chair11_q=0;
        showBill11();
    }else{
        rate_chair11_q=this.value;
        rate_chair11Bill="";
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
    document.getElementById("amount_chair11").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        amount_chair11Bill="";
        amount_chair11_q=0;
        showBill11();

    }else{
        amount_chair11_q=this.value;
        amount_chair10Bill="";
        showBill11();
    }
    });



    function showBill11(){
        document.getElementById("total11").innerHTML =
         (rate1*rate1_q*amount1*amount1_q)+(rate_chair1*rate_chair1_q*amount_chair1*amount_chair1_q)+(rate2*rate2_q*amount2*amount2_q)+(rate_chair2*rate_chair2_q*amount_chair2*amount_chair2_q)
         +(rate3*rate3_q*amount3*amount3_q)+(rate_chair3*rate_chair3_q*amount_chair3*amount_chair3_q)+(rate4*rate4_q*amount4*amount4_q)+(rate_chair4*rate_chair4_q*amount_chair4*amount_chair4_q)
         +(rate5*rate5_q*amount5*amount5_q)+(rate_chair5*rate_chair5_q*amount_chair5*amount_chair5_q)+(rate6*rate6_q*amount6*amount6_q)+(rate_chair6*rate_chair6_q*amount_chair6*amount_chair6_q)
         +(rate7*rate7_q*amount7*amount7_q)+(rate_chair7*rate_chair7_q*amount_chair7*amount_chair7_q)+(rate8*rate8_q*amount8*amount8_q)+(rate_chair8*rate_chair8_q*amount_chair8*amount_chair8_q)
         +(rate9*rate9_q*amount9*amount9_q)+(rate_chair9*rate_chair9_q*amount_chair9*amount_chair9_q)+(rate10*rate10_q*amount10*amount10_q)+(rate_chair10*rate_chair10_q*amount_chair10*amount_chair10_q)
         +(rate11*rate11_q*amount11*amount11_q)+(rate_chair11*rate_chair11_q*amount_chair11*amount_chair11_q);





    }

    </script>
