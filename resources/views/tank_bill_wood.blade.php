
<?php
use App\Http\Controllers\quater_tameer_controller;


  $total=quater_tameer_controller::tameer_cartItem_wood();
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
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> بل ووڈورکس بنام دفتر تحریک جدید</strong></h4>
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> تعمیر ٹربائین واٹر ٹینک دارالفتوح</strong></h4>
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
    <table >
        <tbody >
        <tr style="text-align: center">

            <td style="text-align: center;width: 20px;font-family: Jameel Noori;">بقایا رقم</td>
            <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">اڈوانس رقم</td>
            <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">اداِئیگی</td>
            <td style="text-align: center;width: 20px;font-size:15px;font-family: Jameel Noori;">ٹوٹل رقم </td>

            <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">ریٹ</td>
            <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;"> پیمائش مربع فٹ</td>
            <td style="text-align: center;width: 60px;font-size:15px;font-family: Jameel Noori;">تفصیل</td>
            {{-- <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">مقام</th> --}}
            <td style="text-align: center;width: 40px;font-size:15px;font-family: Jameel Noori;">تاریخ</th>
            <td style="text-align: center;width: 10px;font-size:15px;font-family: Jameel Noori;">نمبر شمار</td>


        </tr>
        <tr>

            <td dir="auto"><span id="totalremain"></span></td>

            <td dir="auto"><input type="text"  id="advance1"></td>
            <td dir="auto"><input type="text"  id="adaigi1"></td>
            <td dir="auto"><span id="total"></span></td>
            <td dir="auto"><input type="text"  id="rate1"></td>
            <td dir="auto"><input type="text"  id="murabah_foot1"></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  ></td>


            <td>1</td>

        </tr>

        <tr>

            <td dir="auto"><span id="totalremain2"></span></td>

            <td dir="auto"><input type="text"  id="advance2"></td>
            <td dir="auto"><input type="text"  id="adaigi2"></td>
            <td dir="auto"><span id="total2"></span></td>
            <td dir="auto"><input type="text"  id="rate2"></td>
            <td dir="auto"><input type="text"  id="murabah_foot2"></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  ></td>

            <td>2</td>

        </tr>
        <tr>

            <td dir="auto"><span id="totalremain3"></span></td>

            <td dir="auto"><input type="text"  id="advance3"></td>
            <td dir="auto"><input type="text"  id="adaigi3"></td>
            <td dir="auto"><span id="total3"></span></td>
            <td dir="auto"><input type="text"  id="rate3"></td>
            <td dir="auto"><input type="text"  id="murabah_foot3"></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  ></td>
            <td>3</td>

        </tr>
        <tr>
            <td dir="auto"><span id="totalremain4"></span></td>

            <td dir="auto"><input type="text"  id="advance4"></td>
            <td dir="auto"><input type="text"  id="adaigi4"></td>
            <td dir="auto"><span id="total4"></span></td>
            <td dir="auto"><input type="text"  id="rate4"></td>
            <td dir="auto"><input type="text"  id="murabah_foot4"></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  ></td>

            <td>4</td>

        </tr>
        <tr>

            <td dir="auto"><span id="totalremain5"></span></td>

            <td dir="auto"><input type="text"  id="advance5"></td>
            <td dir="auto"><input type="text"  id="adaigi5"></td>
            <td dir="auto"><span id="total5"></span></td>
            <td dir="auto"><input type="text"  id="rate5"></td>
            <td dir="auto"><input type="text"  id="murabah_foot5"></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  ></td>
            <td>5</td>

        </tr>
        <tr>
            <td dir="auto"><span id="totalremain6"></span></td>

            <td dir="auto"><input type="text"  id="advance6"></td>
            <td dir="auto"><input type="text"  id="adaigi6"></td>
            <td dir="auto"><span id="total6"></span></td>
            <td dir="auto"><input type="text"  id="rate6"></td>
            <td dir="auto"><input type="text"  id="murabah_foot6"></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  ></td>

            <td>6</td>

        </tr>
        <tr>

            <td dir="auto"><span id="totalremain7"></span></td>

            <td dir="auto"><input type="text"  id="advance7"></td>
            <td dir="auto"><input type="text"  id="adaigi7"></td>
            <td dir="auto"><span id="total7"></span></td>
            <td dir="auto"><input type="text"  id="rate7"></td>
            <td dir="auto"><input type="text"  id="murabah_foot7"></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  ></td>
            <td>7</td>

        </tr>
        <tr>

            <td dir="auto"><span id="totalremain8"></span></td>

            <td dir="auto"><input type="text"  id="advance8"></td>
            <td dir="auto"><input type="text"  id="adaigi8"></td>
            <td dir="auto"><span id="total8"></span></td>
            <td dir="auto"><input type="text"  id="rate8"></td>
            <td dir="auto"><input type="text"  id="murabah_foot8"></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  ></td>
            <td>8</td>

        </tr>
        <tr>

            <td dir="auto"><span id="totalremain9"></span></td>

            <td dir="auto"><input type="text"  id="advance9"></td>
            <td dir="auto"><input type="text"  id="adaigi9"></td>
            <td dir="auto"><span id="total9"></span></td>
            <td dir="auto"><input type="text"  id="rate9"></td>
            <td dir="auto"><input type="text"  id="murabah_foot9"></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  ></td>

            <td>9</td>

        </tr>
        <tr>

            <td dir="auto"><span id="totalremain10"></span></td>

            <td dir="auto"><input type="text"  id="advance10"></td>
            <td dir="auto"><input type="text"  id="adaigi10"></td>
            <td dir="auto"><span id="total10"></span></td>
            <td dir="auto"><input type="text"  id="rate10"></td>
            <td dir="auto"><input type="text"  id="murabah_foot10"></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  ></td>
            <td>10</td>

        </tr>
        <tr>
            <td dir="auto"><span id="totalremain11"></span></td>

            <td style="font-family: Jameel Noori;">میزان<input type="hidden"  id="advance11"></td>
            {{-- <td dir="auto"><input type="text"  id="detail"></td> --}}

            <td dir="auto"><input type="text"  id="adaigi11"></td>
            <td dir="auto"><span id="total11"></span></td>
            <td dir="auto"><input type="text"  id="rate11"></td>
            <td dir="auto"><input type="text"  id="murabah_foot11"></td>
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
var murabah_foot1 = 1, rate1 = 1, adaigi1 = 1, advance1 = 1;

var murabah_foot1_q=0, rate1_q=0,  adaigi1_q = 0, advance1_q = 0;


var murabah_foot1Bill="",rate1Bill="",adaigi1Bill="",advance1Bill="";

var total_amount=0;

document.getElementById("murabah_foot1").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
    murabah_foot1Bill="";
    murabah_foot1_q=0;
showBill();
}else{
    murabah_foot1_q=this.value;
    murabah_foot1Bill="";
showBill();

}
});
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
document.getElementById("advance1").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
    advance1Bill="";
    advance1_q=0;
showBill();
}else{
    advance1_q=this.value;
    advance1Bill="";
showBill();

}
});


function showBill(){
document.getElementById("totalremain").innerHTML = (adaigi1*adaigi1_q-advance1*advance1_q); // total amount

document.getElementById("total").innerHTML = (rate1*rate1_q*murabah_foot1*murabah_foot1_q); // total amount
}
</script>

{{-- 2nd --}}

<script>
    var murabah_foot2 = 1, rate2 = 1, adaigi2 = 1, advance2 = 1;

    var murabah_foot2_q=0, rate2_q=0,  adaigi2_q = 0, advance2_q = 0;


    var murabah_foot2Bill="",rate2Bill="",adaigi2Bill="",advance2Bill="";

    var total_amount=0;

    document.getElementById("murabah_foot2").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_foot2Bill="";
        murabah_foot2_q=0;
    showBill2();
    }else{
        murabah_foot2_q=this.value;
        murabah_foot2Bill="";
    showBill2();

    }
    });
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
    document.getElementById("advance2").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        advance2Bill="";
        advance2_q=0;
    showBill2();
    }else{
        advance2_q=this.value;
        advance2Bill="";
    showBill2();

    }
    });


    function showBill2(){
    document.getElementById("totalremain2").innerHTML = (adaigi2*adaigi2_q-advance2*advance2_q); // total amount

    document.getElementById("total2").innerHTML = (rate2*rate2_q*murabah_foot2*murabah_foot2_q); // total amount
    }
    </script>

{{-- 3rd --}}

<script>
    var murabah_foot3 = 1, rate3 = 1, adaigi3 = 1, advance3 = 1;

    var murabah_foot3_q=0, rate3_q=0,  adaigi3_q = 0, advance3_q = 0;


    var murabah_foot3Bill="",rate3Bill="",adaigi3Bill="",advance3Bill="";

    var total_amount=0;

    document.getElementById("murabah_foot3").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_foot3Bill="";
        murabah_foot3_q=0;
    showBill2();
    }else{
        murabah_foot3_q=this.value;
        murabah_foot3Bill="";
    showBill3();

    }
    });
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
    document.getElementById("advance3").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        advance3Bill="";
        advance3_q=0;
    showBill3();
    }else{
        advance3_q=this.value;
        advance3Bill="";
    showBill3();

    }
    });


    function showBill3(){
    document.getElementById("totalremain3").innerHTML = (adaigi3*adaigi3_q-advance3*advance3_q); // total amount

    document.getElementById("total3").innerHTML = (rate3*rate3_q*murabah_foot3*murabah_foot3_q); // total amount
    }
    </script>
{{-- 4th --}}
<script>
    var murabah_foot4 = 1, rate4 = 1, adaigi4 = 1, advance4 = 1;

    var murabah_foot4_q=0, rate4_q=0,  adaigi4_q = 0, advance4_q = 0;


    var murabah_foot4Bill="",rate4Bill="",adaigi4Bill="",advance4Bill="";

    var total_amount=0;

    document.getElementById("murabah_foot4").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_foot4Bill="";
        murabah_foot4_q=0;
    showBill4();
    }else{
        murabah_foot4_q=this.value;
        murabah_foot4Bill="";
    showBill4();

    }
    });
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
    document.getElementById("advance4").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        advance4Bill="";
        advance4_q=0;
    showBill4();
    }else{
        advance4_q=this.value;
        advance4Bill="";
    showBill4();

    }
    });


    function showBill4(){
    document.getElementById("totalremain4").innerHTML = (adaigi4*adaigi4_q-advance4*advance4_q); // total amount

    document.getElementById("total4").innerHTML = (rate4*rate4_q*murabah_foot4*murabah_foot4_q); // total amount
    }
    </script>
{{-- 5th --}}
<script>
    var murabah_foot5 = 1, rate5 = 1, adaigi5 = 1, advance5 = 1;

    var murabah_foot5_q=0, rate5_q=0,  adaigi5_q = 0, advance5_q = 0;


    var murabah_foot5Bill="",rate5Bill="",adaigi5Bill="",advance5Bill="";

    var total_amount=0;

    document.getElementById("murabah_foot5").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_foot5Bill="";
        murabah_foot5_q=0;
    showBill5();
    }else{
        murabah_foot5_q=this.value;
        murabah_foot5Bill="";
    showBill5();

    }
    });
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
    document.getElementById("advance5").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        advance5Bill="";
        advance5_q=0;
    showBill5();
    }else{
        advance5_q=this.value;
        advance5Bill="";
    showBill5();

    }
    });


    function showBill5(){
    document.getElementById("totalremain5").innerHTML = (adaigi5*adaigi5_q-advance5*advance5_q); // total amount

    document.getElementById("total5").innerHTML = (rate5*rate4_q*murabah_foot5*murabah_foot5_q); // total amount
    }
    </script>
{{-- 6th --}}
<script>
    var murabah_foot6 = 1, rate6 = 1, adaigi6 = 1, advance6 = 1;

    var murabah_foot6_q=0, rate6_q=0,  adaigi6_q = 0, advance6_q = 0;


    var murabah_foot6Bill="",rate6Bill="",adaigi6Bill="",advance6Bill="";

    var total_amount=0;

    document.getElementById("murabah_foot6").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_foot6Bill="";
        murabah_foot6_q=0;
    showBill6();
    }else{
        murabah_foot6_q=this.value;
        murabah_foot6Bill="";
    showBill6();

    }
    });
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
    document.getElementById("advance6").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        advance6Bill="";
        advance6_q=0;
    showBill6();
    }else{
        advance6_q=this.value;
        advance6Bill="";
    showBill6();

    }
    });


    function showBill6(){
    document.getElementById("totalremain6").innerHTML = (adaigi6*adaigi6_q-advance6*advance6_q); // total amount

    document.getElementById("total6").innerHTML = (rate6*rate6_q*murabah_foot6*murabah_foot6_q); // total amount
    }
    </script>
{{-- 7th --}}
<script>
    var murabah_foot7 = 1, rate7 = 1, adaigi7 = 1, advance7 = 1;

    var murabah_foot7_q=0, rate7_q=0,  adaigi7_q = 0, advance7_q = 0;


    var murabah_foot7Bill="",rate7Bill="",adaigi7Bill="",advance7Bill="";

    var total_amount=0;

    document.getElementById("murabah_foot7").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_foot7Bill="";
        murabah_foot7_q=0;
    showBill7();
    }else{
        murabah_foot7_q=this.value;
        murabah_foot7Bill="";
    showBill7();

    }
    });
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
    document.getElementById("advance7").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        advance7Bill="";
        advance7_q=0;
    showBill7();
    }else{
        advance7_q=this.value;
        advance7Bill="";
    showBill7();

    }
    });


    function showBill7(){
    document.getElementById("totalremain7").innerHTML = (adaigi7*adaigi7_q-advance7*advance7_q); // total amount

    document.getElementById("total7").innerHTML = (rate7*rate7_q*murabah_foot7*murabah_foot7_q); // total amount
    }
    </script>
{{-- 8th --}}
<script>
    var murabah_foot8 = 1, rate8 = 1, adaigi8 = 1, advance8 = 1;

    var murabah_foot8_q=0, rate8_q=0,  adaigi8_q = 0, advance8_q = 0;


    var murabah_foot8Bill="",rate8Bill="",adaigi8Bill="",advance8Bill="";

    var total_amount=0;

    document.getElementById("murabah_foot8").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_foot8Bill="";
        murabah_foot8_q=0;
    showBill8();
    }else{
        murabah_foot8_q=this.value;
        murabah_foot8Bill="";
    showBill8();

    }
    });
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
    document.getElementById("advance8").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        advance8Bill="";
        advance8_q=0;
    showBill8();
    }else{
        advance8_q=this.value;
        advance8Bill="";
    showBill8();

    }
    });


    function showBill8(){
    document.getElementById("totalremain8").innerHTML = (adaigi8*adaigi8_q-advance8*advance8_q); // total amount

    document.getElementById("total8").innerHTML = (rate8*rate8_q*murabah_foot8*murabah_foot8_q); // total amount
    }
    </script>
{{-- 9th --}}
<script>
    var murabah_foot9 = 1, rate9 = 1, adaigi9 = 1, advance9 = 1;

    var murabah_foot9_q=0, rate9_q=0,  adaigi9_q = 0, advance9_q = 0;


    var murabah_foot9Bill="",rate9Bill="",adaigi9Bill="",advance9Bill="";

    var total_amount=0;

    document.getElementById("murabah_foot9").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_foot9Bill="";
        murabah_foot9_q=0;
    showBill9();
    }else{
        murabah_foot9_q=this.value;
        murabah_foot9Bill="";
    showBill9();

    }
    });
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
    document.getElementById("advance9").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        advance9Bill="";
        advance9_q=0;
    showBill9();
    }else{
        advance9_q=this.value;
        advance9Bill="";
    showBill9();

    }
    });


    function showBill9(){
    document.getElementById("totalremain9").innerHTML = (adaigi9*adaigi9_q-advance9*advance9_q); // total amount

    document.getElementById("total9").innerHTML = (rate9*rate9_q*murabah_foot9*murabah_foot9_q); // total amount
    }
    </script>

{{-- 10th --}}
<script>
    var murabah_foot10 = 1, rate10 = 1, adaigi10 = 1, advance10 = 1;

    var murabah_foot10_q=0, rate10_q=0,  adaigi10_q = 0, advance10_q = 0;


    var murabah_foot10Bill="",rate10Bill="",adaigi10Bill="",advance10Bill="";

    var total_amount=0;

    document.getElementById("murabah_foot10").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_foot10Bill="";
        murabah_foot10_q=0;
    showBill10();
    }else{
        murabah_foot10_q=this.value;
        murabah_foot10Bill="";
    showBill10();

    }
    });
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
    document.getElementById("advance10").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        advance10Bill="";
        advance10_q=0;
    showBill10();
    }else{
        advance10_q=this.value;
        advance10Bill="";
    showBill10();

    }
    });


    function showBill10(){
    document.getElementById("totalremain10").innerHTML = (adaigi10*adaigi10_q-advance10*advance10_q); // total amount

    document.getElementById("total10").innerHTML = (rate10*rate10_q*murabah_foot10*murabah_foot10_q); // total amount
    }
    </script>
{{-- 11th --}}
<script>
    var murabah_foot11 = 1, rate11 = 1, adaigi11 = 1, advance11= 1;

    var murabah_foot11_q=0, rate11_q=0,  adaigi11_q = 0, advance11_q = 0;


    var murabah_foot11Bill="",rate11Bill="",adaigi11Bill="",advance11Bill="";

    var total_amount=0;

    document.getElementById("murabah_foot11").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        murabah_foot11Bill="";
        murabah_foot11_q=0;
    showBill11();
    }else{
        murabah_foot11_q=this.value;
        murabah_foot11Bill="";
    showBill11();

    }
    });
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
    document.getElementById("adaigi11").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        adaigi11Bill="";
        adaigi11_q=0;
    showBill11();
    }else{
        adaigi11_q=this.value;
        adaigi11Bill="";
    showBill11();

    }
    });
    document.getElementById("advance11").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        advance11Bill="";
        advance11_q=0;
    showBill11();
    }else{
        advance11_q=this.value;
        advance11Bill="";
    showBill11();

    }
    });


    function showBill11(){
    document.getElementById("totalremain11").innerHTML =
    (adaigi1*adaigi1_q-advance1*advance1_q)
    +(adaigi2*adaigi2_q-advance2*advance2_q)
    +(adaigi3*adaigi3_q-advance3*advance3_q)
    +(adaigi4*adaigi4_q-advance4*advance4_q)
    +(adaigi5*adaigi5_q-advance5*advance5_q)
    +(adaigi6*adaigi6_q-advance6*advance6_q)
    +(adaigi7*adaigi7_q-advance7*advance7_q)
    +(adaigi8*adaigi8_q-advance8*advance8_q)
    +(adaigi9*adaigi9_q-advance9*advance9_q)
    +(adaigi10*adaigi10_q-advance10*advance10_q)
    // +(adaigi11*adaigi11_q-advance11*advance11_q);


    document.getElementById("total11").innerHTML =

    (rate1*rate1_q*murabah_foot1*murabah_foot1_q)
    +(rate2*rate2_q*murabah_foot2*murabah_foot2_q)
    +(rate3*rate3_q*murabah_foot3*murabah_foot3_q)
    +(rate4*rate4_q*murabah_foot4*murabah_foot4_q)
    +(rate5*rate5_q*murabah_foot5*murabah_foot5_q)
    +(rate6*rate6_q*murabah_foot6*murabah_foot6_q)
    +(rate7*rate7_q*murabah_foot7*murabah_foot7_q)
    +(rate8*rate8_q*murabah_foot8*murabah_foot8_q)
    +(rate9*rate9_q*murabah_foot9*murabah_foot9_q)
    +(rate10*rate10_q*murabah_foot10*murabah_foot10_q)
    +(rate11*rate11_q*murabah_foot11*murabah_foot11_q);
    }
    </script>





