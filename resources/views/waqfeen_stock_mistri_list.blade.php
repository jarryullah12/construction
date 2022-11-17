@if(Session::has('user'))
{{ View::make('header')}}

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">
                <div class="row align-items-center">

                    <div >
                        <h3 style="padding-left: 550px; font-size: 25px; font-family: Jameel Noori;" ><b>اسٹاک سول ورکس  دارالواقفین
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

                                    <div class="search-container">
                                      <form action="/maal_saalas/waqfeen_stock_mistri_list_search">
                                        <input type="text" dir='auto' name="query" placeholder=".............. تلاش کریں ................." name="query">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                      </form>
                                    </div>
                                  </div>

                                    <table id="customers" class="js-serial">
                                      <tr>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">تبدیل کریں  </th>
                                        {{-- <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">ختم کریں</th> --}}
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> ٹوٹل رقم  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">تفصیل </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">کوارٹر نمبر  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">کل یوم </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">مزدور ریٹ</th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">کل یوم </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">  مستری ریٹ</th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> مستری/ مزدور کا نام</th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">تاریخ</th>
                                      </tr>
                                      @foreach($cols  as $col)
                                      <tr>
                                        <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;width:130px;"><button class="btn btn-success"><a  style="color: white;" href={{"edit_stock_amad_quater_entry_darul_waqfeen_mistri/" . $col['id']}}>تبدیل کریں</a></button></td>
                                        {{-- <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;width:100px;"><button class="btn btn-danger"><a  style="color: white;" href={{"waqfeen_mistri_delete/" . $col['id']}}>ختم کریں</a></button></td> --}}
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{($col['mazdur_rate']*$col['mazdur_total_days'])+($col['mistri_rate']*$col['mistri_total_days'])}}</td>

                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:1000px;">{{$col['detail']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['waqfeen_quater_no']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['mazdur_total_days']}}</td>

                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['mazdur_rate']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['mistri_total_days']}}</td>

                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['mistri_rate']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:100px;">{{$col['mistri_name']}}</td>
                                        <td style="text-align: right; font-size: 18px; font-family: Jameel Noori;width:180px;">{{$col['date']}}</td>

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
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            </div>
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
