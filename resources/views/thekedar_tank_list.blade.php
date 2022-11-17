@if(Session::has('user'))
{{ View::make('header')}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>


        <div class="page-wrapper">

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">
                <div class="row align-items-center">

                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;" ><b>    اسٹاک ٹھیکیدار  </b> </h3>
                    </div>

                </div>
            </div>

            <div class="container-fluid">


                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">

                            <div class="table-responsive">

                                <div class="topnav">
                                    <input type="button" class="btn btn-success" onclick="export_data()" style="color:white;  background-color:black; border: black" value="پرنٹ نکالیں">
                                    <br>
                                    <br>
                                    <div class="search-container">
                                      <form action="/maal_saalas/thekedar_tanks_list_search">
                                        <input type="text" dir='auto' placeholder=".............. تلاش کریں ................." name="query">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                      </form>
                                    </div>
                                  </div>

                                    <table id="customers" class="js-serial">

                                      <tr>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">تبدیل کریں  </th>
                                        {{-- <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">ختم کریں</th> --}}
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">بغیر سیکیورٹی ریٹ ٹوٹل رقم  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">ٹوٹل رقم  </th>

                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> تفصیل  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">  سکیورٹی ریٹ  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">  ادائیگی  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">  پراگرس  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> کورڈایریا </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">ریٹ  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> قسم ٹھیکیدار </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">  ٹھیکیدار کا نام </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">تاریخ</th>
                                      </tr>
                                      @foreach($cols  as $col)
                                      <tr>
                                        <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;width:200px;"><button class="btn btn-success"><a  style="color: white;" href={{"edit_thekedar_tank/" . $col['id']}}>تبدیل کریں</a></button></td>
                                        {{-- <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;width:150px;"><button class="btn btn-danger"><a  style="color: white;" href={{"thekedar_delete/" . $col['id']}}>ختم کریں</a></button></td> --}}
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:150px;">{{($col['mrubah_rate']*$col['mrubah_per_rate']*$col['progress']*$col['adaigi'])}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:150px;">{{($col['mrubah_rate']*$col['mrubah_per_rate']*$col['progress']*$col['adaigi'])/100-$col['security_rate']}}</td>

                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:1000px;">{{$col['detail']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:150px;">{{$col['security_rate']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:150px;">{{$col['adaigi']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:150px;">{{$col['progress']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:150px;">{{$col['mrubah_per_rate']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:150px;">{{$col['mrubah_rate']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:150px;">{{$col['thekedar_type']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:150px;">{{$col['thekedar_name']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:290px;">{{$col['date']}}</td>

                                      </tr>
                                      @endforeach
                                    </table>

                                    <br>
                                    <div style="text-align: center">
                                    {{$cols->links('pagination::bootstrap-4')}}
                                        </div>
                                        <style>
                                        .w-5{
                                            display:none;
                                        }
                                        </style>
                                <br>

<div>
</div>


                            </div>
                        </div>
                    </div>
                </div>

            </div></div>
            {{ View::make('footer')}}
            @else {{''}}
            @endif
            <script>
                function export_data(){
                    let data=document.getElementById('customers');
                    var fp=XLSX.utils.table_to_book(data,{sheet:'vishal'});
                    XLSX.write(fp,{
                        bookType:'xlsx',
                        type:'base64'
                    });
                    XLSX.writeFile(fp, 'test.xlsx');
                }
                </script>
    <style>
        table, th, td  {
            border: 1px solid black;
        }
    </style>
 <script>
        function addRowCount(tableAttr) {
  $(tableAttr).each(function(){
    $('th:last-child, thead td:last-child', this).each(function(){
      var tag = $(this).prop('tagName');
      $(this).after('<'+tag+' style="font-size:20px;text-align:center;font-family: Jameel Noori;"> نمبر شمار</'+tag+'>');
    });
    $('td:last-child', this).each(function(i){
      $(this).after('<td>'+(i+1)+'</td>');
    });
  });
}

// Call the function with table attr on which you want automatic serial number
addRowCount('.js-serial');
    </script>
