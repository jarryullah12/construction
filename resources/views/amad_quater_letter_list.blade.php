
    @if(Session::has('user'))
    {{ View::make('header')}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

       <div class="page-wrapper">

        <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">

                    <div >
                        <h3 style="padding-left:600px; font-size: 25px; font-family: Jameel Noori;" ><b> درخواست مرمت کوارٹرز  </b> </h3>
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
                                      <form action="/maal_saalas/search_amad_quater_letter">
                                        <input type="text" name="query" dir='auto' placeholder=".............. تلاش کریں ................." >
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                      </form>
                                    </div>
                                  </div>
                                    <table id="customers" class="js-serial">
                                      <tr >
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori; width:150px;">تبدیل کریں  </th>
                                        {{-- <th style="text-align: center; font-size: 20px; font-family: Jameel Noori; width:130px;">ختم کریں</th> --}}
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori; width:100px;">  نام سٹاف  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori; width:100px;"> تفصیل  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori; width:100px;"> کوارٹر نمبر  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori; width:100px;">رابطہ نمبر</th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori; width:180px;"> نام درخواست گزار</th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori; width:200px;">   تاریخ </th>
                                      </tr>
                                      @foreach($collections  as $col)
                                      <tr>
                                        <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;"><button class="btn btn-success"><a  style="color: white;" href={{"amad_quater_letter_update/" . $col['id']}}>تبدیل کریں</a></button></td>
                                        {{-- <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;"><button class="btn btn-danger"><a  style="color: white;" href={{"amad_quater_letter_delete/" . $col['id']}}>ختم کریں</a></button></td> --}}
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;">{{$col['name_staff']}}</td>
                                        <td dir="auto"  style="text-align: right; font-size: 18px; font-family: Jameel Noori; width:1000px;">{{$col['detail']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;">{{$col['quater_no']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;">{{$col['contact_code']}}{{$col['contact_no']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;">{{$col['name_letter_person']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;">{{$col['date']}}</td>
                                    </tr>
                                    @endforeach
                                    </table>
                                    {{$collections->links('pagination::bootstrap-4')}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </body>
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
