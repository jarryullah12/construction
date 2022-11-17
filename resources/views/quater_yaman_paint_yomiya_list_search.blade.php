@if(Session::has('user'))
{{ View::make('header')}}


        <div class="page-wrapper">

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">

                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;" ><b> اسٹاک سفیدی و پینٹ یومیہ  دارالیمن </b> </h3>
                    </div>

                </div>
            </div>

            <div class="container-fluid">


                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">

                            <div class="table-responsive">

                                <div class="topnav">

                                    {{-- <div class="search-container">
                                      <form action="/maal_saalas/stock_store_saman_list_search">
                                        <input name="query" type="text" dir='auto' placeholder=".............. تلاش کریں .................">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                      </form>
                                    </div> --}}
                                  </div>

                                    <table id="customers" class="js-serial">

                                    <tr>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">ٹوٹل رقم  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">تفصیل </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">کل یوم </th>

                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori; ">  پینٹر کا نام  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">کوارٹر نمبر  </th>

                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">تاریخ</th>
                                      </tr>
                                      @foreach($cols  as $col)
                                      <tr>

                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori; width:100px;">{{$col['total']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori; width:1000px;">{{$col['detail']}}</td>

                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori; width:100px;">{{$col['total_days']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori; width:180px;">{{$col['painter_name']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori; width:180px;">{{$col['yaman_quater_no']}}</td>

                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:150px;">{{$col['date']}}</td>

                                      </tr>
                                      @endforeach
                                    </table>
                                    {{-- <br>
                                    <div style="text-align: center">
                                        {{$cols->links()}}
                                        </div>
                                        <style>
                                        .w-5{
                                            display:none;
                                        }
                                        </style>
                                <br> --}}


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
