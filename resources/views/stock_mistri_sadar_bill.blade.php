@if(Session::has('user'))
<link rel="stylesheet" href="{{asset('maalsaalas_style/css/css/list2.css')}}">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div >
                        <h3 style="text-align:center; font-size: 25px; font-family: Jameel Noori;"><b> اسٹاک کارپینٹر دارالصدر </b></h3>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">



                        </div>
                    </div>
                </div>
            </div>

            <div  class="container-fluid" >

                <div class="row" style="padding-left:10px;">



                    <button type="hidden" onClick="window.print()"}} >Print this page »</button>


<!-- 4th portion for carpenter -->
<div class="col-lg-12 col-xlg-9 col-md-8">
    <div class="card">

        <div class="card-body">

        </div>
    </div>
</div>

                </div>


            @else {{''}}
            @endif
