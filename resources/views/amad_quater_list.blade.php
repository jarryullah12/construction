
    @if(Session::has('user'))
    {{ View::make('header')}}

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">

                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;" ><b> آمد کوارٹرز لسٹ </b> </h3>
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
                                      <form action="/action_page.php">
                                        <input type="text" placeholder=".............. تلاش کریں ................." name="search">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                      </form>
                                    </div>
                                  </div>

                                    <table id="customers">
                                      <tr>
                                        <th style="text-align: center; font-size: 25px; font-family: Jameel Noori;">بل کی رقم </th>
                                        <th style="text-align: center; font-size: 25px; font-family: Jameel Noori;">تفصیل</th>
                                        <th style="text-align: center; font-size: 25px; font-family: Jameel Noori;"> بل بنام<</th>
                                        <th style="text-align: center; font-size: 25px; font-family: Jameel Noori;"> تاریخ</th>
                                        <th style="text-align: center; font-size: 25px; font-family: Jameel Noori;">نمبر شمار</th>
                                      </tr>
                                      <tr>
                                        <td style="text-align: right; font-size: 20px; font-family: Jameel Noori;">Alfreds Futterkiste</td>
                                        <td style="text-align: right; font-size: 20px; font-family: Jameel Noori;">Alfreds Futterkiste</td>
                                        <td style="text-align: right; font-size: 20px; font-family: Jameel Noori;">Alfreds Futterkiste</td>
                                        <td style="text-align: right; font-size: 20px; font-family: Jameel Noori;">Alfreds Futterkiste</td>
                                        <td style="text-align: right; font-size: 20px; font-family: Jameel Noori;">Alfreds Futterkiste</td>

                                      </tr>

                                    </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{ View::make('footer')}}
            @else {{''}}
            @endif
