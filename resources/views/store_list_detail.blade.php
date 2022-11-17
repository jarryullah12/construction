@if(Session::has('user'))
{{ View::make('header_edit')}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

        <div class="page-wrapper">
            

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">
                <div class="row align-items-center">

                    <div >
                        <h3 style="padding-left: 650px; font-size: 25px; font-family: Jameel Noori;" ><b>    اسٹور  </b> </h3>
                    </div>

                </div>
            </div>
            <div class="table-responsive">



            <div class="container-fluid">

            <div class="topnav">        
                <br>
   
             
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">

                            <div class="table-responsive">
                                <input type="button" class="btn btn-success" onclick="export_data()" style="color:white;  background-color:black; border: black" value="پرنٹ نکالیں">
                                <br>
                                <br>


                                    <table id="customers" class="js-serial">

                                      <tr>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">بقایا </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> نکاس </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">آمد تعداد </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">ٹوٹل رقم  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">ریٹ </th>

                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">تفصیل </th>
                                        <th style="text-align: center;  font-size: 20px; font-family: Jameel Noori;">قسم اشیاء </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">مقام </th>
                                        <th style="text-align: center; dir:rtl; font-size: 20px; font-family: Jameel Noori;">اشیاء کا نام </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">تاریخ</th>
                                      </tr>
                                      <tr>



                                      @foreach($cols  as $col)
                                      <tr>


                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['amount']-$col['naqas']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['naqas']}}</td>

                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['amount']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['rate']*$col['amount']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['rate']}}</td>

                                        <td dir="auto" style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['detail']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['saman_type']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['maqam']}}</td>
                                        <td dir="auto" style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:150px;">{{$col['ishya_name']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:150px;">{{$col['date']}}</td>

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
      $(this).after('<'+tag+' style="font-size:20px; width:5px;text-align:center;font-family: Jameel Noori;"> نمبر شمار</'+tag+'>');
    });
    $('td:last-child', this).each(function(i){
      $(this).after('<td>'+(i+1)+'</td>');
    });
  });
}

// Call the function with table attr on which you want automatic serial number
addRowCount('.js-serial');
    </script>
