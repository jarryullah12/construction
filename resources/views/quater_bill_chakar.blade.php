
<?php
use App\Http\Controllers\quater;


  $total=quater::cartItem_carpenter();
?>
@if(Session::has('user'))

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

  <style>
    @font-face {
        font-family: Jameel Noori;
        src: url('{{asset('maalsaalas_style/scss/Jameel Noori Nastaleeq Regular.ttf')}}');

    }
</style>















<div>
	<div class="panel panel-default text-center" >
		<div class="panel-body  " >

			<div class="row">
            <h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong>   کیش میمو</strong></h4>
            <br>
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> بل کرایہ چکر بنام دفتر تحریک جدید</strong></h4>
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> مرمت کوارٹرز</strong></h4>
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



        </tr>
			  <div class="table-responsive">
				<table style="border: 1px solid black">
                    <tbody>
                        <tr>

							<td style="text-align: center;width: 20px;font-family: Jameel Noori;">ٹوٹل رقم</td>


							<td style="text-align: center;width: 90px;font-size:16px;font-family: Jameel Noori;">تفصیل</td>
							<td style="text-align: center;width: 20px;font-size:16px;font-family: Jameel Noori;">چکر</td>
							<td style="text-align: center;width: 20px;font-size:16px;font-family: Jameel Noori;">تاریخ</td>
							<td style="text-align: center;width: 10px;font-size:16px;font-family: Jameel Noori;"> نمبر شمار</td>




						</tr>
                    <tr>

                       <td dir="auto"><input type="text"  ></td>

            
                        <td dir="auto"><input type="text"  ></td>

                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" id="days1"></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" ></td>
                        <td>1</td>

                    </tr>

                    <tr>

                    <td dir="auto"><input type="text"  ></td>
            
                    <td dir="auto"><input type="text"  ></td>

                    <td dir="auto"><input type="text" style="font-family: Jameel Noori;" id="days1"></td>
                    <td dir="auto"><input type="text" style="font-family: Jameel Noori;" ></td>

                        <td>2</td>

                    </tr>
                    <tr>

                    <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text"  ></td>

                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" id="days1"></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" ></td>

                        <td>3</td>

                    </tr>
                    <tr>

                    <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" id="days1"></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" ></td>

                        <td>4</td>

                    </tr>
                    <tr>

                        <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" id="days1"></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" ></td>

                        <td>5</td>

                    </tr>
                    <tr>
                    <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" id="days1"></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" ></td>

                        <td>6</td>

                    </tr>
                    <tr>

                    <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" id="days1"></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" ></td>

                        <td>7</td>

                    </tr>
                    <tr>

                    <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" id="days1"></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" ></td>

                        <td>8</td>

                    </tr>
                    <tr>

                    <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" id="days1"></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" ></td>

                        <td>9</td>

                    </tr>
                    <tr>

                    <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" id="days1"></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" ></td>

                        <td>10</td>

                    </tr>
                    <tr>
                    <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text"  ></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" id="days1"></td>
                        <td dir="auto"><input type="text" style="font-family: Jameel Noori;" ></td>

                        <td></td>

                    </tr>
                    {{-- <tr>

                        <td dir="auto"></td>
                        <td></td>

                        <td dir="auto"><input type="text" ></td>
                        <td style="font-family: Jameel Noori;">فی  یومیہ ریٹ</td>

                        <td dir="auto"><input type="text" ></td>

                        <td dir="auto"><input type="text" ></td>

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



<!-- 

<script>
var total1 = 1, amount1 = 1, size1 = 1, days1 = 1;
var rate1_q=0, amount1_q=0,  size1_q = 0, days1_q = 0;


var rate1Bill="",amount1Bill="",size1Bill="",days1Bill="";

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


function showBill(){

    document.getElementById("total").innerHTML = (rate1*rate1_q*amount1*amount1_q*size1*size1_q*days1*days1_q); // total amount
}
</script>

{{-- 2nd --}}

<script>
    var rate2 = 1, amount2 = 1, size2 = 1, days2 = 1;
    var rate2_q=0, amount2_q=0,  size2_q = 0, days2_q = 0;


    var rate2Bill="",amount2Bill="",size2Bill="",days2Bill="";

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


    function showBill2(){

        document.getElementById("total2").innerHTML = (rate2*rate2_q*amount2*amount2_q*size2*size2_q*days2*days2_q); // total amount
    }
    </script>
{{-- 3rd --}}

<script>
    var rate3 = 1, amount3 = 1, size3 = 1, days3 = 1;
    var rate3_q=0, amount3_q=0,  size3_q = 0, days3_q = 0;


    var rate3Bill="",amount3Bill="",size3Bill="",days3Bill="";

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


    function showBill3(){

        document.getElementById("total3").innerHTML = (rate3*rate3_q*amount3*amount3_q*size3*size3_q*days3*days3_q); // total amount
    }
    </script>
{{-- 4th --}}

<script>
    var rate4 = 1, amount4 = 1, size4 = 1, days4 = 1;
    var rate4_q=0, amount4_q=0,  size4_q = 0, days4_q = 0;


    var rate4Bill="",amount4Bill="",size4Bill="",days4Bill="";

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


    function showBill4(){

        document.getElementById("total4").innerHTML = (rate4*rate4_q*amount4*amount4_q*size4*size4_q*days4*days4_q); // total amount
    }
    </script>
{{-- 5th --}}
<script>
    var rate5 = 1, amount5 = 1, size5 = 1, days5 = 1;
    var rate5_q=0, amount5_q=0,  size5_q = 0, days5_q = 0;


    var rate5Bill="",amount5Bill="",size5Bill="",days5Bill="";

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


    function showBill5(){

        document.getElementById("total5").innerHTML = (rate5*rate5_q*amount5*amount5_q*size5*size5_q*days5*days5_q); // total amount
    }
    </script>
{{-- 6th --}}
<script>
    var rate6 = 1, amount6 = 1, size6 = 1, days6 = 1;
    var rate6_q=0, amount6_q=0,  size6_q = 0, days6_q = 0;


    var rate6Bill="",amount6Bill="",size6Bill="",days6ill="";

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


    function showBill6(){

        document.getElementById("total6").innerHTML = (rate6*rate6_q*amount6*amount6_q*size6*size6_q*days6*days6_q); // total amount
    }
    </script>
{{-- 7th --}}
<script>
    var rate7 = 1, amount7 = 1, size7 = 1, days7 = 1;
    var rate7_q=0, amount7_q=0,  size7_q = 0, days7_q = 0;


    var rate7Bill="",amount7Bill="",size7Bill="",days7ill="";

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


    function showBill7(){

        document.getElementById("total7").innerHTML = (rate7*rate7_q*amount7*amount7_q*size7*size7_q*days7*days7_q); // total amount
    }
    </script>
{{-- 8th --}}
<script>
    var rate8 = 1, amount8 = 1, size8 = 1, days8 = 1;
    var rate8_q=0, amount8_q=0,  size8_q = 0, days8_q = 0;


    var rate6Bill="",amount6Bill="",size6Bill="",days6ill="";

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


    function showBill8(){

        document.getElementById("total8").innerHTML = (rate8*rate8_q*amount8*amount8_q*size8*size8_q*days8*days8_q); // total amount
    }
    </script>
{{-- 9th --}}
<script>
    var rate9 = 1, amount9 = 1, size9 = 1, days9 = 1;
    var rate9_q=0, amount9_q=0,  size9_q = 0, days9_q = 0;


    var rate9Bill="",amount9Bill="",size9Bill="",days9ill="";

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
    document.getElementById("size9").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        size9Bill="";
        size9_q=0;
        showBill9();

    }else{
        size9_q=this.value;
        size9Bill="";
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


    function showBill9(){

        document.getElementById("total9").innerHTML = (rate9*rate9_q*amount9*amount9_q*size9*size9_q*days9*days9_q); // total amount
    }
    </script>
{{-- 10th --}}
<script>
    var rate10 = 1, amount10 = 1, size10 = 1, days10 = 1;
    var rate10_q=0, amount10_q=0,  size10_q = 0, days10_q = 0;


    var rate10Bill="",amount10Bill="",size10Bill="",days10ill="";

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


    function showBill10(){

        document.getElementById("total10").innerHTML = (rate10*rate10_q*amount10*amount10_q*size10*size10_q*days10*days10_q); // total amount
    }
    </script>
{{-- 11th --}}
<script>
    var rate11 = 1, amount11 = 1, size11 = 1, days11 = 1;
    var rate11_q=0, amount11_q=0,  size11_q = 0, days11_q = 0;


    var rate10Bill="",amount10Bill="",size10Bill="",days10ill="";

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
    document.getElementById("days11").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        days11Bill="";
        days11_q=0;
        showBill11();

    }else{
        days11_q=this.value;
        days11Bill="";
        showBill11();
    }
    });


function showBill11(){
        document.getElementById("total11").innerHTML =
         (rate1*rate1_q*amount1*amount1_q*size1*size1_q*days1*days1_q)+(rate2*rate2_q*amount2*amount2_q*size2*size2_q*days2*days2_q)
        +(rate3*rate3_q*amount3*amount3_q*size3*size3_q*days3*days3_q)+(rate4*rate4_q*amount4*amount4_q*size4*size4_q*days4*days4_q)
        +(rate5*rate5_q*amount5*amount5_q*size5*size5_q*days5*days5_q)+(rate6*rate6_q*amount6*amount6_q*size6*size6_q*days6*days6_q)
        +(rate7*rate7_q*amount7*amount7_q*size7*size7_q*days7*days7_q)+(rate8*rate8_q*amount8*amount8_q*size8*size8_q*days8*days8_q)
        +(rate9*rate9_q*amount9*amount9_q*size9*size9_q*days9*days9_q)+(rate10*rate10_q*amount10*amount10_q*size10*size10_q*days10*days10_q)
        +(rate11*rate11_q*amount11*amount11_q*size11*size11_q*days11*days11_q);
}

</script> -->
