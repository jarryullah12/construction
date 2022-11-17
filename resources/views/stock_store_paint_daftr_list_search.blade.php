@if(Session::has('user'))
{{ View::make('header')}}


        <div class="page-wrapper">

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">

                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;" ><b>اسٹاک  سفیدی و پینٹ  دفتر
                        </b> </h3>
                    </div>

                </div>
            </div>

            <div class="container-fluid">


                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">

                            <div class="table-responsive">

                                <div class="topnav">


                                  </div>

                                  <table id="customers" class="js-serial">

                                    <tr>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">ٹوٹل رقم  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> مربع ریٹ  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> فی مربع ریٹ  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> رقبہ  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> کام  </th>

                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> پینٹر کا نام  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">دفتر کا نام </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">تاریخ</th>
                                      </tr>
                                  </tr>
                                  @foreach($cols  as $col)
                                  <tr>
                                    <td style="text-align: right; font-size: 18px; font-family: Jameel Noori; width:100px;">{{$col['rakbah']*$col['per_murabah_rate']}}</td>

                                    <td style="text-align: right; font-size: 18px; font-family: Jameel Noori; width:100px;">{{$col['rakbah']*$col['per_murabah_rate']}}</td>

                                    <td style="text-align: right; font-size: 18px; font-family: Jameel Noori; width:100px;">{{$col['per_murabah_rate']}}</td>
                                    <td style="text-align: right; font-size: 18px; font-family: Jameel Noori; width:100px;">{{$col['rakbah']}}</td>
                                    <td style="text-align: right; font-size: 18px; font-family: Jameel Noori; width:100px;">{{$col['kaam']}}</td>

                                    <td style="text-align: right; font-size: 18px; font-family: Jameel Noori; width:100px;">{{$col['painter_name']}}</td>
                                    <td style="text-align: right; font-size: 18px; font-family: Jameel Noori; width:100px;">{{$col['daftr_no']}}</td>
                                    <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:200px;">{{$col['date']}}</td>
                                  </tr>
                                      @endforeach
                                    </table>



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
