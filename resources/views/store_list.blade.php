@if(Session::has('user'))
{{ View::make('header')}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>


        <div class="page-wrapper">

            <div class="page-breadcrumb bg-yellow" style="background-color: rgb(223, 223, 223)">
                <div class="row align-items-center">

                    <div >
                        <h3 style="padding-left: 650px; font-size: 25px; font-family: Jameel Noori;" ><b>    اسٹور  </b> </h3>
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
                                   
                                    <div class="search-container">
                                      <form action="/maal_saalas/store_list_search">
                                        <input type="text" dir='auto' placeholder=".............. تلاش کریں ................." name="query">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                      &nbsp;
                                      </form>
                                    </div>

                                    <div class="search-container">
                          <form action="/maal_saalas/store_list_saman_search">
                            
                          <select type="text"  name="query" style="margin-top:10px;width:150px; height:40px;text-align:center"

                              required >
                              <option>سامان سلیکٹ کریں</option>
                              <option value="{{"پینٹ کا سامان"}}">پینٹ کا سامان</option>
                              <option value="{{"لکڑی کا سامان"}}"> لکڑی کا سامان </option>
                              <option value="{{"سول کا سامان"}}">سول کا سامان</option>
                              <option value="{{"بجلی کا سامان"}}">بجلی کا سامان</option>
                              <option value="{{"سینٹری کا سامان"}}">سینٹری کا سامان</option>
                              <option value="{{"ھارڈوئیر کا سامان"}}">ھارڈوئیر کا سامان</option>

                              </select>
                              &nbsp;
                              <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                          </div>
                                  </div>

                                    <table id="customers" class="js-serial">

                                      <tr>
                                       <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> ختم کریں </th> 
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">تبدیل کریں   </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">شامل اسٹاک کوارٹر   </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">شامل اسٹاک دفتر </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">شامل اسٹاک تعمیر کوارٹر </th>


                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">تفصیل  </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> تفصیل نکاس مقام  </th>

                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;"> نقاس </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">آمد تعداد</th>

                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">  اشیاء کا نام </th>
                                        <th style="text-align: center; font-size: 20px; font-family: Jameel Noori;">تاریخ</th>
                                      </tr>
                                      
                                      @foreach($cols  as $col)
                                      <tr>
                                        <form  method="POST">

                                            @csrf
                                             <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;"><button style="width: 80px;" class="btn btn-danger"><a  style="color: white;" href={{"store_all_delete/" . $col->id}}> ختم کریں </a></button></td> 
                                            <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;"><button style="width: 80px;" class="btn btn-success"><a  style="color: white;" href={{"edit_store/" . $col->id}}>تبدل کریں</a></button></td>
                                            <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;width:200px;"><input style="width: 80px;background-color:#2f323e; color:white; border:1px solid black" class="btn btn-success" type="submit" value="شامل کریں" formaction="{{url('store_list_quater')}}"></td>
                                            <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;width:200px;"> <input style="width: 80px;background-color:#2f323e; color:white; border:1px solid black" class="btn btn-success" type="submit"   value="شامل کریں" formaction="{{url('store_list_daftr')}}"  >
                                            <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;width:200px;"><input style="width: 80px;background-color:#2f323e; color:white; border:1px solid black" class="btn btn-success" type="submit" value="شامل کریں" formaction="{{url('store_list_tameer_quater')}}"></td>
                                            </td>

                                            <td style="text-align: center; font-size: 18px; font-family: Jameel Noori;width:200px;"><button style="width: 80px;background-color:#2f323e; color:white; border:1px solid black" class="btn btn-success"><a href="store_list_detail"  style="color: white">تفصیل دیکھیں</a></button></td>
                                            </td>


                                       <input style="color:black;width:100px" name="rate" type="hidden" value="{{$col->rate}}" >


                      
                                         <!-- <input style="color:rgb(3, 3, 3); width:100px" value="{{$col->amount-$col->naqas}}" name="remain_amount" type="hidden" > -->
                                         <td><input dir="auto" style="color:rgb(3, 3, 3); width:150px" value="{{$col->detail_shift}}" name="detail_shift" type="text" > </td>

                                        <td> <input style="color:rgb(3, 3, 3); width:50px"  name="ext_naqas" type="text" > </td>
                                        <td> <input style="color:rgb(3, 3, 3); width:50px"  name="ext_amount" type="text" > </td>


                                         <input style="color:rgb(3, 3, 3); width:50px" value="{{$col->naqas}}" name="naqas" type="hidden" > 



                                          <input style="color:rgb(3, 3, 3); width:50px" value="{{$col->amount}}" name="amount" type="hidden" > 



                                          <input style="color:rgb(3, 3, 3); width:100px" value="{{$col->detail}}" name="detail" type="hidden" >




                                           <input style="color:rgb(3, 3, 3); width:100px" value="{{$col->saman_type}}" name="saman_type" type="hidden" >



                                           <input style="color:rgb(3, 3, 3); width:100px" value="{{$col->maqam}}" name="maqam" type="hidden" >




                                           <td  dir="auto" style="width:200px;text-align:center"><input style="color:rgb(3, 3, 3); width:100px" value="{{$col->ishya_name}}" name="ishya_name" type="hidden" >
                                            {{$col->ishya_name}}

                                           </td>

                                           <input style="color:rgb(3, 3, 3); width:100px" value="{{$col->date}}" name="date" type="hidden" >

                                            <td style="width:200px;text-align:center">{{$col->date}}</td>

                                      </tr>
                                    </form>
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
