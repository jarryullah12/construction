
<?php
use App\Http\Controllers\quater;


  $total=quater::cartItem_cable();
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
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> بل سول ورکس،الیکٹرک،کیبل ڈکٹ بنام تحریک جدید</strong></h4>
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> مرمت دفاتر  </strong></h4>
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

						<tr style="text-align: center">
							<td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">ٹوٹل رقم</td>
							{{-- <td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">کل یوم</td> --}}
							<td style="text-align: center;width: 50px;font-size:16px;font-family: Jameel Noori;">تفصیل</td>
							<td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;"> دفتر کا نام</td>
							{{-- <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">مکام</td> --}}
							{{-- <td style="text-align: center;width: 30px;font-size:15px;font-family: Jameel Noori;">بروز</td> --}}
							<td style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">تاریخ</td>
							<td style="text-align: center;width: 10px;font-size:16px;font-family: Jameel Noori;">   نمبر شمار</td>


						</tr>
                        <tr>

                            <td dir="auto"><input type="text" ></td>

                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            {{-- <td dir="auto"><input type="text" ></td> --}}

                            <td>1</td>

                        </tr>

                        <tr>

                            <td dir="auto"><input type="text" ></td>

                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            {{-- <td dir="auto"><input type="text" ></td> --}}

                            <td>2</td>

                        </tr>
                        <tr>

                            <td dir="auto"><input type="text" ></td>

                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            {{-- <td dir="auto"><input type="text" ></td> --}}

                            <td>3</td>

                        </tr>
                        <tr>

                            <td dir="auto"><input type="text" ></td>

                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            {{-- <td dir="auto"><input type="text" ></td> --}}

                            <td>4</td>

                        </tr>
                        <tr>

                            <td dir="auto"><input type="text" ></td>

                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            {{-- <td dir="auto"><input type="text" ></td> --}}

                            <td>5</td>

                        </tr>
                        <tr>
                            <td dir="auto"><input type="text" ></td>

                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            {{-- <td dir="auto"><input type="text" ></td> --}}

                            <td>6</td>

                        </tr>
                        <tr>

                            <td dir="auto"><input type="text" ></td>

                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            {{-- <td dir="auto"><input type="text" ></td> --}}
                            <td>7</td>

                        </tr>
                        <tr>

                            <td dir="auto"><input type="text" ></td>

                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            {{-- <td dir="auto"><input type="text" ></td> --}}
                            <td>8</td>

                        </tr>
                        <tr>

                            <td dir="auto"><input type="text" ></td>

                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            {{-- <td dir="auto"><input type="text" ></td> --}}

                            <td>9</td>

                        </tr>
                        <tr>

                            <td dir="auto"><input type="text" ></td>

                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            {{-- <td dir="auto"><input type="text" ></td> --}}
                            <td>10</td>

                        </tr>
                        <tr>
                            <td dir="auto"><input type="text" ></td>
                            <td style="font-family: Jameel Noori;">میزان</td>
                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            <td dir="auto"><input type="text" ></td>
                            {{-- <td></td> --}}

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

