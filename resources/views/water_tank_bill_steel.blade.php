
<?php
use App\Http\Controllers\ishya;


  $total=ishya::cartItem_steel();
?>
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

			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> بل اسٹیل ڈیکوریٹر بنام دفتر تحریک جدید</strong></h4>
			<h4 style="text-align:center;font-size:18px;font-family: Jameel Noori;"><strong> واٹر ٹینک دارالفتوح </strong></h4>
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

			<div class="table-responsive">
				<table >
					<thead >
						<tr style="text-align: center">
							<th style="text-align: center;width: 100px;font-family: Jameel Noori;">ٹوٹل رقم</th>
							<th style="text-align: center;width: 100px;font-size:16px;font-family: Jameel Noori;">  تفصیل</th>

							<th style="text-align: center;width: 100px;font-size:16px;font-family: Jameel Noori;">  کرایہ چکر</th>

							<th style="text-align: center;width: 100px;font-size:16px;font-family: Jameel Noori;">  وزن ( کلوگرام)</th>
							<th style="text-align: center;width: 100px;font-size:16px;font-family: Jameel Noori;">  وزن (فی کلوگرام)</th>

							<th style="text-align: center;width: 100px;font-size:16px;font-family: Jameel Noori;">  ریٹ</th>
							<th style="text-align: center;width: 100px;font-size:16px;font-family: Jameel Noori;">  تعداد</th>


							<th style="text-align: center;width: 30px;font-size:16px;font-family: Jameel Noori;">تاریخ</th>


						</tr>
					</thead>
					<tbody>

                        @foreach($cols  as $col)

						<tr>
							<td style="font-size:16px;font-family: Jameel Noori;">{{($col['amount']*$col['per_kg'])*$col['rate']+$col['kraya_chakr']}}</td>
							<td style="font-size:16px;font-family: Jameel Noori;">{{$col['detail']}}</td>

							<td style="font-size:16px;font-family: Jameel Noori;">{{$col['kraya_chakr']}}</td>
							<td style="font-size:16px;font-family: Jameel Noori;">{{$col['amount']*$col['per_kg']}}</td>
							<td style="font-size:16px;font-family: Jameel Noori;">{{$col['per_kg']}}</td>

							<td style="font-size:16px;font-family: Jameel Noori;">{{$col['rate']}}</td>
							<td style="font-size:16px;font-family: Jameel Noori;">{{$col['amount']}}</td>


							<td style="font-size:16px;font-family: Jameel Noori;">{{$col['date']}}</td>


						</tr>
                        @endforeach



						<tr>

							<td style="font-size:16px;font-family: Jameel Noori;"> {{(($col['amount']*$col['per_kg'])*$col['rate']+$col['kraya_chakr'])*$total}}</td>

                                <div class="col-md-12 col-sm-6 text-right" style="font-size:16px;font-family: Jameel Noori;  ">
                                    {{$col['decorator_name']}}
                                    <strong style="font-size:18px;font-family: Jameel Noori;"> : ڈیکوریٹر کا نام </strong>
                                </div>
                                <br><br>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>


						</tr>


					</tbody>
				</table>
			</div>

            <br>
            <table style="border: #fff">
                <tr>
                <th style="text-align:left;font-size:18px;font-family: Jameel Noori;border: #fff;"><strong>دستخط نگران مرمت:</strong> ۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔</th>
                <th style="text-align:right;font-size:18px;font-family: Jameel Noori;border: #fff;"><strong>دستخط محرر:</strong> ۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔</th>


                </tr>
                <tr>

                <th style="text-align:left;font-size:18px;font-family: Jameel Noori;border: #fff;"><strong>دستخط وکیل المال ثالث:</strong> ۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔</th>
                <th style="text-align:right;font-size:18px;font-family: Jameel Noori;border: #fff;"><strong>دستخط اوورسیئر:</strong> ۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔۔</th>

                </tr>
                </table>
            <div>

        </div>
	</div>


</div>










<button style="float:right;font-size:16px;font-family: Jameel Noori;" onClick="window.print()"><strong>پرنٹ نکالیں</strong></button>
            <button style="float:right;font-size:16px;font-family: Jameel Noori;" ><strong><a style="text-decoration: none; color:black;" href={{"delete_steel_bill/".$col['id']}}>ختم کریں</a></strong></button>





<style>
    table, td, th {
      border: 1px solid #000;
      text-align: center;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 2px;
    }
    </style>

