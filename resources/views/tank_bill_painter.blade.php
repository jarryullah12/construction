

 <?php
 use App\Http\Controllers\quater;


   $total=quater::cartItem();

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
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> بل پینٹ و سفیدی بنام دفتر تحریک جدید</strong></h4>
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong>تعمیر ٹربائین واٹر ٹینک دارالفتوح</strong></h4>
            <hr style="border:1px solid black">

				<div class="col-md-6 col-sm-6 text-left">
					<h4><strong></strong> </h4>
					<ul class="list-unstyled">
						<li><strong> </strong> </li>
						<li><strong></strong> </li>
						<li><strong></strong> </li>
						<li><strong></strong> </li>
					{{-- </ul>
				</div>

				<div class="col-md-6 col-sm-6 text-right">

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
				<table >
					<thead >
						<tr style="text-align: center">
							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:20px;">ٹوٹل رقم</td>

							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:20px;"> فی مربع ریٹ</td>

							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:20px;"> رقبہ</td>
							<th style="text-align: center;font-size:16px;font-family: Jameel Noori;width:20px;"> قسم کام</th>
							{{-- <td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:20px;"> مقام</td> --}}
							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:20px;">تاریخ</td>
							<td style="text-align: center;font-size:16px;font-family: Jameel Noori;width:20px;"> نمبر شمار</td>


						</tr>



                        <tr>

                            <td dir="auto"><span id="total"></span></td>

                            <td dir="auto"><input type="text"  id="per_murabah_rate1"></td>
                            <td dir="auto"><input type="text"  id="rakbah1"></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >سفیدی</option>
                                <option >ڈسٹیمپر</option>
                                <option >پینٹ</option>
                                <option >ویدر شیٹ</option>
                                <option >میٹ</option>
                                <option >سپرٹ پالش</option>
                                <option >لیکر پالش</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>


                            <td>1</td>

                        </tr>

                        <tr>

                            <td dir="auto"><span id="total2"></span></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate2"></td>
                            <td dir="auto"><input type="text"  id="rakbah2"></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >سفیدی</option>
                                <option >ڈسٹیمپر</option>
                                <option >پینٹ</option>
                                <option >ویدر شیٹ</option>
                                <option >میٹ</option>
                                <option >سپرٹ پالش</option>
                                <option >لیکر پالش</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>2</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total3"></span></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate3"></td>
                            <td dir="auto"><input type="text"  id="rakbah3"></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >سفیدی</option>
                                <option >ڈسٹیمپر</option>
                                <option >پینٹ</option>
                                <option >ویدر شیٹ</option>
                                <option >میٹ</option>
                                <option >سپرٹ پالش</option>
                                <option >لیکر پالش</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>3</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total4"></span></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate4"></td>
                            <td dir="auto"><input type="text"  id="rakbah4"></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >سفیدی</option>
                                <option >ڈسٹیمپر</option>
                                <option >پینٹ</option>
                                <option >ویدر شیٹ</option>
                                <option >میٹ</option>
                                <option >سپرٹ پالش</option>
                                <option >لیکر پالش</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td>4</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total5"></span></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate5"></td>
                            <td dir="auto"><input type="text"  id="rakbah5"></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >سفیدی</option>
                                <option >ڈسٹیمپر</option>
                                <option >پینٹ</option>
                                <option >ویدر شیٹ</option>
                                <option >میٹ</option>
                                <option >سپرٹ پالش</option>
                                <option >لیکر پالش</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>5</td>

                        </tr>
                        <tr>
                            <td dir="auto"><span id="total6"></span></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate6"></td>
                            <td dir="auto"><input type="text"  id="rakbah6"></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >سفیدی</option>
                                <option >ڈسٹیمپر</option>
                                <option >پینٹ</option>
                                <option >ویدر شیٹ</option>
                                <option >میٹ</option>
                                <option >سپرٹ پالش</option>
                                <option >لیکر پالش</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>6</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total7"></span></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate7"></td>
                            <td dir="auto"><input type="text"  id="rakbah7"></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >سفیدی</option>
                                <option >ڈسٹیمپر</option>
                                <option >پینٹ</option>
                                <option >ویدر شیٹ</option>
                                <option >میٹ</option>
                                <option >سپرٹ پالش</option>
                                <option >لیکر پالش</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>
                            <td>7</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total8"></span></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate8"></td>
                            <td dir="auto"><input type="text"  id="rakbah8"></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >سفیدی</option>
                                <option >ڈسٹیمپر</option>
                                <option >پینٹ</option>
                                <option >ویدر شیٹ</option>
                                <option >میٹ</option>
                                <option >سپرٹ پالش</option>
                                <option >لیکر پالش</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>8</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total9"></span></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate9"></td>
                            <td dir="auto"><input type="text"  id="rakbah9"></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >سفیدی</option>
                                <option >ڈسٹیمپر</option>
                                <option >پینٹ</option>
                                <option >ویدر شیٹ</option>
                                <option >میٹ</option>
                                <option >سپرٹ پالش</option>
                                <option >لیکر پالش</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>9</td>

                        </tr>
                        <tr>

                            <td dir="auto"><span id="total10"></span></td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate10"></td>
                            <td dir="auto"><input type="text"  id="rakbah10"></td>
                            <td dir="auto"><select  style="font-size:16px;font-family: Jameel Noori;">
                                <option  selected></option>
                                <option >سفیدی</option>
                                <option >ڈسٹیمپر</option>
                                <option >پینٹ</option>
                                <option >ویدر شیٹ</option>
                                <option >میٹ</option>
                                <option >سپرٹ پالش</option>
                                <option >لیکر پالش</option>


                            </select></td>
                            <td dir="auto"><input type="text"  ></td>

                            <td>10</td>

                        </tr>
                        <tr>
                            <td><span id="total11"></span></td>
                            <td style="font-family: Jameel Noori;">میزان</td>
                            <td dir="auto"><input type="text"  id="per_murabah_rate11"></td>
                            <td dir="auto"><input type="text"  id="rakbah11"></td>
                            {{-- <td dir="auto"><select  >
                                <option style="font-size:16px;font-family: Jameel Noori;" selected> <h3> سلیکٹ کریں </h3></option>
                                <option style="font-size:16px;font-family: Jameel Noori;"> <h3>سفیدی </h3></option>
                                <option style="font-size:16px;font-family: Jameel Noori;"> <h3>ڈسٹیمپر </h3></option>
                                <option style="font-size:16px;font-family: Jameel Noori;"><h3>پینٹ </h3></option>
                                <option style="font-size:16px;font-family: Jameel Noori;"> <h3>ویدر شیٹ </h3></option>
                                <option style="font-size:16px;font-family: Jameel Noori;"><h3>میٹ</h3></option>
                                <option style="font-size:16px;font-family: Jameel Noori;"><h3>سپرٹ پالش</h3></option>
                                <option style="font-size:16px;font-family: Jameel Noori;"><h3> لیکر پالش </h3></option>

                            </select></td> --}}
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
    var rakbah1 = 1, per_murabah_rate1 = 1;

    var rakbah1_q=0, per_murabah_rate1_q = 0;


    var rakbah1Bill="",per_murabah_rate1Bill="";

    var total_amount=0;

    document.getElementById("rakbah1").addEventListener("keyup",function(){
    if(this.value==""||this.value==0){
        rakbah1Bill="";
        rakbah1_q=0;
        showBill();
    }else{
        rakbah1_q=this.value;
        rakbah1_qBill="";
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



    function showBill(){

        document.getElementById("total").innerHTML = (rakbah1*rakbah1_q*per_murabah_rate1*per_murabah_rate1_q); // total amount
    }
    </script>

    {{-- 2nd --}}

    <script>
        var rakbah2 = 1, per_murabah_rate2 = 1;

        var rakbah2_q=0, per_murabah_rate2_q = 0;


        var rakbah2Bill="",per_murabah_rate2Bill="";

        var total_amount=0;

        document.getElementById("rakbah2").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rakbah2Bill="";
            rakbah2_q=0;
            showBill2();
        }else{
            rakbah2_q=this.value;
            rakbah2_qBill="";
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



        function showBill2(){

            document.getElementById("total2").innerHTML = (rakbah2*rakbah2_q*per_murabah_rate2*per_murabah_rate2_q); // total amount
        }
        </script>
    {{-- 3rd --}}

    <script>
        var rakbah3 = 1, per_murabah_rate3 = 1;

        var rakbah3_q=0, per_murabah_rate3_q = 0;


        var rakbah3Bill="",per_murabah_rate3Bill="";

        var total_amount=0;

        document.getElementById("rakbah3").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rakbah3Bill="";
            rakbah3_q=0;
            showBill3();
        }else{
            rakbah3_q=this.value;
            rakbah3_qBill="";
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



        function showBill3(){

            document.getElementById("total3").innerHTML = (rakbah3*rakbah3_q*per_murabah_rate3*per_murabah_rate3_q); // total amount
        }
        </script>
    {{-- 4th --}}

    <script>
        var rakbah4 = 1, per_murabah_rate4 = 1;

        var rakbah4_q=0, per_murabah_rate4_q = 0;


        var rakbah4Bill="",per_murabah_rate4Bill="";

        var total_amount=0;

        document.getElementById("rakbah4").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rakbah4Bill="";
            rakbah4_q=0;
            showBill4();
        }else{
            rakbah4_q=this.value;
            rakbah4_qBill="";
            showBill4();

        }
        });
        document.getElementById("per_murabah_rate4").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            per_murabah_rate4Bill="";
            per_murabah_rate4_q=0;
            showBill4();
        }else{
            per_murabah_rate4_q=this.value;
            per_murabah_rate4Bill="";
            showBill4();

        }
        });



        function showBill4(){

            document.getElementById("total4").innerHTML = (rakbah4*rakbah4_q*per_murabah_rate4*per_murabah_rate4_q); // total amount
        }
        </script>
    {{-- 5th --}}
    <script>
        var rakbah5 = 1, per_murabah_rate5 = 1;

        var rakbah5_q=0, per_murabah_rate5_q = 0;


        var rakbah5Bill="",per_murabah_rate5Bill="";

        var total_amount=0;

        document.getElementById("rakbah5").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rakbah5Bill="";
            rakbah5_q=0;
            showBill5();
        }else{
            rakbah5_q=this.value;
            rakbah5_qBill="";
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



        function showBill5(){

            document.getElementById("total5").innerHTML = (rakbah5*rakbah5_q*per_murabah_rate5*per_murabah_rate5_q); // total amount
        }
        </script>
    {{-- 6th --}}
    <script>
        var rakbah6 = 1, per_murabah_rate6 = 1;

        var rakbah6_q=0, per_murabah_rate6_q = 0;


        var rakbah6Bill="",per_murabah_rate6Bill="";

        var total_amount=0;

        document.getElementById("rakbah6").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rakbah6Bill="";
            rakbah6_q=0;
            showBill6();
        }else{
            rakbah6_q=this.value;
            rakbah6_qBill="";
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



        function showBill6(){

            document.getElementById("total6").innerHTML = (rakbah6*rakbah6_q*per_murabah_rate6*per_murabah_rate6_q); // total amount
        }
        </script>
    {{-- 7th --}}
    <script>
        var rakbah7 = 1, per_murabah_rate7 = 1;

        var rakbah7_q=0, per_murabah_rate7_q = 0;


        var rakbah7Bill="",per_murabah_rate6Bill="";

        var total_amount=0;

        document.getElementById("rakbah7").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rakbah7Bill="";
            rakbah7_q=0;
            showBill7();
        }else{
            rakbah7_q=this.value;
            rakbah7_qBill="";
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



        function showBill7(){

            document.getElementById("total7").innerHTML = (rakbah7*rakbah7_q*per_murabah_rate7*per_murabah_rate7_q); // total amount
        }
        </script>
    {{-- 8th --}}
    <script>
        var rakbah8 = 1, per_murabah_rate8 = 1;

        var rakbah8_q=0, per_murabah_rate8_q = 0;


        var rakbah8Bill="",per_murabah_rate6Bill="";

        var total_amount=0;

        document.getElementById("rakbah8").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rakbah8Bill="";
            rakbah8_q=0;
            showBill8();
        }else{
            rakbah8_q=this.value;
            rakbah8_qBill="";
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



        function showBill8(){

            document.getElementById("total8").innerHTML = (rakbah8*rakbah8_q*per_murabah_rate8*per_murabah_rate8_q); // total amount
        }
        </script>
    {{-- 9th --}}
    <script>
        var rakbah9 = 1, per_murabah_rate9 = 1;

        var rakbah9_q=0, per_murabah_rate9_q = 0;


        var rakbah9Bill="",per_murabah_rate9Bill="";

        var total_amount=0;

        document.getElementById("rakbah9").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rakbah9Bill="";
            rakbah9_q=0;
            showBill9();
        }else{
            rakbah9_q=this.value;
            rakbah9_qBill="";
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



        function showBill9(){

            document.getElementById("total9").innerHTML = (rakbah9*rakbah9_q*per_murabah_rate9*per_murabah_rate9_q); // total amount
        }
        </script>
    {{-- 10th --}}
    <script>
        var rakbah10 = 1, per_murabah_rate10 = 1;

        var rakbah10_q=0, per_murabah_rate10_q = 0;


        var rakbah10Bill="",per_murabah_rate10Bill="";

        var total_amount=0;

        document.getElementById("rakbah10").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rakbah10Bill="";
            rakbah10_q=0;
            showBill10();
        }else{
            rakbah10_q=this.value;
            rakbah10_qBill="";
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



        function showBill10(){

            document.getElementById("total10").innerHTML = (rakbah10*rakbah10_q*per_murabah_rate10*per_murabah_rate10_q); // total amount
        }
        </script>
    {{-- 11th --}}
    <script>
        var rakbah11 = 1, per_murabah_rate11 = 1;

        var rakbah11_q=0, per_murabah_rate11_q = 0;


        var rakbah11Bill="",per_murabah_rate11Bill="";

        var total_amount=0;

        document.getElementById("rakbah11").addEventListener("keyup",function(){
        if(this.value==""||this.value==0){
            rakbah11Bill="";
            rakbah11_q=0;
            showBill11();
        }else{
            rakbah11_q=this.value;
            rakbah11_qBill="";
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





    function showBill11(){
            document.getElementById("total11").innerHTML =
            (rakbah1*rakbah1_q*per_murabah_rate1*per_murabah_rate1_q)
            +(rakbah2*rakbah2_q*per_murabah_rate2*per_murabah_rate2_q)
            +(rakbah3*rakbah3_q*per_murabah_rate3*per_murabah_rate3_q)
            +(rakbah4*rakbah4_q*per_murabah_rate4*per_murabah_rate4_q)
            +(rakbah5*rakbah5_q*per_murabah_rate5*per_murabah_rate5_q)
            +(rakbah6*rakbah6_q*per_murabah_rate6*per_murabah_rate6_q)
            +(rakbah7*rakbah7_q*per_murabah_rate7*per_murabah_rate7_q)
            +(rakbah8*rakbah8_q*per_murabah_rate8*per_murabah_rate8_q)
            +(rakbah9*rakbah9_q*per_murabah_rate9*per_murabah_rate9_q)
            +(rakbah10*rakbah10_q*per_murabah_rate10*per_murabah_rate10_q)
            +(rakbah11*rakbah11_q*per_murabah_rate11*per_murabah_rate11_q);


    }

    </script>
