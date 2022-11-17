
    @if(Session::has('user'))
    {{ View::make('header')}}

       <div class="page-wrapper">

        <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">

                <div class="row align-items-center">

                    <div >
                        <h3 style="padding-left: 600px; font-size: 25px; font-family: Jameel Noori;" ><b> پروفائل </b> </h3>
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

                                    <table id="customers">

                                      <tr>
                                        <th style="text-align: center; font-size: 25px; font-family: Jameel Noori;"> نام</th>
                                        <th style="text-align: center; font-size: 25px; font-family: Jameel Noori;">  ای میل</th>
                                        <th style="text-align: center; font-size: 25px; font-family: Jameel Noori;"> پاسوارڈ</th>
                                        <th style="text-align: center; font-size: 25px; font-family: Jameel Noori;"> پاسوارڈ دوبارہ لکھیں</th>
                                        <th style="text-align: center; font-size: 25px; font-family: Jameel Noori;">تبدیل کریں</th>
                                        <th style="text-align: center; font-size: 25px; font-family: Jameel Noori;">ختم کریں</th>
                                      </tr>
                                      <tr>
                                        @foreach ($items as $item)
                                        <td style="text-align: center; font-size: 20px; font-family: Jameel Noori;">{{$item['name']}}</td>
                                        <td style="text-align: center; font-size: 20px; font-family: Jameel Noori;">{{$item['email']}}</td>
                                        <td style="text-align: center; font-size: 20px; font-family: Jameel Noori;">{{($item->password)}}</td>
                                        <td style="text-align: center; font-size: 20px; font-family: Jameel Noori;">{{($item->confirm_password)}}</td>

                                        <td style="text-align: center; font-size: 20px; font-family: Jameel Noori;"><button class="btn btn-success"><a  style="color: white;" href={{"profile/". Session::get('user')['id']}}>تبدیل کریں</a></button></td>
                                        <td style="text-align: center; font-size: 20px; font-family: Jameel Noori;"><button class="btn btn-danger"><a  style="color: white;" href={{"delete/". Session::get('user')['id']}}>ختم کریں</a></button></td>

                                      </tr>
                                      @endforeach
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </body>
            {{ View::make('footer')}}
            @else {{''}}
            @endif



