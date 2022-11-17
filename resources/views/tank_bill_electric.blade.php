

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
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> بل الیکٹرک ورکس بنام دفتر تحریک جدید</strong></h4>
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong>تعمیر ٹربائین واٹر ٹینک دارالفتوح</strong></h4>
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

            <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">ٹوٹل قسط رقم</td>
            <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">قسط</td>
            <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">سکیورٹی ریٹ</td>
            <td style="text-align: center;width: 20px;font-size:15px;font-family: Jameel Noori;">ٹوٹل رقم </td>
            <td style="text-align: center;width: 60px;font-size:15px;font-family: Jameel Noori;">تفصیل</td>
            <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">ادائیگی</td>
            <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">ریٹ</td>
            <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">کورڈ ایریا </td>
            <td style="text-align: center;width: 40px;font-size:15px;font-family: Jameel Noori;">تاریخ</th>
            <td style="text-align: center;width: 10px;font-size:15px;font-family: Jameel Noori;">نمبر شمار</td>


        </tr>
        <tr>

            <td dir="auto"><span id="totalqist"></span></td>

            <td dir="auto"><input type="text"  id="qist1"></td>
            <td dir="auto"><input type="text"  id="security_rate1"></td>
            <td dir="auto"><span id="total"></span></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  id="adaigi1"></td>
            <td dir="auto"><input type="text"  id="rate1"></td>
            <td dir="auto"><input type="text"  id="covered_area1"></td>
            <td dir="auto"><input type="text"  ></td>


            <td>1</td>

        </tr>

        <tr>

            <td dir="auto"><span id="totalqist2"></span></td>

            <td dir="auto"><input type="text"  id="qist2"></td>
            <td dir="auto"><input type="text"  id="security_rate2"></td>
            <td dir="auto"><span id="total2"></span></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  id="adaigi2"></td>
            <td dir="auto"><input type="text"  id="rate2"></td>
            <td dir="auto"><input type="text"  id="covered_area2"></td>
            <td dir="auto"><input type="text"  ></td>

            <td>2</td>

        </tr>
        <tr>

            <td dir="auto"><span id="totalqist3"></span></td>

            <td dir="auto"><input type="text"  id="qist3"></td>
            <td dir="auto"><input type="text"  id="security_rate3"></td>
            <td dir="auto"><span id="total3"></span></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  id="adaigi3"></td>
            <td dir="auto"><input type="text"  id="rate3"></td>
            <td dir="auto"><input type="text"  id="covered_area3"></td>
            <td dir="auto"><input type="text"  ></td>
            <td>3</td>

        </tr>
        <tr>
            <td dir="auto"><span id="totalqist4"></span></td>

            <td dir="auto"><input type="text"  id="qist4"></td>
            <td dir="auto"><input type="text"  id="security_rate4"></td>
            <td dir="auto"><span id="total4"></span></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  id="adaigi4"></td>
            <td dir="auto"><input type="text"  id="rate4"></td>
            <td dir="auto"><input type="text"  id="covered_area4"></td>
            <td dir="auto"><input type="text"  ></td>

            <td>4</td>

        </tr>
        <tr>

            <td dir="auto"><span id="totalqist5"></span></td>

            <td dir="auto"><input type="text"  id="qist5"></td>
            <td dir="auto"><input type="text"  id="security_rate5"></td>
            <td dir="auto"><span id="total5"></span></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  id="adaigi5"></td>
            <td dir="auto"><input type="text"  id="rate5"></td>
            <td dir="auto"><input type="text"  id="covered_area5"></td>
            <td dir="auto"><input type="text"  ></td>
            <td>5</td>

        </tr>
        <tr>
            <td dir="auto"><span id="totalqist6"></span></td>

            <td dir="auto"><input type="text"  id="qist6"></td>
            <td dir="auto"><input type="text"  id="security_rate6"></td>
            <td dir="auto"><span id="total6"></span></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  id="adaigi6"></td>
            <td dir="auto"><input type="text"  id="rate6"></td>
            <td dir="auto"><input type="text"  id="covered_area6"></td>
            <td dir="auto"><input type="text"  ></td>

            <td>6</td>

        </tr>
        <tr>

            <td dir="auto"><span id="totalqist7"></span></td>

            <td dir="auto"><input type="text"  id="qist7"></td>
            <td dir="auto"><input type="text"  id="security_rate7"></td>
            <td dir="auto"><span id="total7"></span></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  id="adaigi7"></td>
            <td dir="auto"><input type="text"  id="rate7"></td>
            <td dir="auto"><input type="text"  id="covered_area7"></td>
            <td dir="auto"><input type="text"  ></td>
            <td>7</td>

        </tr>
        <tr>

           <td dir="auto"><span id="totalqist8"></span></td>

            <td dir="auto"><input type="text"  id="qist8"></td>
            <td dir="auto"><input type="text"  id="security_rate8"></td>
            <td dir="auto"><span id="total8"></span></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  id="adaigi8"></td>
            <td dir="auto"><input type="text"  id="rate8"></td>
            <td dir="auto"><input type="text"  id="covered_area8"></td>
            <td dir="auto"><input type="text"  ></td>
            <td>8</td>

        </tr>
        <tr>

            <td dir="auto"><span id="totalqist9"></span></td>

            <td dir="auto"><input type="text"  id="qist9"></td>
            <td dir="auto"><input type="text"  id="security_rate9"></td>
            <td dir="auto"><span id="total9"></span></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  id="adaigi9"></td>
            <td dir="auto"><input type="text"  id="rate9"></td>
            <td dir="auto"><input type="text"  id="covered_area9"></td>
            <td dir="auto"><input type="text"  ></td>

            <td>9</td>

        </tr>
        <tr>

            <td dir="auto"><span id="totalqist10"></span></td>

            <td dir="auto"><input type="text"  id="qist10"></td>
            <td dir="auto"><input type="text"  id="security_rate10"></td>
            <td dir="auto"><span id="total10"></span></td>
            <td dir="auto"><input type="text"  ></td>
            <td dir="auto"><input type="text"  id="adaigi10"></td>
            <td dir="auto"><input type="text"  id="rate10"></td>
            <td dir="auto"><input type="text"  id="covered_area10"></td>
            <td dir="auto"><input type="text"  ></td>
            <td>10</td>

        </tr>
        <tr>
           <td dir="auto"><span id="totalqist11"></span></td>

            <td style="font-family: Jameel Noori;">میزان<input type="hidden"  id="qist11"></td>
            <td dir="auto"><input type="text"  id="security_rate11"></td>
            <td dir="auto"><span  id="total11"></span></td>
            <td dir="auto"></td>
            <td dir="auto"><input type="text"  id="adaigi11"></td>
            <td dir="auto"><input type="text"  id="rate11"></td>
            <td dir="auto"><input type="text"  id="covered_area11"></td>
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
var covered_area1 = 1, rate1 = 1, adaigi1 = 1, security_rate1 = 1, qist1=1;

var covered_area1_q=0, rate1_q=0,  adaigi1_q = 0, security_rate1_q=0, qist1_q=0;


var covered_area1Bill="",rate1Bill="",adaigi1Bill="",security_rate1Bill="",qist1Bill="";

var total_amount=0;

document.getElementById("covered_area1").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
    covered_area1Bill="";
    covered_area1_q=0;
showBill();
}else{
    covered_area1_q=this.value;
    covered_area1Bill="";
showBill();

}
});
document.getElementById("qist1").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
qist1Bill="";
qist1_q=0;
showBill();
}else{
qist1_q=this.value;
qist1Bill="";
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



function showBill(){
document.getElementById("totalqist").innerHTML = (security_rate1*security_rate1_q-qist1*qist1_q); // total amount

document.getElementById("total").innerHTML = (covered_area1*covered_area1_q*rate1*rate1_q*adaigi1*adaigi1_q); // total amount
}
</script>

{{-- 2nd --}}

<script>
var covered_area2 = 1, rate2 = 1, adaigi2 = 1, security_rate2 = 1, qist2=1;

var covered_area2_q=0, rate2_q=0,  adaigi2_q = 0, security_rate2_q =0, qist2_q=0;


var covered_area2Bill="",rate2Bill="",adaigi2Bill="",security_rate2Bill="",qist2Bill="";

var total_amount=0;

document.getElementById("covered_area2").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
    covered_area2Bill="";
    covered_area2_q=0;
showBill2();
}else{
    covered_area2_q=this.value;
    covered_area2Bill="";
showBill2();

}
});
document.getElementById("qist2").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
qist2Bill="";
qist2_q=0;
showBill2();
}else{
qist2_q=this.value;
qist2Bill="";
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



function showBill2(){
document.getElementById("totalqist2").innerHTML = (security_rate2*security_rate2_q-qist2*qist2_q); // total amount

document.getElementById("total2").innerHTML = (covered_area2*covered_area2_q*rate2*rate2_q*adaigi2*adaigi2_q); // total amount
}
</script>

{{-- 3rd --}}

<script>
var covered_area3 = 1, rate3 = 1, adaigi3 = 1, security_rate3 = 1, qist3=1;

var covered_area3_q=0, rate3_q=0,  adaigi3_q = 0, security_rate3_q =0, qist3_q=0;


var covered_area3Bill="",rate3Bill="",adaigi3Bill="",security_rate3Bill="",qist3Bill="";

var total_amount=0;

document.getElementById("covered_area3").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
    covered_area3Bill="";
    covered_area3_q=0;
showBill3();
}else{
    covered_area3_q=this.value;
    covered_area3Bill="";
showBill3();

}
});
document.getElementById("qist3").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
qist3Bill="";
qist3_q=0;
showBill3();
}else{
qist3_q=this.value;
qist3Bill="";
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



function showBill3(){
document.getElementById("totalqist3").innerHTML = (security_rate3*security_rate3_q-qist3*qist3_q); // total amount

document.getElementById("total3").innerHTML = (covered_area3*covered_area3_q*rate3*rate3_q*adaigi3*adaigi3_q); // total amount
}
</script>

{{-- 4th --}}
<script>
var covered_area4 = 1, rate4 = 1, adaigi4 = 1, security_rate4 = 1, qist4=1;

var covered_area4_q=0, rate4_q=0,  adaigi4_q = 0, security_rate4_q =0, qist4_q=0;


var covered_area4Bill="",rate4Bill="",adaigi4Bill="",security_rate4Bill="",qist4Bill="";

var total_amount=0;

document.getElementById("covered_area4").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
    covered_area4Bill="";
    covered_area4_q=0;
showBill4();
}else{
    covered_area4_q=this.value;
    covered_area4Bill="";
showBill4();

}
});
document.getElementById("qist4").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
qist4Bill="";
qist4_q=0;
showBill4();
}else{
qist4_q=this.value;
qist4Bill="";
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



function showBill4(){
document.getElementById("totalqist4").innerHTML = (security_rate4*security_rate4_q-qist4*qist4_q); // total amount

document.getElementById("total4").innerHTML = (covered_area4*covered_area4_q*rate4*rate4_q*adaigi4*adaigi4_q); // total amount
}
</script>
{{-- 5th --}}
<script>
var covered_area5 = 1, rate5 = 1, adaigi5 = 1, security_rate5 = 1, qist5=1;

var covered_area5_q=0, rate5_q=0,  adaigi5_q = 0, security_rate5_q =0, qist5_q=0;


var covered_area5Bill="",rate5Bill="",adaigi5Bill="",security_rate5Bill="",qist5Bill="";

var total_amount=0;

document.getElementById("covered_area5").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
    covered_area5Bill="";
    covered_area5_q=0;
showBill5();
}else{
    covered_area5_q=this.value;
    covered_area5Bill="";
showBill5();

}
});
document.getElementById("qist5").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
qist5Bill="";
qist5_q=0;
showBill5();
}else{
qist5_q=this.value;
qist5Bill="";
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



function showBill5(){
document.getElementById("totalqist5").innerHTML = (security_rate5*security_rate5_q-qist5*qist5_q); // total amount

document.getElementById("total5").innerHTML = (covered_area5*covered_area5_q*rate5*rate5_q*adaigi5*adaigi5_q); // total amount
}
</script>
{{-- 6th --}}
<script>
var covered_area6 = 1, rate6 = 1, adaigi6 = 1, security_rate6 = 1, qist6=1;

var covered_area6_q=0, rate6_q=0,  adaigi6_q = 0, security_rate6_q =0, qist6_q=0;


var covered_area6Bill="",rate6Bill="",adaigi6Bill="",security_rate6Bill="",qist6Bill="";

var total_amount=0;

document.getElementById("covered_area6").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
    covered_area6Bill="";
    covered_area6_q=0;
showBill6();
}else{
    covered_area6_q=this.value;
    covered_area6Bill="";
showBill6();

}
});
document.getElementById("qist6").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
qist6Bill="";
qist6_q=0;
showBill6();
}else{
qist6_q=this.value;
qist6Bill="";
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



function showBill6(){
document.getElementById("totalqist6").innerHTML = (security_rate6*security_rate6_q-qist6*qist6_q); // total amount

document.getElementById("total6").innerHTML = (covered_area6*covered_area6_q*rate6*rate6_q*adaigi6*adaigi6_q); // total amount
}
</script>
{{-- 7th --}}
<script>
var covered_area7 = 1, rate7 = 1, adaigi7 = 1, security_rate7 = 1, qist7=1;

var covered_area7_q=0, rate7_q=0,  adaigi7_q = 0, security_rate7_q =0, qist7_q=0;


var covered_area7Bill="",rate7Bill="",adaigi7Bill="",security_rate7Bill="",qist7Bill="";

var total_amount=0;

document.getElementById("covered_area7").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
    covered_area7Bill="";
    covered_area7_q=0;
showBill7();
}else{
    covered_area7_q=this.value;
    covered_area7Bill="";
showBill7();

}
});
document.getElementById("qist7").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
qist7Bill="";
qist7_q=0;
showBill7();
}else{
qist7_q=this.value;
qist7Bill="";
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



function showBill7(){
document.getElementById("totalqist7").innerHTML = (security_rate7*security_rate7_q-qist7*qist7_q); // total amount

document.getElementById("total7").innerHTML = (covered_area7*covered_area7_q*rate7*rate7_q*adaigi7*adaigi7_q); // total amount
}
</script>


{{-- 8th --}}
<script>
var covered_area8 = 1, rate8 = 1, adaigi8 = 1, security_rate8 = 1, qist8=1;

var covered_area8_q=0, rate8_q=0,  adaigi8_q = 0, security_rate8_q =0, qist8_q=0;


var covered_area8Bill="",rate8Bill="",adaigi8Bill="",security_rate8Bill="",qist8Bill="";

var total_amount=0;

document.getElementById("covered_area8").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
    covered_area8Bill="";
    covered_area8_q=0;
showBill8();
}else{
    covered_area8_q=this.value;
    covered_area8Bill="";
showBill8();

}
});
document.getElementById("qist8").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
qist8Bill="";
qist8_q=0;
showBill8();
}else{
qist8_q=this.value;
qist8Bill="";
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



function showBill8(){
document.getElementById("totalqist8").innerHTML = (security_rate8*security_rate8_q-qist8*qist8_q); // total amount

document.getElementById("total8").innerHTML = (covered_area8*covered_area8_q*rate8*rate8_q*adaigi8*adaigi8_q); // total amount
}
</script>

{{-- 9th --}}
<script>
var covered_area9 = 1, rate9 = 1, adaigi9 = 1, security_rate9 = 1, qist9=1;

var covered_area9_q=0, rate9_q=0,  adaigi9_q = 0, security_rate9_q =0, qist9_q=0;


var covered_area9Bill="",rate9Bill="",adaigi9Bill="",security_rate9Bill="",qist9Bill="";

var total_amount=0;

document.getElementById("covered_area9").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
    covered_area9Bill="";
    covered_area9_q=0;
showBill9();
}else{
    covered_area9_q=this.value;
    covered_area9Bill="";
showBill9();

}
});
document.getElementById("qist9").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
qist9Bill="";
qist9_q=0;
showBill9();
}else{
qist9_q=this.value;
qist9Bill="";
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



function showBill9(){
document.getElementById("totalqist9").innerHTML = (security_rate9*security_rate9_q-qist9*qist9_q); // total amount

document.getElementById("total9").innerHTML = (covered_area9*covered_area9_q*rate9*rate9_q*adaigi9*adaigi9_q); // total amount
}
</script>
{{-- 10th --}}
<script>
var covered_area10 = 1, rate10 = 1, adaigi10 = 1, security_rate10 = 1, qist10=1;

var covered_area10_q=0, rate10_q=0,  adaigi10_q = 0, security_rate10_q =0, qist10_q=0;


var covered_area10Bill="",rate10Bill="",adaigi10Bill="",security_rate10Bill="",qist10Bill="";

var total_amount=0;

document.getElementById("covered_area10").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
    covered_area10Bill="";
    covered_area10_q=0;
showBill10();
}else{
    covered_area10_q=this.value;
    covered_area10Bill="";
showBill10();

}
});
document.getElementById("qist10").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
qist10Bill="";
qist10_q=0;
showBill10();
}else{
qist10_q=this.value;
qist10Bill="";
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



function showBill10(){
document.getElementById("totalqist10").innerHTML = (security_rate10*security_rate10_q-qist10*qist10_q); // total amount

document.getElementById("total10").innerHTML = (covered_area10*covered_area10_q*rate10*rate10_q*adaigi10*adaigi10_q); // total amount
}
</script>
{{-- 11th --}}
<script>
var covered_area11 = 1, rate11 = 1, adaigi11 = 1, security_rate11 = 1, qist11=1;

var covered_area11_q=0, rate11_q=0,  adaigi11_q = 0, security_rate11_q =0, qist11_q=0;


var covered_area11Bill="",rate11Bill="",adaigi11Bill="",security_rate11Bill="",qist11Bill="";

var total_amount=0;

document.getElementById("covered_area11").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
    covered_area11Bill="";
    covered_area11_q=0;
showBill11();
}else{
    covered_area11_q=this.value;
    covered_area11Bill="";
showBill11();

}
});
document.getElementById("qist11").addEventListener("keyup",function(){
if(this.value==""||this.value==0){
qist11Bill="";
qist11_q=0;
showBill11();
}else{
qist11_q=this.value;
qist11Bill="";
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

    function showBill11(){
    document.getElementById("totalqist11").innerHTML =
    (security_rate1*security_rate1_q-qist1*qist1_q)
    +(security_rate2*security_rate2_q-qist2*qist2_q)
    +(security_rate3*security_rate3_q-qist3*qist3_q)
    +(security_rate4*security_rate4_q-qist4*qist4_q)
    +(security_rate5*security_rate5_q-qist5*qist5_q)
    +(security_rate6*security_rate6_q-qist6*qist6_q)
    +(security_rate7*security_rate7_q-qist7*qist7_q)
    +(security_rate8*security_rate8_q-qist8*qist8_q)
    +(security_rate9*security_rate9_q-qist9*qist9_q)
    +(security_rate10*security_rate10_q-qist10*qist10_q)
    // +(security_rate11*security_rate11_q-qist11*qist11_q);
    // +(adaigi11*adaigi11_q-advance11*advance11_q);


    document.getElementById("total11").innerHTML =

    (covered_area1*covered_area1_q*rate1*rate1_q*adaigi1*adaigi1_q)
    +(covered_area2*covered_area2_q*rate2*rate2_q*adaigi2*adaigi2_q)
    +(covered_area3*covered_area3_q*rate3*rate3_q*adaigi3*adaigi3_q)
    +(covered_area4*covered_area4_q*rate4*rate4_q*adaigi4*adaigi4_q)
    +(covered_area5*covered_area5_q*rate5*rate5_q*adaigi5*adaigi5_q)
    +(covered_area6*covered_area6_q*rate6*rate6_q*adaigi6*adaigi6_q)
    +(covered_area7*covered_area7_q*rate7*rate7_q*adaigi7*adaigi7_q)
    +(covered_area8*covered_area8_q*rate8*rate8_q*adaigi8*adaigi8_q)
    +(covered_area9*covered_area9_q*rate9*rate9_q*adaigi9*adaigi9_q)
    +(covered_area10*covered_area10_q*rate10*rate10_q*adaigi10*adaigi10_q)
    +(covered_area11*covered_area11_q*rate11*rate11_q*adaigi11*adaigi11_q);
    }
    </script>





