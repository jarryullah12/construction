<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\amad_quater_letter_entry;
use App\Models\darul_sadar_detail;
use App\Models\darul_sadar_chakar;
use App\Models\darul_fatuh_detail;
use App\Models\darul_sadar;
use App\Models\darul_sadar_detail_painter;
use App\Models\darul_nasar_detail_painter;
use App\Models\darul_sadar_yomiya_detail_carpenter;
use App\Models\darul_nasar_yomiya_detail_carpenter;
use App\Models\darul_waqfeen_yomiya_detail_carpenter;
use App\Models\darul_fatuh_yomiya_detail_carpenter;
use App\Models\factory_area_yomiya_detail_carpenter;
use App\Models\darul_yaman_yomiya_detail_carpenter;


use App\Models\darul_sadar_detail_carpenter;

use App\Models\factory_area_detail_painter;
use App\Models\factory_area_detail_carpenter;
use App\Models\darul_waqfeen_detail_painter;
use App\Models\darul_waqfeen_detail_carpenter;
use App\Models\darul_fatuh_detail_painter;
use App\Models\darul_fatuh_detail_carpenter;
use App\Models\darul_yaman_detail_painter;
use App\Models\darul_yaman_detail_carpenter;
use App\Models\darul_nasar_detail_carpenter;
use App\Models\darul_yaman_quater;
use App\Models\darul_yaman_detail_mistri;
use App\Models\darul_yaman_detail;
use App\Models\darul_fatuh;
use App\Models\darul_sadar_detail_mistri;
use App\Models\darul_fatuh_detail_mistri;
use App\Models\amad_quater_entry;
use App\Models\darul_nasar;
use App\Models\darul_waqfeen;
use App\Models\factory_area;
use App\Models\darul_nasar_detail_mistri;
use App\Models\quater_bill;
use App\Models\quater_bill_carpenter;
use App\Models\quater_bill_painter;
use App\Models\quater_bill_painter_day;
use App\Models\quater_bill_paint_day;
use App\Models\quater_nasar_paint_day;
use App\Models\quater_waqfeen_paint_day;
use App\Models\quater_fatuh_paint_day;
use App\Models\quater_factory_paint_day;
use App\Models\quater_yaman_paint_day;

use App\Models\darul_waqfeen_detail_mistri;
use App\Models\factory_area_detail_mistri;
use App\Models\factory_area_detail;
use App\Models\darul_nasar_detail;
use App\Models\darul_waqfeen_detail;
use App\Models\quater_bill_marbel;
use App\Models\quater_sadar_marbel;
use App\Models\quater_nasar_marbel;
use App\Models\quater_factory_marbel;
use App\Models\quater_waqfeen_marbel;
use App\Models\quater_yaman_marbel;
use App\Models\quater_fatuh_marbel;
use App\Models\quater_bill_cable_dict;
use App\Models\quater_sadar_cable_dict;
use App\Models\quater_nasar_cable_dict;
use App\Models\quater_waqfeen_cable_dict;
use App\Models\quater_fatuh_cable_dict;
use App\Models\quater_factory_cable_dict;
use App\Models\quater_yaman_cable_dict;
use App\Models\darul_nasar_detail_steel;
use App\Models\darul_sadar_detail_steel;
use App\Models\darul_waqfeen_detail_steel;
use App\Models\darul_fatuh_detail_steel;
use App\Models\darul_factory_detail_steel;
use App\Models\darul_yaman_detail_steel;
use App\Models\sadar_paint_yomiya_bill;
use App\Models\quater_steel_bill;


use Session;
use Validator;
use Illuminate\Support\Facades\DB;

class quater extends Controller
{
    //
    function quater(Request $req)
    {
        $rules=array(
            "name_letter_person"=>"required ",

            "name_staff"=>"required",
            "detail"=>"required",
            "date"=>"required",
            "quater_no"=>"required",
            'contact_no' => 'required | min:7'
          );
          $Validator = Validator::make($req->all(),$rules);
          if($Validator->fails()){
           return view('amad_quater_letter_entry')->withErrors($Validator);
          }else{

        $data= new amad_quater_letter_entry;
        $data->name_letter_person=$req->name_letter_person;
        $data->quater_no=$req->quater_no;
        $data->contact_no=$req->contact_no;
        $data->contact_code=$req->contact_code;
        $data->name_staff=$req->name_staff;
        $data->detail=$req->detail;
        $data->date=$req->date;


        $data->save();

        return view("quater",$data);

         }

    }
    // function amad_letter_list(){
    //     $data= amad_quater_letter_entry::paginate(30);
    //      return view('amad_quater_letter_list',['collections'=>$data]);
    // }

    function show_quater_letter(){
        $data = amad_quater_letter_entry::paginate(30);
        return view('amad_quater_letter_list',['collections'=>$data]);
      }
      function delete_quater_letter($id){
        $data= amad_quater_letter_entry::find($id);
        $data->delete();
        return redirect('amad_quater_letter_list');
      }

      function showData_quater_letter($id){
        $data= amad_quater_letter_entry::find($id);
        return view('amad_quater_letter_update',['data'=>$data]);
      }
      function update_quater_letter(Request $req){
        $data = amad_quater_letter_entry::find($req->id);

        $data->name_letter_person=$req->name_letter_person;
        $data->contact_no=$req->contact_no;
        $data->date=$req->date;
        $data->contact_code=$req->contact_code;
        $data->quater_no=$req->quater_no;
        $data->name_staff=$req->name_staff;
        $data->detail=$req->detail;

        $data->save();
        return redirect('amad_quater_letter_list');
      }
      function search_amad_letter(Request $req)
      {
          $data= amad_quater_letter_entry::where('name_letter_person', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","ASC")
          ->get();
          return view('search_amad_quater_letter',['collections'=>$data]);
      }


    function store_saman_darul_sadar(Request $req)
    {


        $data= new darul_sadar_detail;
        $data->quater_no=$req->quater_no;
        $data->store_name=$req->store_name;
        $data->saman=$req->saman;
        $data->per_rate=$req->per_rate;
        $data->amount=$req->amount;
        $data->date=$req->date;



        $data->save();

        return view("stock_muramat_quater_categores",$data);

    }
    function store_saman_list(){
        $data= darul_sadar_detail::paginate(30);
         return view('stock_store_saman_list',['cols'=>$data]);
    }



        public function stock_saman_sadar_search(Request $req)
        {

            $data= darul_sadar_detail::
            where('saman', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")->get();

        return view('stock_store_saman_list_search',['cols'=>$data]);
    }

    function nasar_store_saman_list(){
        $data= darul_nasar_detail::paginate(30);
         return view('nasar_stock_store_saman_list',['cols'=>$data]);
    }

    function nasar_saman_list_search(Request $req)
    {
        $data= darul_nasar_detail::
        where('saman', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('nasar_stock_store_saman_list_search',['cols'=>$data]);
    }

    function waqfeen_store_saman_list(){
        $data= darul_waqfeen_detail::paginate(30);
         return view('waqfeen_stock_store_saman_list',['cols'=>$data]);
    }
    function waqfeen_store_saman_list_search(Request $req)
    {
        $data= darul_waqfeen_detail::
        where('saman', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('waqfeen_stock_store_saman_list_search',['cols'=>$data]);
    }

    function factory_store_saman_list(){
        $data= factory_area_detail::paginate(30);
         return view('factory_stock_store_saman_list',['cols'=>$data]);
    }


    function add_new_quater(Request $req)
    {


        $data= new darul_sadar;
        $data->quater_no=$req->quater_no;

        $data->save();

        return view("quater_categores",$data);

    }
    //darul yaman
    function add_quater_yaman(Request $req)
    {


        $data= new darul_yaman_quater;
        $data->yaman_quater_no=$req->yaman_quater_no;

        $data->save();

        return view("quater_categores",$data);

    }
    function quater_no_yaman(){
        $data= darul_yaman_quater::all();
         return view('stock_store_amad_quater_entry_darul_yaman',['cols'=>$data]);
    }
    function marbel_quater_no_yaman(){
        $data= darul_yaman_quater::all();
         return view('stock_marbel_amad_quater_entry_darul_yaman',['cols'=>$data]);
    }
    function carpenter_quater_no_yaman(){
        $data= darul_yaman_quater::all();
         return view('stock_carpenter_amad_quater_entry_darul_yaman',['cols'=>$data]);
    }
    function mistri_quater_no_yaman(){
        $data= darul_yaman_quater::all();
         return view('stock_mistri_amad_quater_entry_darul_yaman',['cols'=>$data]);
    }
    function cable_quater_no_yaman(){
        $data= darul_yaman_quater::all();
         return view('stock_cable_amad_quater_entry_darul_yaman',['cols'=>$data]);
    }
    function painter_quater_no_yaman(){
        $data= darul_yaman_quater::all();
         return view('stock_painter_amad_quater_entry_darul_yaman',['cols'=>$data]);
    }
    function saman_list_yaman(){
        $data= darul_yaman_detail::paginate(30);
         return view('stock_store_saman_list_yaman',['cols'=>$data]);
    }
    function saman_list_mistri_yaman(){
        $data= darul_yaman_detail_mistri::paginate(30);
         return view('stock_store_saman_mistri_list_yaman',['cols'=>$data]);
    }
    function store_saman_darul_yaman_post(Request $req){
        $data= new darul_yaman_detail;
        $data->yaman_quater_no=$req->yaman_quater_no;
        $data->store_name=$req->store_name;
        $data->saman=$req->saman;
        $data->amount=$req->amount;
        $data->per_rate=$req->per_rate;
        $data->date=$req->date;

        $data->save();

        return view("stock_muramat_quater_categores",$data);

    }
    function mistri_yaman(Request $req){
        foreach($req->inc_id as $key=>$insert){
            $database = [
            'inc_id'=>$req->inc_id[$key],
            'mistri_name'=>$req->mistri_name[$key],
            'mistri_rate'=>$req->mistri_rate[$key],
            'mazdur_rate'=>$req->mazdur_rate[$key],
            'mazdur_total_days'=>$req->mazdur_total_days[$key],
            'mistri_total_days'=>$req->mistri_total_days[$key],
            'yaman_quater_no'=>$req->yaman_quater_no[$key],
            // 'day'=>$req->day[$key],
            'date'=>$req->date[$key],
            'detail'=>$req->detail[$key],
            // 'muhala'=>$req->muhala[$key],

            ];

            // return dd($database);
            DB::table('darul_yaman_detail_mistris')->insert($database);
        }
        return redirect("stock_muramat_quater_categores");

        // $data= new darul_yaman_detail_mistri;
        // $data->mistri_name=$req->mistri_name;
        // $data->mistri_rate=$req->mistri_rate;
        // $data->mazdur_rate=$req->mazdur_rate;
        // $data->mistri_total_days=$req->mistri_total_days;
        // $data->mazdur_total_days=$req->mazdur_total_days;
        // $data->yaman_quater_no=$req->yaman_quater_no;
        // $data->detail=$req->detail;
        // $data->date=$req->date;

        // $data->save();

        // return view("stock_muramat_quater_categores",$data);

    }
    function steel_sadar(Request $req){

            foreach($req->inc_id as $key=>$insert){
                $database = [
                'inc_id'=>$req->inc_id[$key],
                'detail'=>$req->detail[$key],
                'decorator_name'=>$req->decorator_name[$key],
                'weight'=>$req->weight[$key],
                'amount'=>$req->amount[$key],
                'rate'=>$req->rate[$key],
                // 'muhala'=>$req->muhala[$key],
                'date'=>$req->date[$key],
                // 'day'=>$req->day[$key],
                'quater_no'=>$req->quater_no[$key],

                ];


            // return dd($database);
            DB::table('darul_sadar_detail_steels')->insert($database);
        }
        return redirect("stock_muramat_quater_categores");
    }
    function steel_sadar_list(){
        $data = darul_sadar_detail_steel::paginate(30);
        return view('quater_sadar_steel_list',['cols'=>$data]);
      }
      function steel_sadar_search(Request $req)
      {
          $data= darul_sadar_detail_steel::
          where('decorator_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
          ->get();
          return view('quater_sadar_steel_list_search',['cols'=>$data]);
      }
      function steel_nasar_list(){
        $data = darul_nasar_detail_steel::paginate(30);
        return view('quater_nasar_steel_list',['cols'=>$data]);
      }
      function steel_factory_list(){
        $data = darul_factory_detail_steel::paginate(30);
        return view('quater_factory_steel_list',['cols'=>$data]);
      }
      function steel_waqfeen_list(){
        $data = darul_waqfeen_detail_steel::paginate(30);
        return view('quater_waqfeen_steel_list',['cols'=>$data]);
      }
      function steel_fatuh_list(){
        $data = darul_fatuh_detail_steel::paginate(30);
        return view('quater_fatuh_steel_list',['cols'=>$data]);
      }
      function steel_yaman_list(){
        $data = darul_yaman_detail_steel::paginate(30);
        return view('quater_yaman_steel_list',['cols'=>$data]);
      }
    function steel_waqfeen(Request $req){

        foreach($req->inc_id as $key=>$insert){
            $database = [
            'inc_id'=>$req->inc_id[$key],
            'detail'=>$req->detail[$key],
            'decorator_name'=>$req->decorator_name[$key],
            'weight'=>$req->weight[$key],
            'amount'=>$req->amount[$key],
            'rate'=>$req->rate[$key],
            // 'muhala'=>$req->muhala[$key],
            'date'=>$req->date[$key],
            // 'day'=>$req->day[$key],
            'waqfeen_quater_no'=>$req->waqfeen_quater_no[$key],

            ];


        // return dd($database);
        DB::table('darul_waqfeen_detail_steels')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");
}
function steel_waqfeen_search(Request $req)
{
    $data= darul_waqfeen_detail_steel::
    where('decorator_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('quater_waqfeen_steel_list_search',['cols'=>$data]);
}
function steel_yaman(Request $req){

    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'decorator_name'=>$req->decorator_name[$key],
        'weight'=>$req->weight[$key],
        'amount'=>$req->amount[$key],
        'rate'=>$req->rate[$key],
        // 'muhala'=>$req->muhala[$key],
        'date'=>$req->date[$key],
        // 'day'=>$req->day[$key],
        'yaman_quater_no'=>$req->yaman_quater_no[$key],

        ];


    // return dd($database);
    DB::table('darul_yaman_detail_steels')->insert($database);
}
return redirect("stock_muramat_quater_categores");
}
function steel_yaman_search(Request $req)
{
    $data= darul_yaman_detail_steel::
    where('decorator_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('quater_yaman_steel_list_search',['cols'=>$data]);
}
function steel_factory(Request $req){

    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'decorator_name'=>$req->decorator_name[$key],
        'weight'=>$req->weight[$key],
        'amount'=>$req->amount[$key],
        'rate'=>$req->rate[$key],
        // 'muhala'=>$req->muhala[$key],
        'date'=>$req->date[$key],
        // 'day'=>$req->day[$key],
        'factory_quater_no'=>$req->factory_quater_no[$key],

        ];


    // return dd($database);
    DB::table('darul_factory_detail_steels')->insert($database);
}
return redirect("stock_muramat_quater_categores");
}
function steel_factory_search(Request $req)
{
    $data= darul_factory_detail_steel::
    where('decorator_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('quater_factory_steel_list_search',['cols'=>$data]);
}
function steel_fatuh(Request $req){

    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'decorator_name'=>$req->decorator_name[$key],
        'weight'=>$req->weight[$key],
        'amount'=>$req->amount[$key],
        'rate'=>$req->rate[$key],
        // 'muhala'=>$req->muhala[$key],
        'date'=>$req->date[$key],
        // 'day'=>$req->day[$key],
        'fatuh_quater_no'=>$req->fatuh_quater_no[$key],

        ];


    // return dd($database);
    DB::table('darul_fatuh_detail_steels')->insert($database);
}
return redirect("stock_muramat_quater_categores");
}
function steel_fatuh_search(Request $req)
{
    $data= darul_fatuh_detail_steel::
    where('decorator_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('quater_fatuh_steel_list_search',['cols'=>$data]);
}
    function steel_nasar(Request $req){

        foreach($req->inc_id as $key=>$insert){
            $database = [
            'inc_id'=>$req->inc_id[$key],
            'nasar_quater_no'=>$req->nasar_quater_no[$key],
            'detail'=>$req->detail[$key],
            'decorator_name'=>$req->decorator_name[$key],
            'weight'=>$req->weight[$key],
            'amount'=>$req->amount[$key],
            'rate'=>$req->rate[$key],
            // 'muhala'=>$req->muhala[$key],
            'date'=>$req->date[$key],
            // 'day'=>$req->day[$key],

            ];


        // return dd($database);
        DB::table('darul_nasar_detail_steels')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");
}

function steel_nasar_search(Request $req)
{
    $data= darul_nasar_detail_steel::
    where('decorator_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('quater_nasar_steel_list_search',['cols'=>$data]);
}
    function saman_list_yaman_search(Request $req)
    {
        $data= darul_yaman_detail::
        where('saman', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('stock_store_saman_list_yaman_search',['cols'=>$data]);
    }
    //darul yaman edit
    function delete_yaman($id){
        $data= darul_yaman_detail::find($id);
        $data->delete();
        return redirect('stock_store_saman_list_yaman');
      }

      function showData_saman_yaman_edit($id){
        $data= darul_yaman_detail::find($id);
        return view('edit_stock_amad_quater_entry_darul_yaman',['data'=>$data]);
      }
      function update_saman_yaman_edit(Request $req){
        $data = darul_yaman_detail::find($req->id);

        $data->yaman_quater_no=$req->yaman_quater_no;
        $data->store_name=$req->store_name;
        $data->saman=$req->saman;
        $data->amount=$req->amount;
        $data->per_rate=$req->per_rate;

        $data->save();
        return redirect('stock_store_saman_list_yaman');
      }
//darul yaman mistri edit
function delete_yama_mistri($id){
    $data= darul_yaman_detail_mistri::find($id);
    $data->delete();
    return redirect('stock_store_saman_mistri_list_yaman');
  }

  function showData_yaman_mistri_edit($id){
    $data= darul_yaman_detail_mistri::find($id);
    return view('edit_stock_amad_quater_entry_darul_yaman_mistri',['data'=>$data]);
  }
  function update_yaman_mistri_edit(Request $req){
    $data = darul_yaman_detail_mistri::find($req->id);

        $data->mistri_name=$req->mistri_name;
        $data->mistri_rate=$req->mistri_rate;
        $data->mazdur_rate=$req->mazdur_rate;
        $data->mistri_total_days=$req->mistri_total_days;
        $data->mazdur_total_days=$req->mazdur_total_days;
        $data->yaman_quater_no=$req->yaman_quater_no;
        $data->detail=$req->detail;

    $data->save();
    return redirect('stock_store_saman_mistri_list_yaman');
  }
  function mistri_list_yaman_search(Request $req)
  {
      $data= darul_yaman_detail_mistri::
      where('mistri_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('stock_store_saman_mistri_list_yaman_search',['cols'=>$data]);
  }
    // darul sadar
    function store_saman(){
        $data= darul_sadar::all();
         return view('stock_store_amad_quater_entry_darul_sadar',['cols'=>$data]);
    }
     // darul sadar
     function steel_sadar_quater_no(){
        $data= darul_sadar::all();
         return view('quater_sadar_steel_entry',['cols'=>$data]);
    }
    function steel_yaman_quater_no(){
        $data= darul_yaman_quater::all();
         return view('quater_yaman_steel_entry',['cols'=>$data]);
    }
    function steel_factory_quater_no(){
        $data= factory_area::all();
         return view('quater_factory_steel_entry',['cols'=>$data]);
    }
    function steel_fatuh_quater_no(){
        $data= darul_fatuh::all();
         return view('quater_fatuh_steel_entry',['cols'=>$data]);
    }
     // darul sadar
     function steel_waqfeen_quater_no(){
        $data= darul_waqfeen::all();
         return view('quater_waqfeen_steel_entry',['cols'=>$data]);
    }
     // darul sadar
     function marbel_saman(){
        $data= darul_sadar::all();
         return view('stock_marbel_amad_quater_entry_darul_sadar',['cols'=>$data]);
    }
     // darul sadar
     function carpenter_saman(){
        $data= darul_sadar::all();
         return view('stock_carpenter_amad_quater_entry_darul_sadar',['cols'=>$data]);
    }
     // darul nasar
     function carpenter_saman_yomiya_nasar(){
      $data= darul_nasar::all();
       return view('stock_carpenter_yomiya_quater_entry_darul_nasar',['cols'=>$data]);
     }
      // factory_area
      function carpenter_saman_yomiya_factory_area(){
        $data= factory_area::all();
         return view('stock_carpenter_yomiya_quater_entry_factory_area',['cols'=>$data]);
       }
      // darul waqfeen
      function carpenter_saman_yomiya_waqfeen(){
        $data= darul_waqfeen::all();
         return view('stock_carpenter_yomiya_quater_entry_darul_waqfeen',['cols'=>$data]);
       }
        // darul fatuh
      function carpenter_saman_yomiya_fatuh(){
        $data= darul_fatuh::all();
         return view('stock_carpenter_yomiya_quater_entry_darul_fatuh',['cols'=>$data]);
       }
       // darul sadar yomiya
       function carpenter_saman_yomiya(){
        $data= darul_sadar::all();
         return view('stock_carpenter_yomiya_quater_entry_darul_sadar',['cols'=>$data]);
    }
     // darul sadar yomiya
     function carpenter_saman_yomiya_yaman(){
      $data= darul_yaman_quater::all();
       return view('stock_carpenter_yomiya_quater_entry_darul_yaman',['cols'=>$data]);
  }
     // darul sadar
     function painter_saman(){
        $data= darul_sadar::all();
         return view('stock_painter_amad_quater_entry_darul_sadar',['cols'=>$data]);
    }
     // darul sadar
     function paint_yomiya_saman_sadar(){
        $data= darul_sadar::all();
         return view('quater_sadar_paint_yomiay_entry',['cols'=>$data]);
    }
    function paint_yomiya_saman_factory(){
        $data= factory_area::all();
         return view('quater_factory_paint_yomiya_entry',['cols'=>$data]);
    }
    // darul nasar
    function paint_yomiya_saman_nasar(){
        $data= darul_nasar::all();
         return view('quater_nasar_paint_yomiay_entry',['cols'=>$data]);
    }
     // darul nasar
     function steel_saman_nasar(){
        $data= darul_nasar::all();
         return view('quater_nasar_steel_entry',['cols'=>$data]);
    }
    function paint_yomiya_saman_waqfeen(){
        $data= darul_waqfeen::all();
         return view('quater_waqfeen_paint_yomiya',['cols'=>$data]);
    }
    function paint_yomiya_saman_fatuh(){
        $data= darul_fatuh::all();
         return view('quater_fatuh_paint_yomiya_entry',['cols'=>$data]);
    } function paint_yomiya_saman_yaman(){
        $data= darul_yaman_quater::all();
         return view('quater_yaman_paint_yomiya_entry',['cols'=>$data]);
    }
     // darul sadar
     function cable_saman(){
        $data= darul_sadar::all();
         return view('stock_cable_amad_quater_entry_darul_sadar',['cols'=>$data]);
    }
     // darul sadar
     function mistri_saman_get(){
        $data= darul_sadar::all();
         return view('stock_mistri_amad_quater_entry_darul_sadar',['cols'=>$data]);
    }
    function add_fatuh_quater(Request $req)
    {


        $data= new darul_fatuh;
        $data->fatuh_quater_no=$req->fatuh_quater_no;

        $data->save();

        return view("quater_categores",$data);

    }
    function store_saman_fatuh(){
        $data= darul_fatuh::all();
         return view('stock_store_amad_quater_entry_darul_fatuh',['cols'=>$data]);
    }
    function store_mistri_fatuh(){
        $data= darul_fatuh::all();
         return view('stock_mistri_amad_quater_entry_darul_fatuh',['cols'=>$data]);
    }
    function marbel_saman_fatuh(){
        $data= darul_fatuh::all();
         return view('stock_marbel_amad_quater_entry_darul_fatuh',['cols'=>$data]);
    }
    function carpenter_saman_fatuh(){
        $data= darul_fatuh::all();
         return view('stock_carpenter_amad_quater_entry_darul_fatuh',['cols'=>$data]);
    }
    function cable_saman_fatuh(){
        $data= darul_fatuh::all();
         return view('stock_cable_amad_quater_entry_darul_fatuh',['cols'=>$data]);
    }
    function painter_saman_fatuh(){
        $data= darul_fatuh::all();
         return view('stock_painter_amad_quater_entry_darul_fatuh',['cols'=>$data]);
    }


    function store_saman_fatuh_post(Request $req){
        $data= new darul_fatuh_detail;
        $data->fatuh_quater_no=$req->fatuh_quater_no;
        $data->store_name=$req->store_name;
        $data->saman=$req->saman;
        $data->per_rate=$req->per_rate;
        $data->amount=$req->amount;
        $data->date=$req->date;

        $data->save();

        return view("stock_muramat_quater_categores",$data);

    }
    //store saman list fatuh
    function store_saman_list_fatuh(){
        $data= darul_fatuh_detail::paginate(30);
         return view('stock_store_saman_list_fatuh',['cols'=>$data]);
    }
    function stock_saman_list_fatuh_search(Request $req)
    {
        $data= darul_fatuh_detail::
        where('saman', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('stock_store_saman_list_fatuh_search',['cols'=>$data]);
    }

    //fatuh saman edit
    function show_saman_fatuh_edit(){
        $data = darul_fatuh_detail::paginate(30);
        return view('stock_store_saman_list_fatuh',['cols'=>$data]);
      }
      function delete_saman_fatuh_edit($id){
        $data= darul_fatuh_detail::find($id);
        $data->delete();
        return redirect('stock_store_saman_list_fatuh');
      }

      function showData_saman_fatuh_edit($id){
        $data= darul_fatuh_detail::find($id);
        return view('edit_stock_amad_quater_entry_darul_fatuh',['data'=>$data]);
      }
      function update_saman_fatuh_edit(Request $req){
        $data = darul_fatuh_detail::find($req->id);

        $data->fatuh_quater_no=$req->fatuh_quater_no;
        $data->store_name=$req->store_name;
        $data->saman=$req->saman;
        $data->per_rate=$req->per_rate;
        $data->amount=$req->amount;

        $data->save();
        return redirect('stock_store_saman_list_fatuh');
      }
      //fatuh mistri
      function mistri_fatuh(Request $req){
        foreach($req->inc_id as $key=>$insert){
            $database = [
            'inc_id'=>$req->inc_id[$key],
            'mistri_name'=>$req->mistri_name[$key],
            'mistri_rate'=>$req->mistri_rate[$key],
            'mazdur_rate'=>$req->mazdur_rate[$key],
            'mazdur_total_days'=>$req->mazdur_total_days[$key],
            'mistri_total_days'=>$req->mistri_total_days[$key],
            'fatuh_quater_no'=>$req->fatuh_quater_no[$key],
            // 'day'=>$req->day[$key],
            'date'=>$req->date[$key],
            'detail'=>$req->detail[$key],
            // 'muhala'=>$req->muhala[$key],

            ];

            // return dd($database);
            DB::table('darul_fatuh_detail_mistris')->insert($database);
        }
        return redirect("stock_muramat_quater_categores");

    }
    function fatuh_mistri_list(){
        $data= darul_fatuh_detail_mistri::paginate(30);
         return view('stock_store_saman_mistri_list_fatuh',['cols'=>$data]);
    }
//fatuh mistri
    function show_saman_fatuh_mistri(){
        $data = darul_fatuh_detail_mistri::paginate(30);
        return view('stock_store_saman_mistri_list_fatuh',['cols'=>$data]);
      }
      function delete_saman_fatuh_mistri($id){
        $data= darul_fatuh_detail_mistri::find($id);
        $data->delete();
        return redirect('stock_store_saman_mistri_list_fatuh');
      }

      function showData_saman_fatuh_mistri($id){
        $data= darul_fatuh_detail_mistri::find($id);
        return view('edit_stock_amad_quater_entry_darul_fatuh_mistri',['data'=>$data]);
      }
      function update_saman_fatuh_mistri(Request $req){
        $data = darul_fatuh_detail_mistri::find($req->id);
        $data->mistri_name=$req->mistri_name;
        $data->mistri_rate=$req->mistri_rate;
        $data->mazdur_rate=$req->mazdur_rate;
        $data->mistri_total_days=$req->mistri_total_days;
        $data->mazdur_total_days=$req->mazdur_total_days;
        $data->fatuh_quater_no=$req->fatuh_quater_no;
        $data->detail=$req->detail;

        $data->save();
        return redirect('stock_store_saman_mistri_list_fatuh');
      }
      function stock_saman_mistri_list_fatuh_search(Request $req)
      {
          $data= darul_fatuh_detail_mistri::
          where('mistri_name','LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
          ->get();
          return view('stock_store_saman_mistri_list_fatuh_search',['cols'=>$data]);
      }

    //

    function mistri_saman(Request $req){

        foreach($req->inc_id as $key=>$insert){
            $database = [
            'inc_id'=>$req->inc_id[$key],
            'mistri_name'=>$req->mistri_name[$key],
            'mistri_rate'=>$req->mistri_rate[$key],
            'mazdur_rate'=>$req->mazdur_rate[$key],
            'mazdur_total_days'=>$req->mazdur_total_days[$key],
            'mistri_total_days'=>$req->mistri_total_days[$key],
            'quater_no'=>$req->quater_no[$key],
            // 'day'=>$req->day[$key],
            'date'=>$req->date[$key],
            'detail'=>$req->detail[$key],
            // 'muhala'=>$req->muhala[$key],

            ];

            // return dd($database);
            DB::table('darul_sadar_detail_mistris')->insert($database);
        }
        return redirect("stock_muramat_quater_categores");



        // $data= new darul_sadar_detail_mistri;
        // $data->mistri_name=$req->mistri_name;
        // $data->mistri_rate=$req->mistri_rate;
        // $data->mazdur_rate=$req->mazdur_rate;

        // $data->mistri_total_days=$req->mistri_total_days;
        // $data->mazdur_total_days=$req->mazdur_total_days;
        // $data->quater_no=$req->quater_no;
        // $data->detail=$req->detail;
        // $data->date=$req->date;

        // $data->save();

        // return view("stock_muramat_quater_categores",$data);

    }
    function mistri_saman_list(){
        $data= darul_sadar_detail_mistri::paginate(30);
         return view('stock_mistri_list',['cols'=>$data]);
    }
    function stock_mistri_sadar_search(Request $req)
    {
        $data= darul_sadar_detail_mistri::
        where('mistri_name','LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('stock_mistri_list_search',['cols'=>$data]);
    }

    function nasar_stock_mistri_list(){
        $data= darul_nasar_detail_mistri::paginate(30);
         return view('nasar_stock_mistri_list',['cols'=>$data]);
    }
    function sadar_paint_yomiya_list(){
        $data= quater_bill_paint_day::paginate(30);
         return view('quater_sadar_paint_yomiya_list',['cols'=>$data]);
    }
    function sadar_paint_yomiya_list_search(Request $req)
    {
        $data= quater_bill_paint_day::
        where('painter_name','LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('quater_sadar_paint_yomiya_list_search',['cols'=>$data]);
    }
    function nasar_paint_yomiya_list(){
        $data= quater_nasar_paint_day::paginate(30);
         return view('quater_nasar_paint_yomiya_list',['cols'=>$data]);
    }
    function nasar_paint_yomiya_list_search(Request $req)
    {
        $data= quater_nasar_paint_day::
        where('painter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('quater_nasar_paint_yomiya_list_search',['cols'=>$data]);
    }
    function factory_paint_yomiya_list(){
        $data= quater_factory_paint_day::paginate(30);
         return view('quater_factory_paint_yomiya_list',['cols'=>$data]);
    }
    function factory_paint_yomiya_list_search(Request $req)
    {
        $data= quater_factory_paint_day::
        where('painter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('quater_factory_paint_yomiya_list_search',['cols'=>$data]);
    }
    function waqfeen_paint_yomiya_list(){
        $data= quater_waqfeen_paint_day::paginate(30);
         return view('quater_waqfeen_paint_yomiya_list',['cols'=>$data]);
    }
    function waqfeen_paint_yomiya_list_search(Request $req)
    {
        $data= quater_waqfeen_paint_day::
        where('painter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('quater_waqfeen_paint_yomiya_list_search',['cols'=>$data]);
    }
    function fatuh_paint_yomiya_list(){
        $data= quater_fatuh_paint_day::paginate(30);
         return view('quater_fatuh_paint_yomiya_list',['cols'=>$data]);
    }
    function fatuh_paint_yomiya_search(Request $req)
    {
        $data= quater_fatuh_paint_day::
        where('painter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('quater_fatuh_paint_yomiya_list_search',['cols'=>$data]);
    }
    function yaman_paint_yomiya_list(){
        $data= quater_yaman_paint_day::paginate(30);
         return view('quater_yaman_paint_yomiya_list',['cols'=>$data]);
    }
    function yaman_paint_yomiya_list_search(Request $req)
    {
        $data= quater_yaman_paint_day::
        where('painter_name','LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('quater_yaman_paint_yomiya_list_search',['cols'=>$data]);
    }
    function nasar_mistri_search(Request $req)
    {
        $data= darul_nasar_detail_mistri::
        where('mistri_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('nasar_stock_mistri_list_search',['cols'=>$data]);
    }

    function factory_stock_mistri_list(){
        $data= factory_area_detail_mistri::paginate(30);
         return view('factory_stock_mistri_list',['cols'=>$data]);
    }
    function factory_mistri_list_search(Request $req)
    {
        $data= factory_area_detail_mistri::
        where('mistri_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('factory_stock_mistri_list_search',['cols'=>$data]);
    }

    function waqfeen_stock_mistri_list(){
        $data= darul_waqfeen_detail_mistri::paginate(30);
         return view('waqfeen_stock_mistri_list',['cols'=>$data]);
    }
    function waqfeen_mistri_list_search(Request $req)
    {
        $data= darul_waqfeen_detail_mistri::
        where('mistri_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('waqfeen_stock_mistri_list_search',['cols'=>$data]);
    }

    function amad_quater(Request $req){
        $data= new amad_quater_entry;
        $data->maal_type=$req->maal_type;
        $data->detail=$req->detail;
        $data->amount=$req->amount;
        $data->date=$req->date;

        $data->save();

        return view("quater",$data);

    }
    function amad_list(){
        $data= amad_quater_entry::paginate(30);
         return view('quater_list',['cols'=>$data]);
    }



    function show_amad(){
        $data = amad_quater_entry::all();
        return view('quater_list',['cols'=>$data]);
      }
      function delete_amad($id){
        $data= amad_quater_entry::find($id);
        $data->delete();
        return redirect('quater_list');
      }

      function showData_amad($id){
        $data= amad_quater_entry::find($id);
        return view('edit_amad_quater_entry',['data'=>$data]);
      }
      function update_amad(Request $req){
        $data = amad_quater_entry::find($req->id);
        $data->date=$req->date;
        $data->maal_type=$req->maal_type;
        $data->detail=$req->detail;
        $data->amount=$req->amount;
        $data->date=$req->date;

        $data->save();
        return redirect('quater_list');
      }





      function show_store_sadar(){
        $data = darul_sadar_detail::all();
        return view('stock_store_saman_list',['cols'=>$data]);
      }

      function delete_store_sadar($id){
        $data= darul_sadar_detail::find($id);
        $data->delete();
        return redirect('stock_store_saman_list');
      }

      function showData_store_sadar($id){
        $data= darul_sadar_detail::find($id);
        return view('edit_stock_amad_quater_entry_darul_sadar',['data'=>$data]);
      }
      function update_store_sadar(Request $req){
        $data = darul_sadar_detail::find($req->id);
        $data->store_name=$req->store_name;
        $data->saman=$req->saman;
        $data->quater_no=$req->quater_no;
        $data->amount=$req->amount;
        $data->per_rate=$req->per_rate;

        $data->save();
        return redirect('stock_store_saman_list');
      }


      function show_store_sadar_mistri(){
        $data = darul_sadar_detail_mistri::all();
        return view('stock_mistri_list',['cols'=>$data]);
      }
      function delete_store_sadar_mistri($id){
        $data= darul_sadar_detail_mistri::find($id);
        $data->delete();
        return redirect('stock_mistri_list');
      }

      function showData_store_sadar_mistri($id){
        $data= darul_sadar_detail_mistri::find($id);
        return view('edit_stock_amad_quater_entry_darul_sadar_mistri',['data'=>$data]);
      }
      function update_store_sadar_mistri(Request $req){
        $data = darul_sadar_detail_mistri::find($req->id);
        $data->mistri_name=$req->mistri_name;
        $data->mistri_rate=$req->mistri_rate;
        $data->mazdur_rate=$req->mazdur_rate;
        $data->mistri_total_days=$req->mistri_total_days;
        $data->mazdur_total_days=$req->mazdur_total_days;

        $data->quater_no=$req->quater_no;
        $data->detail=$req->detail;

        $data->save();
        return redirect('stock_mistri_list');
      }


// nasar edit
      function show_store_nasar(){
        $data = darul_nasar_detail::all();
        return view('nasar_stock_store_saman_list',['cols'=>$data]);
      }
      function delete_store_nasar($id){
        $data= darul_nasar_detail::find($id);
        $data->delete();
        return redirect('nasar_stock_store_saman_list');
      }

      function showData_store_nasar($id){
        $data= darul_nasar_detail::find($id);
        return view('edit_stock_amad_quater_entry_darul_nasar',['data'=>$data]);
      }
      function update_store_nasar(Request $req){
        $data = darul_nasar_detail::find($req->id);
        $data->nasar_quater_no=$req->nasar_quater_no;
        $data->store_name=$req->store_name;
        $data->saman=$req->saman;
        $data->amount=$req->amount;
        $data->per_rate=$req->per_rate;


        $data->save();
        return redirect('nasar_stock_store_saman_list');
      }
// nasar mistri edit
function show_store_nasar_mistri(){
    $data = darul_nasar_detail_mistri::all();
    return view('nasar_stock_mistri_list',['cols'=>$data]);
  }
  function delete_store_nasar_mistri($id){
    $data= darul_nasar_detail_mistri::find($id);
    $data->delete();
    return redirect('nasar_stock_mistri_list');
  }

  function showData_store_nasar_mistri($id){
    $data= darul_nasar_detail_mistri::find($id);
    return view('edit_stock_amad_quater_entry_darul_nasar_mistri',['data'=>$data]);
  }
  function update_store_nasar_mistri(Request $req){

    $data = darul_nasar_detail_mistri::find($req->id);
    $data->mistri_name=$req->mistri_name;
    $data->mistri_rate=$req->mistri_rate;
    $data->mazdur_rate=$req->mazdur_rate;
    $data->mistri_total_days=$req->mistri_total_days;
    $data->mazdur_total_days=$req->mazdur_total_days;
    $data->detail=$req->detail;

    $data->nasar_quater_no=$req->nasar_quater_no;

    $data->save();
    return redirect('nasar_stock_mistri_list');
  }

//factory edit

  function show_store_factory(){
    $data = factory_area_detail::all();
    return view('factory_stock_store_saman_list',['cols'=>$data]);
  }
  function delete_store_factory($id){
    $data= factory_area_detail::find($id);
    $data->delete();
    return redirect('factory_stock_store_saman_list');
  }

  function showData_store_factory($id){
    $data= factory_area_detail::find($id);
    return view('edit_stock_amad_quater_entry_factory_area',['data'=>$data]);
  }
  function update_store_factory(Request $req){
    $data = factory_area_detail::find($req->id);
    $data->store_name=$req->store_name;
    $data->saman=$req->saman;

    $data->factory_quater_no=$req->factory_quater_no;
    $data->amount=$req->amount;

    $data->save();
    return redirect('factory_stock_store_saman_list');
  }
  //waqfeen

  function show_store_waqfeen(){
    $data = darul_waqfeen_detail::paginate(30);
    return view('waqfeen_stock_store_saman_list',['cols'=>$data]);
  }
  function delete_store_waqfeen($id){
    $data= darul_waqfeen_detail::find($id);
    $data->delete();
    return redirect('waqfeen_stock_store_saman_list');
  }

  function showData_store_waqfeen($id){
    $data= darul_waqfeen_detail::find($id);
    return view('edit_stock_amad_quater_entry_darul_waqfeen',['data'=>$data]);
  }
  function update_store_waqfeen(Request $req){
    $data = darul_waqfeen_detail::find($req->id);
    $data->store_name=$req->store_name;
    $data->saman=$req->saman;

    $data->waqfeen_quater_no=$req->waqfeen_quater_no;
    $data->amount=$req->amount;
    $data->per_rate=$req->per_rate;


    $data->save();
    return redirect('waqfeen_stock_store_saman_list');
  }

  //waqfeen mistri

  function show_store_waqfeen_mistri(){
    $data = darul_waqfeen_detail_mistri::paginate(30);
    return view('waqfeen_stock_mistri_list',['cols'=>$data]);
  }
  function delete_store_waqfeen_mistri($id){
    $data= darul_waqfeen_detail_mistri::find($id);
    $data->delete();
    return redirect('waqfeen_stock_mistri_list');
  }

  function showData_store_waqfeen_mistri($id){
    $data= darul_waqfeen_detail_mistri::find($id);
    return view('edit_stock_amad_quater_entry_darul_waqfeen_mistri',['data'=>$data]);
  }
  function update_store_waqfeen_mistri(Request $req){
    $data = darul_waqfeen_detail_mistri::find($req->id);
    $data->mistri_name=$req->mistri_name;
    $data->mistri_rate=$req->mistri_rate;
    $data->mazdur_rate=$req->mazdur_rate;
    $data->mistri_total_days=$req->mistri_total_days;
    $data->mazdur_total_days=$req->mazdur_total_days;
    $data->detail=$req->detail;

    $data->waqfeen_quater_no=$req->waqfeen_quater_no;

    $data->save();


    $data->save();
    return redirect('waqfeen_stock_mistri_list');
  }

//factory  mistri edit

function show_store_factory_mistri(){
    $data = factory_area_detail_mistri::all();
    return view('factory_stock_mistri_list',['cols'=>$data]);
  }
  function delete_store_factory_mistri($id){
    $data= factory_area_detail_mistri::find($id);
    $data->delete();
    return redirect('factory_stock_mistri_list');
  }

  function showData_store_factory_mistri($id){
    $data= factory_area_detail_mistri::find($id);
    return view('edit_stock_amad_quater_entry_factory_area_mistri',['data'=>$data]);
  }
  function update_store_factory_mistri(Request $req){
    $data = factory_area_detail_mistri::find($req->id);
    $data->mistri_name=$req->mistri_name;
    $data->mistri_rate=$req->mistri_rate;
    $data->mazdur_rate=$req->mazdur_rate;
    $data->mistri_total_days=$req->mistri_total_days;
    $data->mazdur_total_days=$req->mazdur_total_days;
    $data->detail=$req->detail;

    $data->factory_quater_no=$req->factory_quater_no;

    $data->save();
    return redirect('factory_stock_mistri_list');
  }


      function search_amad_quater(Request $req)
      {
          $data= amad_quater_entry::where('maal_type', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
          ->get();
          return view('search_quater_list',['cols'=>$data]);
      }
      function add_nasar_quater(Request $req)
      {


          $data= new darul_nasar;
          $data->nasar_quater_no=$req->nasar_quater_no;

          $data->save();

          return view("quater",$data);

      }
    //   function add_yomiya_paint_quater(Request $req)
    //   {


    //       $data= new darul_nasar;
    //       $data->quater_no=$req->quater_no;

    //       $data->save();

    //       return view("quater",$data);

    //   }

      function add_waqfeen_quater(Request $req)
      {


          $data= new darul_waqfeen;
          $data->waqfeen_quater_no=$req->waqfeen_quater_no;

          $data->save();

          return view("quater",$data);

      }
      function add_factory_quater(Request $req)
      {


          $data= new factory_area;
          $data->factory_quater_no=$req->factory_quater_no;

          $data->save();

          return view("quater",$data);

      }


    function store_saman_nasar(Request $req)
    {


        $data= new darul_nasar_detail;
        $data->nasar_quater_no=$req->nasar_quater_no;
        $data->store_name=$req->store_name;
        $data->saman=$req->saman;
        $data->amount=$req->amount;
        $data->per_rate=$req->per_rate;
        $data->date=$req->date;


        $data->save();

        return view("stock_muramat_quater_categores",$data);

    }
    function mistri_nasar(Request $req)
    {
        foreach($req->inc_id as $key=>$insert){
            $database = [
            'inc_id'=>$req->inc_id[$key],
            'mistri_name'=>$req->mistri_name[$key],
            'mistri_rate'=>$req->mistri_rate[$key],
            'mazdur_rate'=>$req->mazdur_rate[$key],
            'mazdur_total_days'=>$req->mazdur_total_days[$key],
            'mistri_total_days'=>$req->mistri_total_days[$key],
            'nasar_quater_no'=>$req->nasar_quater_no[$key],
            // 'day'=>$req->day[$key],
            'date'=>$req->date[$key],
            'detail'=>$req->detail[$key],
            // 'muhala'=>$req->muhala[$key],

            ];

            // return dd($database);
            DB::table('darul_nasar_detail_mistris')->insert($database);
        }
        return redirect("stock_muramat_quater_categores");



        // $data= new darul_nasar_detail_mistri;
        // $data->nasar_quater_no=$req->nasar_quater_no;
        // $data->mistri_name=$req->mistri_name;
        // $data->mistri_rate=$req->mistri_rate;
        // $data->mazdur_rate=$req->mazdur_rate;
        // $data->mistri_total_days=$req->mistri_total_days;
        // $data->mazdur_total_days=$req->mazdur_total_days;
        // $data->detail=$req->detail;
        // $data->date=$req->date;


        $data->save();

        return view("stock_muramat_quater_categores",$data);

    }
    function store_saman_nasar_quater_no(){
        $data= darul_nasar::all();
         return view('stock_store_amad_quater_entry_darul_nasar',['cols'=>$data]);
    }
    function marbel_saman_nasar_quater_no(){
        $data= darul_nasar::all();
         return view('stock_marbel_amad_quater_entry_darul_nasar',['cols'=>$data]);
    }
    function carpenter_saman_nasar_quater_no(){
        $data= darul_nasar::all();
         return view('stock_carpenter_amad_quater_entry_darul_nasar',['cols'=>$data]);
    }
    function mistri_saman_nasar_quater_no(){
        $data= darul_nasar::all();
         return view('stock_mistri_amad_quater_entry_darul_nasar',['cols'=>$data]);
    }
    function cable_saman_nasar_quater_no(){
        $data= darul_nasar::all();
         return view('stock_cable_amad_quater_entry_darul_nasar',['cols'=>$data]);
    }

    function painter_saman_nasar_quater_no(){
        $data= darul_nasar::all();
         return view('stock_painter_amad_quater_entry_darul_nasar',['cols'=>$data]);
    }
    function store_saman_nasar_quater_mistri(){
        $data= darul_nasar::all();
         return view('stock_amad_quater_entry_darul_nasar',['cols'=>$data]);
    }

    function store_saman_waqfeen_quater(){
        $data= darul_waqfeen::all();
         return view('stock_store_amad_quater_entry_darul_waqfeen',['cols'=>$data]);
    }
    function marbel_saman_waqfeen_quater(){
        $data= darul_waqfeen::all();
         return view('stock_marbel_amad_quater_entry_darul_waqfeen',['cols'=>$data]);
    }
    function carpenter_saman_waqfeen_quater(){
        $data= darul_waqfeen::all();
         return view('stock_carpenter_amad_quater_entry_darul_waqfeen',['cols'=>$data]);
    }
    function mistri_saman_waqfeen_quater(){
        $data= darul_waqfeen::all();
         return view('stock_mistri_amad_quater_entry_darul_waqfeen',['cols'=>$data]);
    }
    function cable_saman_waqfeen_quater(){
        $data= darul_waqfeen::all();
         return view('stock_cable_amad_quater_entry_darul_waqfeen',['cols'=>$data]);
    }
    function painter_saman_waqfeen_quater(){
        $data= darul_waqfeen::all();
         return view('stock_painter_amad_quater_entry_darul_waqfeen',['cols'=>$data]);
    }
    function store_saman_waqfeen(Request $req)
    {


        $data= new darul_waqfeen_detail;
        $data->waqfeen_quater_no=$req->waqfeen_quater_no;
        $data->store_name=$req->store_name;
        $data->saman=$req->saman;
        $data->amount=$req->amount;
        $data->per_rate=$req->per_rate;
        $data->date=$req->date;


        $data->save();

        return view("stock_muramat_quater_categores",$data);

    }
    function mistri_waqfeen_mistri(Request $req)
    {

        foreach($req->inc_id as $key=>$insert){
            $database = [
            'inc_id'=>$req->inc_id[$key],
            'mistri_name'=>$req->mistri_name[$key],
            'mistri_rate'=>$req->mistri_rate[$key],
            'mazdur_rate'=>$req->mazdur_rate[$key],
            'mazdur_total_days'=>$req->mazdur_total_days[$key],
            'mistri_total_days'=>$req->mistri_total_days[$key],
            'waqfeen_quater_no'=>$req->waqfeen_quater_no[$key],
            // 'day'=>$req->day[$key],
            'date'=>$req->date[$key],
            'detail'=>$req->detail[$key],
            // 'muhala'=>$req->muhala[$key],

            ];

            // return dd($database);
            DB::table('darul_waqfeen_detail_mistris')->insert($database);
        }
        // $data= new darul_waqfeen_detail_mistri;
        // $data->waqfeen_quater_no=$req->waqfeen_quater_no;
        // $data->mistri_name=$req->mistri_name;
        // $data->mistri_rate=$req->mistri_rate;
        // $data->mazdur_rate=$req->mazdur_rate;
        // $data->mistri_total_days=$req->mistri_total_days;
        // $data->mazdur_total_days=$req->mazdur_total_days;
        // $data->detail=$req->detail;
        // $data->date=$req->date;


        // $data->save();

        // return view("stock_muramat_quater_categores",$data);
        return redirect("stock_muramat_quater_categores");

    }




    function store_saman_factory_quater(){
        $data= factory_area::all();
         return view('stock_store_amad_quater_entry_factory_area',['cols'=>$data]);
    }
    function carpenter_saman_factory_quater(){
        $data= factory_area::all();
         return view('stock_carpenter_amad_quater_entry_factory_area',['cols'=>$data]);
    }
    function marbel_saman_factory_quater(){
        $data= factory_area::all();
         return view('stock_marbel_amad_quater_entry_factory_area',['cols'=>$data]);
    }
    function mistri_saman_factory_quater(){
        $data= factory_area::all();
         return view('stock_mistri_amad_quater_entry_factory_area',['cols'=>$data]);
    }
    function cable_saman_factory_quater(){
        $data= factory_area::all();
         return view('stock_cable_amad_quater_entry_factory_area',['cols'=>$data]);
    }
    function painter_saman_factory_quater(){
        $data= factory_area::all();
         return view('stock_painter_amad_quater_entry_factory_area',['cols'=>$data]);
    }
    function store_saman_factory(Request $req)
    {


        $data= new factory_area_detail;
        $data->factory_quater_no=$req->factory_quater_no;
        $data->store_name=$req->store_name;
        $data->saman=$req->saman;
        $data->amount=$req->amount;
        $data->per_rate=$req->per_rate;
        $data->date=$req->date;


        $data->save();

        return view("stock_muramat_quater_categores",$data);

    }
    function factory_store_saman_list_search(Request $req)
    {
        $data= factory_area_detail::
        where('saman', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('factory_stock_store_saman_list_search',['cols'=>$data]);
    }

    function factory_area_mistri(Request $req)
    {
        foreach($req->inc_id as $key=>$insert){
            $database = [
            'inc_id'=>$req->inc_id[$key],
            'mistri_name'=>$req->mistri_name[$key],
            'mistri_rate'=>$req->mistri_rate[$key],
            'mazdur_rate'=>$req->mazdur_rate[$key],
            'mazdur_total_days'=>$req->mazdur_total_days[$key],
            'mistri_total_days'=>$req->mistri_total_days[$key],
            'factory_quater_no'=>$req->factory_quater_no[$key],
            // 'day'=>$req->day[$key],
            'date'=>$req->date[$key],
            'detail'=>$req->detail[$key],
            // 'muhala'=>$req->muhala[$key],

            ];

            // return dd($database);
            DB::table('factory_area_detail_mistris')->insert($database);
        }
        return redirect("stock_muramat_quater_categores");
        // $data= new factory_area_detail_mistri;
        // $data->factory_quater_no=$req->factory_quater_no;
        // $data->mistri_name=$req->mistri_name;
        // $data->mistri_rate=$req->mistri_rate;
        // $data->mazdur_rate=$req->mazdur_rate;
        // $data->mistri_total_days=$req->mistri_total_days;
        // $data->mazdur_total_days=$req->mazdur_total_days;
        // $data->detail=$req->detail;
        // $data->date=$req->date;


        // $data->save();

        // return view("stock_muramat_quater_categores",$data);

    }
    // sadar painter
    function darul_sadar_painter(Request $req)
    {
        foreach($req->inc_id as $key=>$insert){
            $database = [
            'inc_id'=>$req->inc_id[$key],
            'per_murabah_rate'=>$req->per_murabah_rate[$key],
            'rakbah'=>$req->rakbah[$key],
            'painter_name'=>$req->painter_name[$key],
            'quater_no'=>$req->quater_no[$key],
            // 'day'=>$req->day[$key],
            'kaam'=>$req->kaam[$key],
            'date'=>$req->date[$key],
            // 'muhala'=>$req->muhala[$key],



            ];

            // return dd($database);
            DB::table('darul_sadar_detail_painters')->insert($database);
        }
        return redirect("stock_muramat_quater_categores");

    }



    // sadar carpenter
    function darul_sadar_cartpenter(Request $req)
    {
       
        foreach($req->inc_id as $key=>$insert){
        $database = [

        'total_days'=>$req->total_days[$key],
        'detail'=>$req->detail[$key],
        'carpenter_name'=>$req->carpenter_name[$key],
        'quater_no'=>$req->quater_no[$key],
        'inc_id'=>$req->inc_id[$key],
        // 'day'=>$req->day[$key],
        // 'size'=>$req->size[$key],
        'rate'=>$req->rate[$key],
        'amount'=>$req->amount[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],


        ];

        // return dd($database);
        DB::table('darul_sadar_detail_carpenters')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");

    }


      // sadar carpenter yomiya
      function darul_sadar_yomiya_cartpenter(Request $req)
      {
         
          foreach($req->inc_id as $key=>$insert){
          $database = [

          'total'=>$req->total[$key],
          'total_days'=>$req->total_days[$key],
          'detail'=>$req->detail[$key],
          'carpenter_name'=>$req->carpenter_name[$key],
          'quater_no'=>$req->quater_no[$key],
          'inc_id'=>$req->inc_id[$key],
          'date'=>$req->date[$key],

          ];
  
          // return dd($database);
          DB::table('darul_sadar_yomiya_detail_carpenters')->insert($database);
      }
      return redirect("stock_muramat_quater_categores");
  
      }
       // fatuh carpenter yomiya
       function darul_fatuh_yomiya_cartpenter(Request $req)
       {
          
           foreach($req->inc_id as $key=>$insert){
           $database = [
 
           'total'=>$req->total[$key],
           'total_days'=>$req->total_days[$key],
           'detail'=>$req->detail[$key],
           'carpenter_name'=>$req->carpenter_name[$key],
           'fatuh_quater_no'=>$req->fatuh_quater_no[$key],
           'inc_id'=>$req->inc_id[$key],
           'date'=>$req->date[$key],
 
           ];
   
           // return dd($database);
           DB::table('darul_fatuh_yomiya_detail_carpenters')->insert($database);
       }
       return redirect("stock_muramat_quater_categores");
   
       }
        // yaman carpenter yomiya
        function darul_yaman_yomiya_cartpenter(Request $req)
        {
           
            foreach($req->inc_id as $key=>$insert){
            $database = [
  
            'total'=>$req->total[$key],
            'total_days'=>$req->total_days[$key],
            'detail'=>$req->detail[$key],
            'carpenter_name'=>$req->carpenter_name[$key],
            'yaman_quater_no'=>$req->yaman_quater_no[$key],
            'inc_id'=>$req->inc_id[$key],
            'date'=>$req->date[$key],
  
            ];
    
            // return dd($database);
            DB::table('darul_yaman_yomiya_detail_carpenters')->insert($database);
        }
        return redirect("stock_muramat_quater_categores");
    
        }
        // factory_area carpenter yomiya
        function factory_area_yomiya_cartpenter(Request $req)
        {
           
            foreach($req->inc_id as $key=>$insert){
            $database = [
  
            'total'=>$req->total[$key],
            'total_days'=>$req->total_days[$key],
            'detail'=>$req->detail[$key],
            'carpenter_name'=>$req->carpenter_name[$key],
            'factory_quater_no'=>$req->factory_quater_no[$key],
            'inc_id'=>$req->inc_id[$key],
            'date'=>$req->date[$key],
  
            ];
    
            // return dd($database);
            DB::table('factory_area_yomiya_detail_carpenters')->insert($database);
        }
        return redirect("stock_muramat_quater_categores");
    
        }
      // nasar carpenter yomiya
      function darul_nasar_yomiya_cartpenter(Request $req)
      {
         
          foreach($req->inc_id as $key=>$insert){
          $database = [

          'total'=>$req->total[$key],
          'total_days'=>$req->total_days[$key],
          'detail'=>$req->detail[$key],
          'carpenter_name'=>$req->carpenter_name[$key],
          'nasar_quater_no'=>$req->nasar_quater_no[$key],
          'inc_id'=>$req->inc_id[$key],
          'date'=>$req->date[$key],

          ];
  
          // return dd($database);
          DB::table('darul_nasar_yomiya_detail_carpenters')->insert($database);
      }
      return redirect("stock_muramat_quater_categores");
  
      }
      // waqfeen carpenter yomiya
      function darul_waqfeen_yomiya_cartpenter(Request $req)
      {
         
          foreach($req->inc_id as $key=>$insert){
          $database = [

          'total'=>$req->total[$key],
          'total_days'=>$req->total_days[$key],
          'detail'=>$req->detail[$key],
          'carpenter_name'=>$req->carpenter_name[$key],
          'waqfeen_quater_no'=>$req->waqfeen_quater_no[$key],
          'inc_id'=>$req->inc_id[$key],
          'date'=>$req->date[$key],

          ];
  
          // return dd($database);
          DB::table('darul_waqfeen_yomiya_detail_carpenters')->insert($database);
      }
      return redirect("stock_muramat_quater_categores");
  
      }
     // nasar carpenter
     function darul_nasar_cartpenter(Request $req)
     {


     foreach($req->inc_id as $key=>$insert){
        $database = [

            'total_days'=>$req->total_days[$key],
            'detail'=>$req->detail[$key],
            'carpenter_name'=>$req->carpenter_name[$key],
            'nasar_quater_no'=>$req->nasar_quater_no[$key],
            'inc_id'=>$req->inc_id[$key],
            // 'day'=>$req->day[$key],
            // 'size'=>$req->size[$key],
            'rate'=>$req->rate[$key],
            'amount'=>$req->amount[$key],
            'date'=>$req->date[$key],
            // 'muhala'=>$req->muhala[$key],




        ];

        // return dd($database);
        DB::table('darul_nasar_detail_carpenters')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");
}

      // sadar painter
    function darul_nasar_painter(Request $req)
    {


        foreach($req->inc_id as $key=>$insert){
            $database = [
            'inc_id'=>$req->inc_id[$key],
            'per_murabah_rate'=>$req->per_murabah_rate[$key],
            'rakbah'=>$req->rakbah[$key],
            'painter_name'=>$req->painter_name[$key],
            'nasar_quater_no'=>$req->nasar_quater_no[$key],
            // 'day'=>$req->day[$key],
            'kaam'=>$req->kaam[$key],
            'date'=>$req->date[$key],
            // 'muhala'=>$req->muhala[$key],


            ];

            // return dd($database);
            DB::table('darul_nasar_detail_painters')->insert($database);
        }
        return redirect("stock_muramat_quater_categores");

    }
  // waqfeen painter
  function darul_waqfeen_painter(Request $req)
  {

    //   $data= new darul_waqfeen_detail_painter;
    //   $data->detail=$req->detail;
    //   $data->waqfeen_quater_no=$req->waqfeen_quater_no;
    //   $data->painter_name=$req->painter_name;
    //   $data->total=$req->total;



    //   $data->date=$req->date;

    //   $data->save();

    //   return view("stock_muramat_quater_categores",$data);
    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'per_murabah_rate'=>$req->per_murabah_rate[$key],
        'rakbah'=>$req->rakbah[$key],
        'painter_name'=>$req->painter_name[$key],
        'waqfeen_quater_no'=>$req->waqfeen_quater_no[$key],
        // 'day'=>$req->day[$key],
        'kaam'=>$req->kaam[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],


        ];

        // return dd($database);
        DB::table('darul_waqfeen_detail_painters')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");

  }
  // waqfeen carpenter
  function darul_waqfeen_cartpenter(Request $req)
  {

    foreach($req->inc_id as $key=>$insert){
        $database = [

        'total_days'=>$req->total_days[$key],
        'detail'=>$req->detail[$key],
        'carpenter_name'=>$req->carpenter_name[$key],
        'waqfeen_quater_no'=>$req->waqfeen_quater_no[$key],
        'inc_id'=>$req->inc_id[$key],
        // 'day'=>$req->day[$key],
        // 'size'=>$req->size[$key],
        'rate'=>$req->rate[$key],
        'amount'=>$req->amount[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],


        ];

        // return dd($database);
        DB::table('darul_waqfeen_detail_carpenters')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");

  }



  // factory painter
  function factory_area_painter(Request $req)
  {
    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'per_murabah_rate'=>$req->per_murabah_rate[$key],
        'rakbah'=>$req->rakbah[$key],
        'painter_name'=>$req->painter_name[$key],
        'factory_quater_no'=>$req->factory_quater_no[$key],
        // 'day'=>$req->day[$key],
        'kaam'=>$req->kaam[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],


        ];

        // return dd($database);
        DB::table('factory_area_detail_painters')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");

}
    //   $data= new factory_area_detail_painter;
    //   $data->detail=$req->detail;
    //   $data->factory_quater_no=$req->factory_quater_no;
    //   $data->painter_name=$req->painter_name;
    //   $data->total=$req->total;

    // //   $data->safaidi_rakbah=$req->safaidi_rakbah;
    // //   $data->safaidi_per_murabah_rate=$req->safaidi_per_murabah_rate;
    // //   $data->paint_rakbah=$req->paint_rakbah;
    // //   $data->paint_per_murabah_rate=$req->paint_per_murabah_rate;
    // //   $data->distamper_rakbah=$req->distamper_rakbah;
    // //   $data->distamper_per_murabah_rate=$req->distamper_per_murabah_rate;
    // //   $data->total_days=$req->total_days;
    //   $data->date=$req->date;


    //   $data->save();


  // factory carpenter
  function factory_area_cartpenter(Request $req)
  {

    foreach($req->inc_id as $key=>$insert){
        $database = [

            'total_days'=>$req->total_days[$key],
            'detail'=>$req->detail[$key],
            'carpenter_name'=>$req->carpenter_name[$key],
            'factory_quater_no'=>$req->factory_quater_no[$key],
            'inc_id'=>$req->inc_id[$key],
            // 'day'=>$req->day[$key],
            // 'size'=>$req->size[$key],
            'rate'=>$req->rate[$key],
            'amount'=>$req->amount[$key],
            'date'=>$req->date[$key],
            // 'muhala'=>$req->muhala[$key],



        ];

        // return dd($database);
        DB::table('factory_area_detail_carpenters')->insert($database);
    }

      return redirect("stock_muramat_quater_categores");

  }


 // fatuh painter
 function darul_fatuh_painter(Request $req)
 {

        foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'per_murabah_rate'=>$req->per_murabah_rate[$key],
        'rakbah'=>$req->rakbah[$key],
        'painter_name'=>$req->painter_name[$key],
        'fatuh_quater_no'=>$req->fatuh_quater_no[$key],
        // 'day'=>$req->day[$key],
        'kaam'=>$req->kaam[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],

        ];

        // return dd($database);
        DB::table('darul_fatuh_detail_painters')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");

}
 // fatuh carpenter
 function darul_fatuh_cartpenter(Request $req)
 {


    foreach($req->inc_id as $key=>$insert){
        $database = [

        'total_days'=>$req->total_days[$key],
        'detail'=>$req->detail[$key],
        'carpenter_name'=>$req->carpenter_name[$key],
        'fatuh_quater_no'=>$req->fatuh_quater_no[$key],
        'inc_id'=>$req->inc_id[$key],
        // 'day'=>$req->day[$key],
        // 'size'=>$req->size[$key],
        'rate'=>$req->rate[$key],
        'amount'=>$req->amount[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],


        ];

        // return dd($database);
        DB::table('darul_fatuh_detail_carpenters')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");
 }


 // yaman painter
 function darul_yaman_painter(Request $req)
 {

    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'per_murabah_rate'=>$req->per_murabah_rate[$key],
        'rakbah'=>$req->rakbah[$key],
        'painter_name'=>$req->painter_name[$key],
        'yaman_quater_no'=>$req->yaman_quater_no[$key],
        // 'day'=>$req->day[$key],
        'kaam'=>$req->kaam[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],


        ];

        // return dd($database);
        DB::table('darul_yaman_detail_painters')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");

 }
 // yaman carpenter
 function darul_yaman_cartpenter(Request $req)
 {

    foreach($req->inc_id as $key=>$insert){
        $database = [

        'total_days'=>$req->total_days[$key],
        'detail'=>$req->detail[$key],
        'carpenter_name'=>$req->carpenter_name[$key],
        'yaman_quater_no'=>$req->yaman_quater_no[$key],
        'inc_id'=>$req->inc_id[$key],
        // 'day'=>$req->day[$key],
        // 'size'=>$req->size[$key],
        'rate'=>$req->rate[$key],
        'amount'=>$req->amount[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],


        ];

        // return dd($database);
        DB::table('darul_yaman_detail_carpenters')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");

 }


 // sadar carpenter yomiya 
 function sadar_search_yomiya_carpenter(Request $req)
{
    $data= darul_sadar_yomiya_detail_carpenter::
    where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('sadar_stock_yomiya_carpenter_list_search',['cols'=>$data]);
}
// nasar carpenter yomiya 
function nasar_search_yomiya_carpenter(Request $req)
{
    $data= darul_nasar_yomiya_detail_carpenter::
    where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('nasar_stock_yomiya_carpenter_list_search',['cols'=>$data]);
}
// nasar carpenter yomiya 
function waqfeen_search_yomiya_carpenter(Request $req)
{
    $data= darul_waqfeen_yomiya_detail_carpenter::
    where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('waqfeen_stock_yomiya_carpenter_list_search',['cols'=>$data]);
}
// fatuh carpenter yomiya 
function fatuh_search_yomiya_carpenter(Request $req)
{
    $data= darul_fatuh_yomiya_detail_carpenter::
    where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('fatuh_stock_yomiya_carpenter_list_search',['cols'=>$data]);
}
// yaman carpenter yomiya 
function yaman_search_yomiya_carpenter(Request $req)
{
    $data= darul_yaman_yomiya_detail_carpenter::
    where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('yaman_stock_yomiya_carpenter_list_search',['cols'=>$data]);
}
// factory_area carpenter yomiya 
function factory_area_search_yomiya_carpenter(Request $req)
{
    $data= factory_area_yomiya_detail_carpenter::
    where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('factory_area_stock_yomiya_carpenter_list_search',['cols'=>$data]);
}
 //sadar get paint+carpenter
 function sadar_stock_paint(){
    $data= darul_sadar_detail_painter::paginate(30);
     return view('sadar_stock_paint_list',['cols'=>$data]);
}
function sadar_stock_carpenter(){
    $data= darul_sadar_detail_carpenter::paginate(30);
     return view('sadar_stock_carpenter_list',['cols'=>$data]);
}
function sadar_stock_yomiya_carpenter(){
  $data= darul_sadar_yomiya_detail_carpenter::paginate(30);
   return view('sadar_stock_yomiya_carpenter_list',['cols'=>$data]);
}
function waqfeen_stock_yomiya_carpenter(){
  $data= darul_waqfeen_yomiya_detail_carpenter::paginate(30);
   return view('waqfeen_stock_yomiya_carpenter_list',['cols'=>$data]);
}
function nasar_stock_yomiya_carpenter(){
  $data= darul_nasar_yomiya_detail_carpenter::paginate(30);
   return view('nasar_stock_yomiya_carpenter_list',['cols'=>$data]);
}
function fatuh_stock_yomiya_carpenter(){
  $data= darul_fatuh_yomiya_detail_carpenter::paginate(30);
   return view('fatuh_stock_yomiya_carpenter_list',['cols'=>$data]);
}
function factory_stock_yomiya_carpenter(){
  $data= factory_area_yomiya_detail_carpenter::paginate(30);
   return view('factory_area_stock_yomiya_carpenter_list',['cols'=>$data]);
}
function yaman_stock_yomiya_carpenter(){
  $data= darul_yaman_yomiya_detail_carpenter::paginate(30);
   return view('yaman_stock_yomiya_carpenter_list',['cols'=>$data]);
}
//nasar get paint+carpenter
function nasar_stock_paint(){
    $data= darul_nasar_detail_painter::paginate(10);
     return view('nasar_stock_paint_list',['cols'=>$data]);
}
function nasar_stock_carpenter(){
    $data= darul_nasar_detail_carpenter::paginate(30);
     return view('nasar_stock_carpenter_list',['cols'=>$data]);
}
//waqfeen get paint+carpenter
function waqfeen_stock_paint(){
    $data= darul_waqfeen_detail_painter::paginate(30);
     return view('waqfeen_stock_paint_list',['cols'=>$data]);
}
function waqfeen_stock_carpenter(){
    $data= darul_waqfeen_detail_carpenter::paginate(30);
     return view('waqfeen_stock_carpenter_list',['cols'=>$data]);
}
//fatuh get paint+carpenter
function fatuh_stock_paint(){
    $data= darul_fatuh_detail_painter::paginate(30);
     return view('fatuh_stock_paint_list',['cols'=>$data]);
}
function fatuh_stock_carpenter(){
    $data= darul_fatuh_detail_carpenter::paginate(30);
     return view('fatuh_stock_carpenter_list',['cols'=>$data]);
}

//yaman get paint+carpenter
function yaman_stock_paint(){
    $data= darul_yaman_detail_painter::paginate(30);
     return view('yaman_stock_paint_list',['cols'=>$data]);
}
function yaman_stock_carpenter(){
    $data= darul_yaman_detail_carpenter::paginate(30);
     return view('yaman_stock_carpenter_list',['cols'=>$data]);
}
//factory get paint+carpenter
function factory_stock_paint(){
    $data= factory_area_detail_painter::paginate(30);
     return view('factory_stock_paint_list',['cols'=>$data]);
}
function factory_stock_carpenter(){
    $data= factory_area_detail_carpenter::paginate(30);
     return view('factory_stock_carpenter_list',['cols'=>$data]);
}
//sadar edit paint
function delete_stock_paint_sadar($id){
    $data= darul_sadar_detail_painter::find($id);
    $data->delete();
    return redirect('sadar_stock_paint_list');
  }

  function showData_stock_paint_sadar($id){
    $data= darul_sadar_detail_painter::find($id);
    return view('edit_stock_amad_quater_entry_darul_sadar_paint',['data'=>$data]);
  }
  function update_stock_paint_sadar(Request $req){

    $data = darul_sadar_detail_painter::find($req->id);
    $data->quater_no=$req->quater_no;
    $data->painter_name=$req->painter_name;
    $data->kaam=$req->kaam;
    $data->rakbah=$req->rakbah;
    $data->per_murabah_rate=$req->per_murabah_rate;

    // $data->safaidi_rakbah=$req->safaidi_rakbah;
    // $data->safaidi_per_murabah_rate=$req->safaidi_per_murabah_rate;
    // $data->paint_rakbah=$req->paint_rakbah;
    // $data->paint_per_murabah_rate=$req->paint_per_murabah_rate;
    // $data->distamper_rakbah=$req->distamper_rakbah;
    // $data->distamper_per_murabah_rate=$req->distamper_per_murabah_rate;
    // $data->total_days=$req->total_days;

    $data->save();
    return redirect('sadar_stock_paint_list');
  }
  //sadar edit carpenter
function delete_stock_carpenter_sadar($id){
    $data= darul_sadar_detail_carpenter::find($id);
    $data->delete();
    return redirect('sadar_stock_carpenter_list');
  }

  function showData_stock_carpenter_sadar($id){
    $data= darul_sadar_detail_carpenter::find($id);
    return view('edit_stock_amad_quater_entry_darul_sadar_carpenter',['data'=>$data]);
  }
  function update_stock_carpenter_sadar(Request $req){
    $data = darul_sadar_detail_carpenter::find($req->id);
    $data->detail=$req->detail;
     $data->quater_no=$req->quater_no;
     $data->total_days=$req->total_days;
     $data->carpenter_name=$req->carpenter_name;
     $data->rate=$req->rate;
     $data->amount=$req->amount;
    //  $data->size=$req->size;


    $data->save();
    return redirect('sadar_stock_carpenter_list');
  }
  //nasar edit paint
function delete_stock_paint_nasar($id){
    $data= darul_nasar_detail_painter::find($id);
    $data->delete();
    return redirect('nasar_stock_paint_list');
  }

  function showData_stock_paint_nasar($id){
    $data= darul_nasar_detail_painter::find($id);
    return view('edit_stock_amad_quater_entry_darul_nasar_paint',['data'=>$data]);
  }
  function update_stock_paint_nasar(Request $req){
    $data = darul_nasar_detail_painter::find($req->id);
    $data->nasar_quater_no=$req->nasar_quater_no;
    $data->painter_name=$req->painter_name;
    $data->kaam=$req->kaam;
    $data->rakbah=$req->rakbah;
    $data->per_murabah_rate=$req->per_murabah_rate;


    // $data->safaidi_rakbah=$req->safaidi_rakbah;
    // $data->safaidi_per_murabah_rate=$req->safaidi_per_murabah_rate;
    // $data->paint_rakbah=$req->paint_rakbah;
    // $data->paint_per_murabah_rate=$req->paint_per_murabah_rate;
    // $data->distamper_rakbah=$req->distamper_rakbah;
    // $data->distamper_per_murabah_rate=$req->distamper_per_murabah_rate;
    // $data->total_days=$req->total_days;

    $data->save();
    return redirect('nasar_stock_paint_list');
  }
  //nasar edit carpenter
function delete_stock_carpenter_nasar($id){
    $data= darul_nasar_detail_carpenter::find($id);
    $data->delete();
    return redirect('nasar_stock_carpenter_list');
  }

  function showData_stock_carpenter_nasar($id){
    $data= darul_nasar_detail_carpenter::find($id);
    return view('edit_stock_amad_quater_entry_darul_nasar_carpenter',['data'=>$data]);
  }
  function update_stock_carpenter_nasar(Request $req){
     $data = darul_nasar_detail_carpenter::find($req->id);
     $data->detail=$req->detail;
     $data->nasar_quater_no=$req->nasar_quater_no;
     $data->total_days=$req->total_days;
     $data->carpenter_name=$req->carpenter_name;
     $data->amount=$req->amount;
     $data->rate=$req->rate;
    //  $data->size=$req->size;



    $data->save();
    return redirect('nasar_stock_carpenter_list');
  }
  //factory edit paint
function delete_stock_paint_factory($id){
    $data= factory_area_detail_painter::find($id);
    $data->delete();
    return redirect('factory_stock_paint_list');
  }

  function showData_stock_paint_factory($id){
    $data= factory_area_detail_painter::find($id);
    return view('edit_stock_amad_quater_entry_factory_paint',['data'=>$data]);
  }
  function update_stock_paint_factory(Request $req){
    $data = factory_area_detail_painter::find($req->id);
    $data->factory_quater_no=$req->factory_quater_no;
    $data->painter_name=$req->painter_name;
    $data->kaam=$req->kaam;
    $data->rakbah=$req->rakbah;
    $data->per_murabah_rate=$req->per_murabah_rate;

    $data->save();
    return redirect('factory_stock_paint_list');
  }
  //factory edit carpenter
function delete_stock_carpenter_factory($id){
    $data= factory_area_detail_carpenter::find($id);
    $data->delete();
    return redirect('factory_stock_carpenter_list');
  }

  function showData_stock_carpenter_factory($id){
    $data= factory_area_detail_carpenter::find($id);
    return view('edit_stock_amad_quater_entry_factory_carpenter',['data'=>$data]);
  }
  function update_stock_carpenter_factory(Request $req){
     $data = factory_area_detail_carpenter::find($req->id);
     $data->detail=$req->detail;
     $data->factory_quater_no=$req->factory_quater_no;
     $data->total_days=$req->total_days;
     $data->carpenter_name=$req->carpenter_name;
     $data->rate=$req->rate;
     $data->amount=$req->amount;
    //  $data->size=$req->size;

    $data->save();
    return redirect('factory_stock_carpenter_list');
  }
  //waqfeen edit paint
function delete_stock_paint_waqfeen($id){
    $data= darul_waqfeen_detail_painter::find($id);
    $data->delete();
    return redirect('waqfeen_stock_paint_list');
  }

  function showData_stock_paint_waqfeen($id){
    $data= darul_waqfeen_detail_painter::find($id);
    return view('edit_stock_amad_quater_entry_darul_waqfeen_paint',['data'=>$data]);
  }
  function update_stock_paint_waqfeen(Request $req){
    $data = darul_waqfeen_detail_painter::find($req->id);
    $data->waqfeen_quater_no=$req->waqfeen_quater_no;
    $data->painter_name=$req->painter_name;
    $data->kaam=$req->kaam;
    $data->rakbah=$req->rakbah;
    $data->per_murabah_rate=$req->per_murabah_rate;

    // $data->safaidi_rakbah=$req->safaidi_rakbah;
    // $data->safaidi_per_murabah_rate=$req->safaidi_per_murabah_rate;
    // $data->paint_rakbah=$req->paint_rakbah;
    // $data->paint_per_murabah_rate=$req->paint_per_murabah_rate;
    // $data->distamper_rakbah=$req->distamper_rakbah;
    // $data->distamper_per_murabah_rate=$req->distamper_per_murabah_rate;

    $data->save();
    return redirect('waqfeen_stock_paint_list');
  }//waqfeen edit carpenter
function delete_stock_carpenter_waqfeen($id){
    $data= darul_waqfeen_detail_carpenter::find($id);
    $data->delete();
    return redirect('waqfeen_stock_carpenter_list');
  }

  function showData_stock_carpenter_waqfeen($id){
    $data= darul_waqfeen_detail_carpenter::find($id);
    return view('edit_stock_amad_quater_entry_darul_waqfeen_carpenter',['data'=>$data]);
  }
  function update_stock_carpenter_waqfeen(Request $req){
    $data = darul_waqfeen_detail_carpenter::find($req->id);
    $data->detail=$req->detail;
    $data->waqfeen_quater_no=$req->waqfeen_quater_no;
    $data->total_days=$req->total_days;
    $data->carpenter_name=$req->carpenter_name;
    $data->total=$req->total;
    $data->rate=$req->rate;
    $data->amount=$req->amount;
    // $data->size=$req->size;



    $data->save();
    return redirect('waqfeen_stock_carpenter_list');
  }
    //yaman edit carpenter
function delete_stock_carpenter_yaman($id){
    $data= darul_yaman_detail_carpenter::find($id);
    $data->delete();
    return redirect('yaman_stock_carpenter_list');
  }

  function showData_stock_carpenter_yaman($id){
    $data= darul_yaman_detail_carpenter::find($id);
    return view('edit_stock_amad_quater_entry_darul_yaman_carpenter',['data'=>$data]);
  }
  function update_stock_carpenter_yaman(Request $req){
    $data = darul_yaman_detail_carpenter::find($req->id);
    $data->detail=$req->detail;
    $data->yaman_quater_no=$req->yaman_quater_no;
    $data->total_days=$req->total_days;
    $data->carpenter_name=$req->carpenter_name;
    $data->rate=$req->rate;
    $data->amount=$req->amount;
    // $data->size=$req->size;



    $data->save();
    return redirect('yaman_stock_carpenter_list');
  }
   //yaman edit paint
function delete_stock_paint_yaman($id){
    $data= darul_yaman_detail_painter::find($id);
    $data->delete();
    return redirect('yaman_stock_paint_list');
  }

  function showData_stock_paint_yaman($id){
    $data= darul_yaman_detail_painter::find($id);
    return view('edit_stock_amad_quater_entry_darul_yaman_paint',['data'=>$data]);
  }
  function update_stock_paint_yaman(Request $req){
    $data = darul_yaman_detail_painter::find($req->id);
    $data->yaman_quater_no=$req->yaman_quater_no;
    $data->painter_name=$req->painter_name;
    $data->kaam=$req->kaam;
    $data->rakbah=$req->rakbah;
    $data->per_murabah_rate=$req->per_murabah_rate;
    // $data->safaidi_rakbah=$req->safaidi_rakbah;
    // $data->safaidi_per_murabah_rate=$req->safaidi_per_murabah_rate;
    // $data->paint_rakbah=$req->paint_rakbah;
    // $data->paint_per_murabah_rate=$req->paint_per_murabah_rate;
    // $data->distamper_rakbah=$req->distamper_rakbah;
    // $data->distamper_per_murabah_rate=$req->distamper_per_murabah_rate;
    // $data->total_days=$req->total_days;


    $data->save();
    return redirect('yaman_stock_paint_list');
  }
  //fatuh edit paint
function delete_stock_paint_fatuh($id){
    $data= darul_fatuh_detail_painter::find($id);
    $data->delete();
    return redirect('fatuh_stock_paint_list');
  }

  function showData_stock_paint_fatuh($id){
    $data= darul_fatuh_detail_painter::find($id);
    return view('edit_stock_amad_quater_entry_darul_fatuh_paint',['data'=>$data]);
  }
  function update_stock_paint_fatuh(Request $req){
    $data = darul_fatuh_detail_painter::find($req->id);
    $data->fatuh_quater_no=$req->fatuh_quater_no;
    $data->painter_name=$req->painter_name;
    $data->kaam=$req->kaam;
    $data->rakbah=$req->rakbah;
    $data->per_murabah_rate=$req->per_murabah_rate;

    // $data->safaidi_rakbah=$req->safaidi_rakbah;
    // $data->safaidi_per_murabah_rate=$req->safaidi_per_murabah_rate;
    // $data->paint_rakbah=$req->paint_rakbah;
    // $data->paint_per_murabah_rate=$req->paint_per_murabah_rate;
    // $data->distamper_rakbah=$req->distamper_rakbah;
    // $data->distamper_per_murabah_rate=$req->distamper_per_murabah_rate;
    // $data->total_days=$req->total_days;


    $data->save();
    return redirect('fatuh_stock_paint_list');
  }
  //fatuh edit carpenter
function delete_stock_carpenter_fatuh($id){
    $data= darul_fatuh_detail_carpenter::find($id);
    $data->delete();
    return redirect('fatuh_stock_carpenter_list');
  }

  function showData_stock_carpenter_fatuh($id){
    $data= darul_fatuh_detail_carpenter::find($id);
    return view('edit_stock_amad_quater_entry_darul_fatuh_carpenter',['data'=>$data]);
  }
  function update_stock_carpenter_fatuh(Request $req){
    $data = darul_fatuh_detail_carpenter::find($req->id);
    $data->detail=$req->detail;
    $data->fatuh_quater_no=$req->fatuh_quater_no;
    $data->total_days=$req->total_days;
    $data->carpenter_name=$req->carpenter_name;
    $data->rate=$req->rate;
    $data->amount=$req->amount;
    // $data->size=$req->size;

    $data->save();
    return redirect('fatuh_stock_carpenter_list');
  }
 //sadar search
  function sadar_store_paint_list_search(Request $req)
  {
      $data= darul_sadar_detail_painter::
      where('painter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","DESC")
      ->get();
      return view('stock_store_paint_sadar_list_search',['cols'=>$data]);
  }
  function sadar_store_carpenter_list_search(Request $req)
  {
      $data= darul_sadar_detail_carpenter::
      where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Desc")
      ->get();
      return view('stock_store_carpenter_sadar_list_search',['cols'=>$data]);
  }
  static function cartItem_sadar()
  {
      return darul_sadar_detail_carpenter::get('id')->count();

  }
  static function cartItem_sadar_yomiya()
  {
      return darul_sadar_yomiya_detail_carpenter::get('id')->count();

  }
  static function cartItem_steel_sadar()
  {
      return darul_sadar_detail_steel::get('id')->count();

  }
  static function cartItem_steel_yaman()
  {
      return darul_yaman_detail_steel::get('id')->count();

  }
  static function cartItem_steel_factory()
  {
      return darul_factory_detail_steel::get('id')->count();

  }
  static function cartItem_steel_fatuh()
  {
      return darul_fatuh_detail_steel::get('id')->count();

  }
  static function cartItem_nasar_steel()
  {
      return darul_nasar_detail_steel::get('id')->count();

  }
  static function cartItem_waqfeen_steel()
  {
      return darul_waqfeen_detail_steel::get('id')->count();

  }
  static function cartItem_factory()
  {
      return factory_area_detail_carpenter::get('id')->count();

  }
  static function cartItem_fatuh()
  {
      return darul_fatuh_detail_carpenter::get('id')->count();

  }
  static function cartItem_waqfeen()
  {
      return darul_waqfeen_detail_carpenter::get('id')->count();

  }
  static function cartItem_nasar()
  {
      return darul_nasar_detail_carpenter::get('id')->count();

  }
  static function cartItem_sadar_painter()
  {
      return darul_sadar_detail_painter::get('id')->count();

  }
  static function cartItem_factory_painter()
  {
      return factory_area_detail_painter::get('id')->count();

  }
  static function cartItem_sadar_mistri()
  {
      return darul_sadar_detail_mistri::get('id')->count();

  }
  static function cartItem_yaman_mistri()
  {
      return darul_yaman_detail_mistri::get('id')->count();

  }
  static function cartItem_factory_mistri()
  {
      return factory_area_detail_mistri::get('id')->count();

  }
  static function cartItem_fatuh_mistri()
  {
      return darul_fatuh_detail_mistri::get('id')->count();

  }
  static function cartItem_waqfeen_mistri()
  {
      return darul_waqfeen_detail_mistri::get('id')->count();

  }
  static function cartItem_nasar_mistri()
  {
      return darul_nasar_detail_mistri::get('id')->count();

  }
  static function cartItem_yaman_painter()
  {
      return darul_yaman_detail_painter::get('id')->count();

  }
  static function cartItem_yaman_marbel()
  {
      return quater_yaman_marbel::get('id')->count();

  }
  static function cartItem_factory_marbel()
  {
      return quater_factory_marbel::get('id')->count();

  }
  static function cartItem_fatuh_painter()
  {
      return darul_fatuh_detail_painter::get('id')->count();

  }
  static function cartItem_yaman()
  {
      return darul_yaman_detail_carpenter::get('id')->count();

  }
  static function cartItem_nasar_painter()
  {
      return darul_nasar_detail_painter::get('id')->count();

  }
  static function cartItem_waqfeen_painter()
  {
      return darul_waqfeen_detail_painter::get('id')->count();

  }
  static function cartItem_sadar_marbel()
  {
      return quater_sadar_marbel::get('id')->count();

  }
  static function cartItem_fatuh_marbel()
  {
      return quater_fatuh_marbel::get('id')->count();

  }
  static function cartItem_waqfeen_marbel()
  {
      return quater_waqfeen_marbel::get('id')->count();

  }
  static function cartItem_nasar_marbel()
  {
      return quater_nasar_marbel::get('id')->count();

  }
  //nasar search
  function nasar_store_paint_list_search(Request $req)
  {
      $data= darul_nasar_detail_painter::
      where('painter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('stock_store_paint_nasar_list_search',['cols'=>$data]);
  }
  function nasar_store_carpenter_list_search(Request $req)
  {
      $data= darul_nasar_detail_carpenter::
      where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('stock_store_carpenter_nasar_list_search',['cols'=>$data]);
  }
  //factory search
  function factory_store_paint_list_search(Request $req)
  {
      $data= factory_area_detail_painter::
      where('painter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('stock_store_paint_factory_list_search',['cols'=>$data]);
  }
  function factory_store_carpenter_list_search(Request $req)
  {
      $data= factory_area_detail_carpenter::
      where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('stock_store_carpenter_factory_list_search',['cols'=>$data]);
  }
  //waqfeen search
  function waqfeen_store_paint_list_search(Request $req)
  {
      $data= darul_waqfeen_detail_painter::
      where('painter_name','LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('stock_store_paint_waqfeen_list_search',['cols'=>$data]);
  }
  function waqfeen_store_carpenter_list_search(Request $req)
  {
      $data= darul_waqfeen_detail_carpenter::
      where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('stock_store_carpenter_waqfeen_list_search',['cols'=>$data]);
  }
  //fatuh search
  function fatuh_store_paint_list_search(Request $req)
  {
      $data= darul_fatuh_detail_painter::
      where('painter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('stock_store_paint_fatuh_list_search',['cols'=>$data]);
  }
  function fatuh_store_carpenter_list_search(Request $req)
  {
      $data= darul_fatuh_detail_carpenter::
      where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('stock_store_carpenter_fatuh_list_search',['cols'=>$data]);
  }
  //yaman search
  function yaman_store_paint_list_search(Request $req)
  {
      $data= darul_yaman_detail_painter::
      where('painter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('stock_store_paint_yaman_list_search',['cols'=>$data]);
  }
  function yaman_store_carpenter_list_search(Request $req)
  {
      $data= darul_yaman_detail_carpenter::
      where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('stock_store_carpenter_yaman_list_search',['cols'=>$data]);
  }
// bill for quater

function quater_bill_post(Request $req){
    $data = new quater_bill;
    $data->detail=$req->detail;
    $data->maqam=$req->maqam;
    $data->mistri_days=$req->mistri_days;
    $data->mazdur_days=$req->mazdur_days;
    $data->mistri_name=$req->mistri_name;
    $data->mistri_rate=$req->mistri_rate;
    $data->mazdur_rate=$req->mazdur_rate;
    $data->quater_no=$req->quater_no;
    $data->day=$req->day;
    $data->date=$req->date;


    $data->save();
    return redirect("quater_bill_mistri");


  }
  // bill for quater carpenter

function quater_bill_carpenter(Request $req){
    $data = new quater_bill_carpenter;
    $data->detail=$req->detail;
    $data->maqam=$req->maqam;
    $data->total_days=$req->total_days;
    $data->carpenter_name=$req->carpenter_name;

    $data->quater_no=$req->quater_no;
    $data->day=$req->day;
    $data->date=$req->date;
    $data->amount=$req->amount;
    $data->size=$req->size;
    $data->rate=$req->rate;

    $data->date=$req->date;

    $data->save();
    return redirect("quater_bill_carpenter");


  }
   // bill for quater painter
  function quater_bill_paint(Request $req){
    $data = new quater_bill_painter;
    // $data->detail=$req->detail;
    $data->maqam=$req->maqam;
    // $data->total_days=$req->total_days;
    $data->painter_name=$req->painter_name;
    $data->kaam_no_1=$req->kaam_no_1;
    $data->kaam_no_2=$req->kaam_no_2;
    $data->kaam_no_3=$req->kaam_no_3;
    $data->rukbah_kaam_no1=$req->rukbah_kaam_no1;
    $data->rukbah_kaam_no2=$req->rukbah_kaam_no2;
    $data->rukbah_kaam_no3=$req->rukbah_kaam_no3;
    $data->per_murbah_rate_kaam1=$req->per_murbah_rate_kaam1;
    $data->per_murbah_rate_kaam2=$req->per_murbah_rate_kaam2;
    $data->per_murbah_rate_kaam3=$req->per_murbah_rate_kaam3;


    $data->quater_no=$req->quater_no;
    $data->day=$req->day;
    $data->date=$req->date;
    // $data =  quater_bill_painter::all();
    // $data->delete();


    $data->save();
    return redirect("quater_bill_painter");

  }
   //  quater painter yomiya
   function quater_painter_yomiya_bill(Request $req){
    $data = new quater_bill_paint_day;
    $data->total_days=$req->total_days;
    $data->painter_name=$req->painter_name;
    $data->detail=$req->detail;
    $data->quater_no=$req->quater_no;
    // $data->day=$req->day;
    $data->date=$req->date;
    $data->total=$req->total;
    // $data->muhala=$req->muhala;


    $data->save();
    return redirect("quater");

  }
 //sadar painter yomiya update

  function delete_quater_painter_yomiya($id){
    $data= quater_bill_paint_day::find($id);
    $data->delete();
    return redirect('quater_sadar_paint_yomiya_list');
  }

  function showData_quater_painter_yomiya($id){
    $data= quater_bill_paint_day::find($id);
    return view('edit_quater_sadar_paint_yomiay_entry',['data'=>$data]);
  }
  function update_quater_yomiya(Request $req){
    $data = quater_bill_paint_day::find($req->id);

    $data->quater_no=$req->quater_no;
    $data->date=$req->date;
    $data->painter_name=$req->painter_name;
    $data->total_days=$req->total_days;
    $data->detail=$req->detail;

    $data->save();
    return redirect('quater_sadar_paint_yomiya_list');
  }
  //nasar painter yomiya update
  function delete_nasar_quater_painter_yomiya($id){
    $data= quater_nasar_paint_day::find($id);
    $data->delete();
    return redirect('quater_sadar_paint_yomiya_list');
  }

  function showData_nasar_quater_painter_yomiya($id){
    $data= quater_nasar_paint_day::find($id);
    return view('edit_quater_nasar_paint_yomiay_entry',['data'=>$data]);
  }
  function update_nasar_quater_yomiya(Request $req){
    $data = quater_nasar_paint_day::find($req->id);

    $data->nasar_quater_no=$req->nasar_quater_no;
    $data->date=$req->date;
    $data->painter_name=$req->painter_name;
    $data->total_days=$req->total_days;
    $data->detail=$req->detail;

    $data->save();
    return redirect('quater_nasar_paint_yomiya_list');
  }
 //factory painter yomiya update
 function delete_factory_quater_painter_yomiya($id){
    $data= quater_factory_paint_day::find($id);
    $data->delete();
    return redirect('quater_sadar_paint_yomiya_list');
  }

  function showData_factory_quater_painter_yomiya($id){
    $data= quater_factory_paint_day::find($id);
    return view('edit_quater_factory_paint_yomiay_entry',['data'=>$data]);
  }
  function update_factory_quater_yomiya(Request $req){
    $data = quater_factory_paint_day::find($req->id);

    $data->factory_quater_no=$req->factory_quater_no;
    $data->date=$req->date;
    $data->painter_name=$req->painter_name;
    $data->total_days=$req->total_days;
    $data->detail=$req->detail;

    $data->save();
    return redirect('quater_factory_paint_yomiya_list');
  }
 //waqfeen painter yomiya update
 function delete_waqfeen_quater_painter_yomiya($id){
    $data= quater_waqfeen_paint_day::find($id);
    $data->delete();
    return redirect('quater_waqfeen_paint_yomiya_list');
  }

  function showData_waqfeen_quater_painter_yomiya($id){
    $data= quater_waqfeen_paint_day::find($id);
    return view('edit_quater_waqfeen_paint_yomiay_entry',['data'=>$data]);
  }
  function update_waqfeen_quater_yomiya(Request $req){
    $data = quater_waqfeen_paint_day::find($req->id);

    $data->waqfeen_quater_no=$req->waqfeen_quater_no;
    $data->date=$req->date;
    $data->painter_name=$req->painter_name;
    $data->total_days=$req->total_days;
    $data->detail=$req->detail;

    $data->save();
    return redirect('quater_waqfeen_paint_yomiya_list');
  }

  //fatuh painter yomiya update
  function delete_fatuh_quater_painter_yomiya($id){
     $data= quater_fatuh_paint_day::find($id);
     $data->delete();
     return redirect('quater_fatuh_paint_yomiya_list');
   }

   function showData_fatuh_quater_painter_yomiya($id){
     $data= quater_fatuh_paint_day::find($id);
     return view('edit_quater_fatuh_paint_yomiay_entry',['data'=>$data]);
   }
   function update_fatuh_quater_yomiya(Request $req){
     $data = quater_fatuh_paint_day::find($req->id);

     $data->fatuh_quater_no=$req->fatuh_quater_no;
     $data->date=$req->date;
     $data->painter_name=$req->painter_name;
     $data->total_days=$req->total_days;
     $data->detail=$req->detail;

     $data->save();
     return redirect('quater_fatuh_paint_yomiya_list');
   }

//yaman painter yomiya update
function delete_yaman_quater_painter_yomiya($id){
    $data= quater_yaman_paint_day::find($id);
    $data->delete();
    return redirect('quater_yaman_paint_yomiya_list');
  }

  function showData_yaman_quater_painter_yomiya($id){
    $data= quater_yaman_paint_day::find($id);
    return view('edit_quater_yaman_paint_yomiay_entry',['data'=>$data]);
  }
  function update_yaman_quater_yomiya(Request $req){
    $data = quater_yaman_paint_day::find($req->id);

    $data->yaman_quater_no=$req->yaman_quater_no;
    $data->date=$req->date;
    $data->painter_name=$req->painter_name;
    $data->total_days=$req->total_days;
    $data->detail=$req->detail;

    $data->save();
    return redirect('quater_yaman_paint_yomiya_list');
  }


  //sadar steel update
function delete_sadar_quater_steel($id){
    $data= darul_sadar_detail_steel::find($id);
    $data->delete();
    return redirect('quater_sadar_steel_list');
  }

  function showData_quater_sadar_steel($id){
    $data= darul_sadar_detail_steel::find($id);
    return view('edit_quater_sadar_steel_entry',['data'=>$data]);
  }
  function update_steel_sadar(Request $req){
    $data = darul_sadar_detail_steel::find($req->id);

    $data->quater_no=$req->quater_no;
    $data->date=$req->date;
    $data->decorator_name=$req->decorator_name;
    $data->weight=$req->weight;
    $data->amount=$req->amount;
    $data->rate=$req->rate;

    $data->detail=$req->detail;

    $data->save();
    return redirect('quater_sadar_steel_list');
  }

   //nasar steel update
function delete_nasar_quater_steel($id){
    $data= darul_nasar_detail_steel::find($id);
    $data->delete();
    return redirect('quater_nasar_steel_list');
  }

  function showData_quater_nasar_steel($id){
    $data= darul_nasar_detail_steel::find($id);
    return view('edit_quater_nasar_steel_entry',['data'=>$data]);
  }
  function update_steel_nasar(Request $req){
    $data = darul_nasar_detail_steel::find($req->id);

    $data->nasar_quater_no=$req->nasar_quater_no;
    $data->date=$req->date;
    $data->decorator_name=$req->decorator_name;
    $data->weight=$req->weight;
    $data->amount=$req->amount;
    $data->rate=$req->rate;

    $data->detail=$req->detail;

    $data->save();
    return redirect('quater_nasar_steel_list');
  }
  //factory steel update
function delete_factory_quater_steel($id){
    $data= darul_factory_detail_steel::find($id);
    $data->delete();
    return redirect('quater_factory_steel_list');
  }

  function showData_quater_factory_steel($id){
    $data= darul_factory_detail_steel::find($id);
    return view('edit_quater_factory_steel_entry',['data'=>$data]);
  }
  function update_steel_factory(Request $req){
    $data = darul_factory_detail_steel::find($req->id);

    $data->factory_quater_no=$req->factory_quater_no;
    $data->date=$req->date;
    $data->decorator_name=$req->decorator_name;
    $data->weight=$req->weight;
    $data->amount=$req->amount;
    $data->rate=$req->rate;

    $data->detail=$req->detail;

    $data->save();
    return redirect('quater_factory_steel_list');
  }
   //waqfeen steel update
function delete_waqfeen_quater_steel($id){
    $data= darul_waqfeen_detail_steel::find($id);
    $data->delete();
    return redirect('quater_factory_steel_list');
  }

  function showData_quater_waqfeen_steel($id){
    $data= darul_waqfeen_detail_steel::find($id);
    return view('edit_quater_waqfeen_steel_entry',['data'=>$data]);
  }
  function update_steel_waqfeen(Request $req){
    $data = darul_waqfeen_detail_steel::find($req->id);

    $data->waqfeen_quater_no=$req->waqfeen_quater_no;
    $data->date=$req->date;
    $data->decorator_name=$req->decorator_name;
    $data->weight=$req->weight;
    $data->amount=$req->amount;
    $data->rate=$req->rate;

    $data->detail=$req->detail;

    $data->save();
    return redirect('quater_waqfeen_steel_list');
  }
     //fatuh steel update
function delete_fatuh_quater_steel($id){
    $data= darul_fatuh_detail_steel::find($id);
    $data->delete();
    return redirect('quater_fatuh_steel_list');
  }

  function showData_quater_fatuh_steel($id){
    $data= darul_fatuh_detail_steel::find($id);
    return view('edit_quater_fatuh_steel_entry',['data'=>$data]);
  }
  function update_steel_fatuh(Request $req){
    $data = darul_fatuh_detail_steel::find($req->id);

    $data->fatuh_quater_no=$req->fatuh_quater_no;
    $data->date=$req->date;
    $data->decorator_name=$req->decorator_name;
    $data->weight=$req->weight;
    $data->amount=$req->amount;
    $data->rate=$req->rate;

    $data->detail=$req->detail;

    $data->save();
    return redirect('quater_fatuh_steel_list');
  }
       //yaman steel update
function delete_yaman_quater_steel($id){
    $data= darul_yaman_detail_steel::find($id);
    $data->delete();
    return redirect('quater_yaman_steel_list');
  }

  function showData_quater_yaman_steel($id){
    $data= darul_yaman_detail_steel::find($id);
    return view('edit_quater_yaman_steel_entry',['data'=>$data]);
  }
  function update_steel_yaman(Request $req){
    $data = darul_yaman_detail_steel::find($req->id);

    $data->yaman_quater_no=$req->yaman_quater_no;
    $data->date=$req->date;
    $data->decorator_name=$req->decorator_name;
    $data->weight=$req->weight;
    $data->amount=$req->amount;
    $data->rate=$req->rate;

    $data->detail=$req->detail;

    $data->save();
    return redirect('quater_yaman_steel_list');
  }
    // factory for quater painter yomiya
    function quater_painter_yomiya_factory(Request $req){
        $data = new quater_factory_paint_day;
        $data->total_days=$req->total_days;
        $data->painter_name=$req->painter_name;
        $data->detail=$req->detail;
        $data->factory_quater_no=$req->factory_quater_no;
        // $data->day=$req->day;
        $data->date=$req->date;
        $data->total=$req->total;
        // $data->muhala=$req->muhala;


        $data->save();
        return redirect("quater");
    }
      // yaman for quater painter yomiya
      function quater_painter_yomiya_yaman(Request $req){
        $data = new quater_yaman_paint_day;
        $data->total_days=$req->total_days;
        $data->painter_name=$req->painter_name;
        $data->detail=$req->detail;
        $data->yaman_quater_no=$req->yaman_quater_no;
        // $data->day=$req->day;
        $data->date=$req->date;
        $data->total=$req->total;
        // $data->muhala=$req->muhala;


        $data->save();
        return redirect("quater");
    }


    // waqfeen for quater painter yomiya
    function quater_painter_yomiya_waqfeen(Request $req){
        $data = new quater_waqfeen_paint_day;
        $data->total_days=$req->total_days;
        $data->painter_name=$req->painter_name;
        $data->detail=$req->detail;
        $data->waqfeen_quater_no=$req->waqfeen_quater_no;
        // $data->day=$req->day;
        $data->date=$req->date;
        $data->total=$req->total;
        // $data->muhala=$req->muhala;


        $data->save();
        return redirect("quater");

      }
       // fatuh for quater painter yomiya
    function quater_painter_yomiya_fatuh(Request $req){
        $data = new quater_fatuh_paint_day;
        $data->total_days=$req->total_days;
        $data->painter_name=$req->painter_name;
        $data->detail=$req->detail;
        $data->fatuh_quater_no=$req->fatuh_quater_no;
        // $data->day=$req->day;
        $data->date=$req->date;
        $data->total=$req->total;
        // $data->muhala=$req->muhala;


        $data->save();
        return redirect("quater");

      }
  // bill for quater painter yomiya
  function quater_painter_yomiya_nasar(Request $req){
    $data = new quater_nasar_paint_day;
    $data->total_days=$req->total_days;
    $data->painter_name=$req->painter_name;
    $data->detail=$req->detail;
    $data->nasar_quater_no=$req->nasar_quater_no;
    // $data->day=$req->day;
    $data->date=$req->date;
    $data->total=$req->total;
    // $data->muhala=$req->muhala;


    $data->save();
    return redirect("quater");

  }
   //  quater painter yomiya
   function quater_paint_yomiya_bill(Request $req){
    $data = new quater_bill_painter_day;
    $data->total_days=$req->total_days;
    $data->painter_name=$req->painter_name;
    $data->detail=$req->detail;
    $data->quater_no=$req->quater_no;
    $data->day=$req->day;
    $data->date=$req->date;
    $data->total=$req->total;
    $data->muhala=$req->muhala;


    $data->save();
    return redirect("quater_bill_paint_yomiya");

  }
  function quater_painter_yomiya_bill_get(){
    $data= quater_bill_painter_day::all();
    if ($data->isEmpty()){
        return redirect('quater_bill_paint_yomiya');

    }else{
     return view('quater_bill_paint_yomiya',['cols'=>$data]);
}}
static function cartItem_paint_yomiya()
{
    return quater_bill_paint_day::get('id')->count();

}

function delete_bill_painter_yomiya_quater($id){
$data= quater_bill_paint_day::find($id);
$data->delete();
return redirect('quater_bill_paint_yomiya');
}
  function quater_bill_get(){
    $data= quater_bill::all();

    if ($data->isEmpty()){
        return redirect('quater_bill_entry');

    }else{
     return view('quater_bill_mistri',['cols'=>$data]);
}}
static function cartItem_mistri()
    {
        return quater_bill::get('id')->count();

    }
function quater_bill_carpenter_get(){
    $data= quater_bill_carpenter::all();

    if ($data->isEmpty()){
        return redirect('quater_bill_entry');

    }else{
     return view('quater_bill_carpenter',['cols'=>$data]);
}}
static function cartItem_carpenter()
    {
        return quater_bill_carpenter::get('id')->count();

    }
function quater_bill_painter_get(){
    $data= quater_bill_painter::all();
    if ($data->isEmpty()){
        return redirect('quater_bill_entry');

    }else{
     return view('quater_bill_painter',['cols'=>$data]);
}}
static function cartItem()
    {
        return quater_bill_painter::get('id')->count();

    }

function delete_bill_quater_mistri($id){
        $data= quater_bill::find($id);
        $data->delete();
        return redirect('quater_bill_mistri');
      }

function delete_bill_quater_carpenter($id){
        $data= quater_bill_carpenter::find($id);
        $data->delete();
        return redirect('quater_bill_carpenter');
      }
function delete_bill_quater_painter($id){
        $data= quater_bill_painter::find($id);
        $data->delete();
        return redirect('quater_bill_painter');
      }
       // bill for quater marbel

function quater_marbel_bill(Request $req){
    $data = new quater_bill_marbel;
    $data->detail=$req->detail;
    $data->maqam=$req->maqam;
    $data->laber_name=$req->laber_name;

    $data->quater_no=$req->quater_no;
    $data->day=$req->day;
    $data->date=$req->date;
    $data->murbah_rate=$req->murbah_rate;
    $data->per_murbah_rate=$req->per_murbah_rate;


    $data->save();
    return redirect("quater_bill_marbel");


  }
  function quater_marbel_bill_get(){
    $data= quater_bill_marbel::all();

    if ($data->isEmpty()){
        return redirect('quater_bill_entry');

    }else{
     return view('quater_bill_marbel',['cols'=>$data]);
}}
static function cartItem_marbel()
    {
        return quater_bill_marbel::get('id')->count();

    }
    function delete_bill_marbel_quater($id){
        $data= quater_bill_marbel::find($id);
        $data->delete();
        return redirect('quater_bill_marbel');
      }
            //  quater marbel sadar

function quater_marbel_sadar(Request $req){
    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'size'=>$req->size[$key],
        'color'=>$req->color[$key],
        'amount'=>$req->amount[$key],
        'rate_per_bag'=>$req->rate_per_bag[$key],
        'laber_name'=>$req->laber_name[$key],
        'quater_no'=>$req->quater_no[$key],
        // 'day'=>$req->day[$key],
        'total_days'=>$req->total_days[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],


        ];
        // return dd($database);
        DB::table('quater_sadar_marbels')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");



  }
   //  quater marbel nasar
  function quater_marbel_nasar(Request $req){
    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'size'=>$req->size[$key],
        'color'=>$req->color[$key],
        'amount'=>$req->amount[$key],
        'rate_per_bag'=>$req->rate_per_bag[$key],
        'laber_name'=>$req->laber_name[$key],
        'nasar_quater_no'=>$req->nasar_quater_no[$key],
        // 'day'=>$req->day[$key],
        'total_days'=>$req->total_days[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],

        ];
        // return dd($database);
        DB::table('quater_nasar_marbels')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");


  }
   //  quater marbel waqfeen
   function quater_marbel_waqfeen(Request $req){
    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'size'=>$req->size[$key],
        'color'=>$req->color[$key],
        'amount'=>$req->amount[$key],
        'rate_per_bag'=>$req->rate_per_bag[$key],
        'laber_name'=>$req->laber_name[$key],
        'waqfeen_quater_no'=>$req->waqfeen_quater_no[$key],
        // 'day'=>$req->day[$key],
        'total_days'=>$req->total_days[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],

        ];
        // return dd($database);
        DB::table('quater_waqfeen_marbels')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");


  }
  //  quater marbel yaman
  function quater_marbel_yaman(Request $req){
    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'size'=>$req->size[$key],
        'color'=>$req->color[$key],
        'amount'=>$req->amount[$key],
        'rate_per_bag'=>$req->rate_per_bag[$key],
        'laber_name'=>$req->laber_name[$key],
        'yaman_quater_no'=>$req->yaman_quater_no[$key],
        // 'day'=>$req->day[$key],
        'total_days'=>$req->total_days[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],

        ];
        // return dd($database);
        DB::table('quater_yaman_marbels')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");



  }
  //  quater marbel fatuh
  function quater_marbel_fatuh(Request $req){
    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'size'=>$req->size[$key],
        'color'=>$req->color[$key],
        'amount'=>$req->amount[$key],
        'rate_per_bag'=>$req->rate_per_bag[$key],
        'laber_name'=>$req->laber_name[$key],
        'fatuh_quater_no'=>$req->fatuh_quater_no[$key],
        // 'day'=>$req->day[$key],
        'total_days'=>$req->total_days[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],

        ];
        // return dd($database);
        DB::table('quater_fatuh_marbels')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");


  }
  //  quater marbel factory
  function quater_marbel_factory(Request $req){
    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'size'=>$req->size[$key],
        'color'=>$req->color[$key],
        'amount'=>$req->amount[$key],
        'rate_per_bag'=>$req->rate_per_bag[$key],
        'laber_name'=>$req->laber_name[$key],
        'factory_quater_no'=>$req->factory_quater_no[$key],
        // 'day'=>$req->day[$key],
        'total_days'=>$req->total_days[$key],
        'date'=>$req->date[$key],
        // 'muhala'=>$req->muhala[$key],

        ];
        // return dd($database);
        DB::table('quater_factory_marbels')->insert($database);
    }
    return redirect("stock_muramat_quater_categores");


  }
   //quater get sadar
function sadar_stock_marbel(){
    $data= quater_sadar_marbel::paginate(30);
     return view('sadar_stock_marbel_list',['cols'=>$data]);
}
  //quater get nasar
  function nasar_stock_marbel(){
    $data= quater_nasar_marbel::paginate(30);
     return view('nasar_stock_marbel_list',['cols'=>$data]);
}
 //quater get waqfeen
 function waqfeen_stock_marbel(){
    $data= quater_waqfeen_marbel::paginate(30);
     return view('waqfeen_stock_marbel_list',['cols'=>$data]);
}
 //quater get fatuh
 function fatuh_stock_marbel(){
    $data= quater_fatuh_marbel::paginate(30);
     return view('fatuh_stock_marbel_list',['cols'=>$data]);
}
 //quater get yaman
 function yaman_stock_marbel(){
    $data= quater_yaman_marbel::paginate(30);
     return view('yaman_stock_marbel_list',['cols'=>$data]);
}
 //quater get factory
 function factory_stock_marbel(){
    $data= quater_factory_marbel::paginate(30);
     return view('factory_stock_marbel_list',['cols'=>$data]);
}
 //sadar search marbel
 function sadar_stock_marbel_search(Request $req)
 {
     $data= quater_sadar_marbel::
     where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
     ->get();
     return view('sadar_stock_marbel_list_search',['cols'=>$data]);
 }
 //nasar search marbel
 function nasar_stock_marbel_search(Request $req)
 {
     $data= quater_nasar_marbel::
     where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
     ->get();
     return view('nasar_stock_marbel_list_search',['cols'=>$data]);
 }
 //factory search marbel
 function factory_stock_marbel_search(Request $req)
 {
     $data= quater_factory_marbel::
     where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
     ->get();
     return view('factory_stock_marbel_list_search',['cols'=>$data]);
 }
  //waqfeen search marbel
  function waqfeen_stock_marbel_search(Request $req)
  {
      $data= quater_waqfeen_marbel::
      where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('waqfeen_stock_marbel_list_search',['cols'=>$data]);
  }
   //yaman search marbel
   function yaman_stock_marbel_search(Request $req)
   {
       $data= quater_yaman_marbel::
       where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
       ->get();
       return view('yaman_stock_marbel_list_search',['cols'=>$data]);
   }
    //fatuh search marbel
    function fatuh_stock_marbel_search(Request $req)
    {
        $data= quater_fatuh_marbel::
        where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('fatuh_stock_marbel_list_search',['cols'=>$data]);
    }
    function showData_stock_sadar_marbel($id){
        $data= quater_sadar_marbel::find($id);
        return view('edit_stock_amad_quater_entry_darul_sadar_marbel',['data'=>$data]);
      }
    function update_stock_sadar_marbel(Request $req){
        $data = quater_sadar_marbel::find($req->id);
        $data->laber_name=$req->laber_name;
        $data->amount=$req->amount;
        $data->size=$req->size;
        $data->detail=$req->detail;
        $data->rate_per_bag=$req->rate_per_bag;
        $data->total_days=$req->total_days;
        $data->color=$req->color;


        $data->quater_no=$req->quater_no;

        $data->save();
        return redirect('sadar_stock_marbel_list');
      }
      function delete_marbel_sadar($id){
        $data= quater_sadar_marbel::find($id);
        $data->delete();
        return redirect('sadar_stock_marbel_list');
      }
    // nasar marbel edit
      function delete_marbel_nasar($id){
        $data= quater_nasar_marbel::find($id);
        $data->delete();
        return redirect('nasar_stock_marbel_list');
      }
      function showData_stock_nasar_marbel($id){
        $data= quater_nasar_marbel::find($id);
        return view('edit_stock_amad_quater_entry_darul_nasar_marbel',['data'=>$data]);
      }
    function update_stock_nasar_marbel(Request $req){
        $data = quater_nasar_marbel::find($req->id);
        $data->laber_name=$req->laber_name;
        $data->amount=$req->amount;
        $data->size=$req->size;
        $data->detail=$req->detail;
        $data->rate_per_bag=$req->rate_per_bag;
        $data->total_days=$req->total_days;
        $data->color=$req->color;

        $data->nasar_quater_no=$req->nasar_quater_no;

        $data->save();
        return redirect('nasar_stock_marbel_list');
      }
       // waqfeen marbel edit
       function delete_marbel_waqfeen($id){
        $data= quater_waqfeen_marbel::find($id);
        $data->delete();
        return redirect('waqfeen_stock_marbel_list');
      }
      function showData_stock_waqfeen_marbel($id){
        $data= quater_waqfeen_marbel::find($id);
        return view('edit_stock_amad_quater_entry_darul_waqfeen_marbel',['data'=>$data]);
      }
    function update_stock_waqfeen_marbel(Request $req){
        $data = quater_waqfeen_marbel::find($req->id);
        $data->laber_name=$req->laber_name;
        $data->amount=$req->amount;
        $data->size=$req->size;
        $data->detail=$req->detail;
        $data->rate_per_bag=$req->rate_per_bag;
        $data->total_days=$req->total_days;
        $data->color=$req->color;

        $data->waqfeen_quater_no=$req->waqfeen_quater_no;

        $data->save();
        return redirect('waqfeen_stock_marbel_list');
      }
       // fatuh marbel edit
       function delete_marbel_fatuh($id){
        $data= quater_fatuh_marbel::find($id);
        $data->delete();
        return redirect('fatuh_stock_marbel_list');
      }
      function showData_stock_fatuh_marbel($id){
        $data= quater_fatuh_marbel::find($id);
        return view('edit_stock_amad_quater_entry_darul_fatuh_marbel',['data'=>$data]);
      }
    function update_stock_fatuh_marbel(Request $req){
        $data = quater_fatuh_marbel::find($req->id);
        $data->laber_name=$req->laber_name;
        $data->amount=$req->amount;
        $data->size=$req->size;
        $data->detail=$req->detail;
        $data->rate_per_bag=$req->rate_per_bag;
        $data->total_days=$req->total_days;
        $data->color=$req->color;

        $data->fatuh_quater_no=$req->fatuh_quater_no;

        $data->save();
        return redirect('fatuh_stock_marbel_list');
      }
      // factory marbel edit
      function delete_marbel_factory($id){
        $data= quater_factory_marbel::find($id);
        $data->delete();
        return redirect('factory_stock_marbel_list');
      }
      function showData_stock_factory_marbel($id){
        $data= quater_factory_marbel::find($id);
        return view('edit_stock_amad_quater_entry_factory_marbel',['data'=>$data]);
      }
    function update_stock_factory_marbel(Request $req){
        $data = quater_factory_marbel::find($req->id);
        $data->laber_name=$req->laber_name;
        $data->amount=$req->amount;
        $data->size=$req->size;
        $data->detail=$req->detail;
        $data->rate_per_bag=$req->rate_per_bag;
        $data->total_days=$req->total_days;
        $data->color=$req->color;
        $data->factory_quater_no=$req->factory_quater_no;

        $data->save();
        return redirect('factory_stock_marbel_list');
      }
      // yaman marbel edit
      function delete_marbel_yaman($id){
        $data= quater_yaman_marbel::find($id);
        $data->delete();
        return redirect('yaman_stock_marbel_list');
      }
      function showData_stock_yaman_marbel($id){
        $data= quater_yaman_marbel::find($id);
        return view('edit_stock_amad_quater_entry_darul_yaman_marbel',['data'=>$data]);
      }
    function update_stock_yaman_marbel(Request $req){
        $data = quater_yaman_marbel::find($req->id);
        $data->laber_name=$req->laber_name;
        $data->amount=$req->amount;
        $data->size=$req->size;
        $data->detail=$req->detail;
        $data->rate_per_bag=$req->rate_per_bag;
        $data->total_days=$req->total_days;
        $data->color=$req->color;

        $data->yaman_quater_no=$req->yaman_quater_no;

        $data->save();
        return redirect('yaman_stock_marbel_list');
      }
        // bill for quater cable dict,electtic,civil work

function quater_cable_dict_bill(Request $req){
    $data = new quater_bill_cable_dict;
    $data->detail=$req->detail;
    $data->maqam=$req->maqam;
    $data->laber_name=$req->laber_name;

    $data->quater_no=$req->quater_no;
    $data->day=$req->day;
    $data->date=$req->date;
    $data->total=$req->total;


    $data->save();
    return redirect("quater_bill_cable_dict_list");


  }
  //quater bill cable dict

function quater_cable_dict_bill_get(){
    $data= quater_bill_cable_dict::all();

    if ($data->isEmpty()){
        return redirect('quater_bill_entry');

    }else{
     return view('quater_bill_cable_dict_list',['cols'=>$data]);
}}
// quater cable dict delete
function delete_bill_cable_dict_quater($id){
    $data= quater_bill_cable_dict::find($id);
    $data->delete();
    return redirect('quater_bill_cable_dict_list');
  }
  static function cartItem_cable()
    {
        return quater_bill_cable_dict::get('id')->count();

    }
    // quater cable dict sadar
function quater_cable_dict_sadar(Request $req){
        $data = new quater_sadar_cable_dict;
        $data->detail=$req->detail;
        $data->laber_name=$req->laber_name;
        $data->quater_no=$req->quater_no;
        $data->date=$req->date;
        $data->total=$req->total;
        // $data->muhala=$req->muhala;
        $data->save();
        return redirect("quater_stock_sadar_categores");
      }
      // quater cable dict nasar
function quater_cable_dict_nasar(Request $req){
    $data = new quater_nasar_cable_dict;
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;
    $data->nasar_quater_no=$req->nasar_quater_no;
    $data->date=$req->date;
    $data->total=$req->total;
    $data->muhala=$req->muhala;

    $data->save();
    return redirect("quater_stock_nasar_categores");
  }
    // quater cable dict factory
function quater_cable_dict_factory(Request $req){
    $data = new quater_factory_cable_dict;
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;
    $data->factory_quater_no=$req->factory_quater_no;
    $data->date=$req->date;
    $data->total=$req->total;
    // $data->muhala=$req->muhala;

    $data->save();
    return redirect("quater_factory_cable_dict_list");
  }
      // quater cable dict waqfeen
function quater_cable_dict_waqfeen(Request $req){
    $data = new quater_waqfeen_cable_dict;
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;
    $data->waqfeen_quater_no=$req->waqfeen_quater_no;
    $data->date=$req->date;
    $data->total=$req->total;
    // $data->muhala=$req->muhala;

    $data->save();
    return redirect("quater_stock_waqfeen_categores");
  }
    // quater cable dict fatuh
function quater_cable_dict_fatuh(Request $req){
    $data = new quater_fatuh_cable_dict;
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;
    $data->fatuh_quater_no=$req->fatuh_quater_no;
    $data->date=$req->date;
    $data->total=$req->total;
    $data->muhala=$req->muhala;

    $data->save();
    return redirect("quater_stock_fatuh_categores");
  }
  // quater cable dict yaman
function quater_cable_dict_yaman(Request $req){
    $data = new quater_yaman_cable_dict;
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;
    $data->yaman_quater_no=$req->yaman_quater_no;
    $data->date=$req->date;
    $data->total=$req->total;
    // $data->muhala=$req->muhala;

    $data->save();
    return redirect("quater_stock_yaman_categores");
  }
  //sadar get cable dict
function sadar_stock_cable_dict_list(){
    $data= quater_sadar_cable_dict::paginate(30);
     return view('quater_sadar_cable_dict_list',['cols'=>$data]);
}
  //nasar get cable dict
  function nasar_stock_cable_dict_list(){
    $data= quater_nasar_cable_dict::paginate(30);
     return view('quater_nasar_cable_dict_list',['cols'=>$data]);
}
//fatuh get cable dict
function fatuh_stock_cable_dict_list(){
    $data= quater_fatuh_cable_dict::paginate(30);
     return view('quater_fatuh_cable_dict_list',['cols'=>$data]);
}
//factory get cable dict
function factory_stock_cable_dict_list(){
    $data= quater_factory_cable_dict::paginate(30);
     return view('quater_factory_cable_dict_list',['cols'=>$data]);
}
//yaman get cable dict
function yaman_stock_cable_dict_list(){
    $data= quater_yaman_cable_dict::paginate(30);
     return view('quater_yaman_cable_dict_list',['cols'=>$data]);
}
//waqfeen get cable dict
function waqfeen_stock_cable_dict_list(){
    $data= quater_waqfeen_cable_dict::paginate(30);
     return view('quater_waqfeen_cable_dict_list',['cols'=>$data]);
}
 // sadar cable dict edit
 function delete_cable_dict_sadar($id){
    $data= quater_sadar_cable_dict::find($id);
    $data->delete();
    return redirect('quater_sadar_cable_dict_list');
  }
  function showData_stock_sadar_cable_dict($id){
    $data= quater_sadar_cable_dict::find($id);
    return view('edit_stock_amad_quater_entry_sadar_cable_dict',['data'=>$data]);
  }
function update_stock_sadar_cable_dict(Request $req){
    $data = quater_sadar_cable_dict::find($req->id);
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;
    $data->quater_no=$req->quater_no;
    $data->total=$req->total;

    $data->save();
    return redirect('quater_sadar_cable_dict_list');
  }
   // nasar cable dict edit
 function delete_cable_dict_nasar($id){
    $data= quater_nasar_cable_dict::find($id);
    $data->delete();
    return redirect('quater_nasar_cable_dict_list');
  }
  function showData_stock_nasar_cable_dict($id){
    $data= quater_nasar_cable_dict::find($id);
    return view('edit_stock_amad_quater_entry_nasar_cable_dict',['data'=>$data]);
  }
function update_stock_nasar_cable_dict(Request $req){
    $data = quater_nasar_cable_dict::find($req->id);
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;
    $data->nasar_quater_no=$req->nasar_quater_no;
    $data->total=$req->total;

    $data->save();
    return redirect('quater_nasar_cable_dict_list');
  }
  // waqfeen cable dict edit
 function delete_cable_dict_waqfeen($id){
    $data= quater_waqfeen_cable_dict::find($id);
    $data->delete();
    return redirect('quater_waqfeen_cable_dict_list');
  }
  function showData_stock_waqfeen_cable_dict($id){
    $data= quater_waqfeen_cable_dict::find($id);
    return view('edit_stock_amad_quater_entry_waqfeen_cable_dict',['data'=>$data]);
  }
function update_stock_waqfeen_cable_dict(Request $req){
    $data = quater_waqfeen_cable_dict::find($req->id);
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;
    $data->waqfeen_quater_no=$req->waqfeen_quater_no;
    $data->total=$req->total;

    $data->save();
    return redirect('quater_waqfeen_cable_dict_list');
  }
    // factory cable dict edit
 function delete_cable_dict_factory($id){
    $data= quater_factory_cable_dict::find($id);
    $data->delete();
    return redirect('quater_factory_cable_dict_list');
  }
  function showData_stock_factory_cable_dict($id){
    $data= quater_factory_cable_dict::find($id);
    return view('edit_stock_amad_quater_entry_factory_cable_dict',['data'=>$data]);
  }
function update_stock_factory_cable_dict(Request $req){
    $data = quater_factory_cable_dict::find($req->id);
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;
    $data->factory_quater_no=$req->factory_quater_no;
    $data->total=$req->total;

    $data->save();
    return redirect('quater_factory_cable_dict_list');
  }
// fatuh cable dict edit
function delete_cable_dict_fatuh($id){
    $data= quater_fatuh_cable_dict::find($id);
    $data->delete();
    return redirect('quater_fatuh_cable_dict_list');
  }
  function showData_stock_fatuh_cable_dict($id){
    $data= quater_fatuh_cable_dict::find($id);
    return view('edit_stock_amad_quater_entry_fatuh_cable_dict',['data'=>$data]);
  }
function update_stock_fatuh_cable_dict(Request $req){
    $data = quater_fatuh_cable_dict::find($req->id);
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;
    $data->fatuh_quater_no=$req->fatuh_quater_no;
    $data->total=$req->total;

    $data->save();
    return redirect('quater_fatuh_cable_dict_list');
  }
  // yaman cable dict edit
function delete_cable_dict_yaman($id){
    $data= quater_yaman_cable_dict::find($id);
    $data->delete();
    return redirect('quater_yaman_cable_dict_list');
  }
  function showData_stock_yaman_cable_dict($id){
    $data= quater_yaman_cable_dict::find($id);
    return view('edit_stock_amad_quater_entry_yaman_cable_dict',['data'=>$data]);
  }
function update_stock_yaman_cable_dict(Request $req){
    $data = quater_yaman_cable_dict::find($req->id);
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;
    $data->yaman_quater_no=$req->yaman_quater_no;
    $data->total=$req->total;

    $data->save();
    return redirect('quater_yaman_cable_dict_list');
  }
//sadar search cable_dict
function sadar_stock_cable_dict_search(Request $req)
{
    $data= quater_sadar_cable_dict::
    where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('quater_sadar_cable_dict_list_search',['cols'=>$data]);
}
//nasar search cable_dict
function nasar_stock_cable_dict_search(Request $req)
{
    $data= quater_nasar_cable_dict::
    where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('quater_nasar_cable_dict_list_search',['cols'=>$data]);
}
//waqfeen search cable_dict
function waqfeen_stock_cable_dict_search(Request $req)
{
    $data= quater_waqfeen_cable_dict::
    where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('quater_waqfeen_cable_dict_list_search',['cols'=>$data]);
}
//factory search cable_dict
function factory_stock_cable_dict_search(Request $req)
{
    $data= quater_factory_cable_dict::
    where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('quater_factory_cable_dict_list_search',['cols'=>$data]);
}
//fatuh search cable_dict
function fatuh_stock_cable_dict_search(Request $req)
{
    $data= quater_fatuh_cable_dict::
    where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('quater_fatuh_cable_dict_list_search',['cols'=>$data]);
}
//yaman search cable_dict
function yaman_stock_cable_dict_search(Request $req)
{
    $data= quater_yaman_cable_dict::
    where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('quater_yaman_cable_dict_list_search',['cols'=>$data]);
}

function quater_bill_paint_yomiya(Request $req){
    $data= new sadar_paint_yomiya_bill;
    $data->quater_no=$req->quater_no;
    $data->painter_name=$req->painter_name;
    $data->day=$req->day;
    $data->muhala=$req->muhala;
    $data->total=$req->total;
    $data->detail=$req->detail;
    $data->total_days=$req->total_days;
    $data->date=$req->date;

    $data->save();

    return view("stock_muramat_quater_categores",$data);

}
function quater_bill_steel(Request $req){
    $data= new quater_steel_bill;
    $data->quater_no=$req->quater_no;
    $data->decorator_name=$req->decorator_name;
    $data->day=$req->day;
    $data->muhala=$req->muhala;
    $data->amount=$req->amount;
    $data->detail=$req->detail;
    $data->rate=$req->rate;
    $data->weight=$req->weight;
    $data->date=$req->date;

    $data->save();

    return view("quater_bill_steel_list",$data);

}
function quater_bill_steel_get(){
    $data= quater_steel_bill::all();
    if ($data->isEmpty()){
        return redirect('quater_bill_entry');

    }else{
     return view('quater_bill_steel_list',['cols'=>$data]);
}}

static function cartItem_steel_bill()
{
    return quater_steel_bill::get('id')->count();

}
function delete_bill_steel($id){
    $data= quater_steel_bill::find($id);
    $data->delete();
    return redirect('quater_bill_steel_list');
  }


//sadar yomiya edit carpenter
function delete_yomiya_carpenter_sadar($id){
  $data= darul_sadar_yomiya_detail_carpenter::find($id);
  $data->delete();
  return redirect('sadar_stock_yomiya_carpenter_list');
}

function showData_yomiya_carpenter_sadar($id){
  $data= darul_sadar_yomiya_detail_carpenter::find($id);
  return view('edit_stock_yomiya_quater_entry_darul_sadar_carpenter',['data'=>$data]);
}
function update_yomiya_carpenter_sadar(Request $req){
   $data = darul_sadar_yomiya_detail_carpenter::find($req->id);
   $data->detail=$req->detail;
   $data->quater_no=$req->quater_no;
   $data->total_days=$req->total_days;
   $data->carpenter_name=$req->carpenter_name;
   $data->total=$req->total;

 
  $data->save();
  return redirect('sadar_stock_yomiya_carpenter_list');
}

//nasar yomiya edit carpenter
function delete_yomiya_carpenter_nasar($id){
  $data= darul_nasar_yomiya_detail_carpenter::find($id);
  $data->delete();
  return redirect('nasar_stock_yomiya_carpenter_list');
}

function showData_yomiya_carpenter_nasar($id){
  $data= darul_nasar_yomiya_detail_carpenter::find($id);
  return view('edit_stock_yomiya_quater_entry_darul_nasar_carpenter',['data'=>$data]);
}
function update_yomiya_carpenter_nasar(Request $req){
   $data = darul_nasar_yomiya_detail_carpenter::find($req->id);
   $data->detail=$req->detail;
   $data->nasar_quater_no=$req->nasar_quater_no;
   $data->total_days=$req->total_days;
   $data->carpenter_name=$req->carpenter_name;
   $data->total=$req->total;

 
  $data->save();
  return redirect('nasar_stock_yomiya_carpenter_list');
}
//waqfeen yomiya edit carpenter
function delete_yomiya_carpenter_waqfeen($id){
  $data= darul_waqfeen_yomiya_detail_carpenter::find($id);
  $data->delete();
  return redirect('waqfeen_stock_yomiya_carpenter_list');
}

function showData_yomiya_carpenter_waqfeen($id){
  $data= darul_waqfeen_yomiya_detail_carpenter::find($id);
  return view('edit_stock_yomiya_quater_entry_darul_waqfeen_carpenter',['data'=>$data]);
}
function update_yomiya_carpenter_waqfeen(Request $req){
   $data = darul_waqfeen_yomiya_detail_carpenter::find($req->id);
   $data->detail=$req->detail;
   $data->waqfeen_quater_no=$req->waqfeen_quater_no;
   $data->total_days=$req->total_days;
   $data->carpenter_name=$req->carpenter_name;
   $data->total=$req->total;

 
  $data->save();
  return redirect('waqfeen_stock_yomiya_carpenter_list');
}
//fatuh yomiya edit carpenter
function delete_yomiya_carpenter_fatuh($id){
  $data= darul_fatuh_yomiya_detail_carpenter::find($id);
  $data->delete();
  return redirect('fatuh_stock_yomiya_carpenter_list');
}

function showData_yomiya_carpenter_fatuh($id){
  $data= darul_fatuh_yomiya_detail_carpenter::find($id);
  return view('edit_stock_yomiya_quater_entry_darul_fatuh_carpenter',['data'=>$data]);
}
function update_yomiya_carpenter_fatuh(Request $req){
   $data = darul_fatuh_yomiya_detail_carpenter::find($req->id);
   $data->detail=$req->detail;
   $data->fatuh_quater_no=$req->fatuh_quater_no;
   $data->total_days=$req->total_days;
   $data->carpenter_name=$req->carpenter_name;
   $data->total=$req->total;

 
  $data->save();
  return redirect('fatuh_stock_yomiya_carpenter_list');
}
//factory yomiya edit carpenter
function delete_yomiya_carpenter_factory($id){
  $data= factory_area_yomiya_detail_carpenter::find($id);
  $data->delete();
  return redirect('factory_area_stock_yomiya_carpenter_list');
}

function showData_yomiya_carpenter_factory($id){
  $data= factory_area_yomiya_detail_carpenter::find($id);
  return view('edit_stock_yomiya_quater_entry_factory_area_carpenter',['data'=>$data]);
}
function update_yomiya_carpenter_factory(Request $req){
   $data = factory_area_yomiya_detail_carpenter::find($req->id);
   $data->detail=$req->detail;
   $data->factory_quater_no=$req->factory_quater_no;
   $data->total_days=$req->total_days;
   $data->carpenter_name=$req->carpenter_name;
   $data->total=$req->total;

 
  $data->save();
  return redirect('factory_area_stock_yomiya_carpenter_list');
}
//yaman yomiya edit carpenter
function delete_yomiya_carpenter_yaman($id){
  $data= darul_yaman_yomiya_detail_carpenter::find($id);
  $data->delete();
  return redirect('yaman_stock_yomiya_carpenter_list');
}

function showData_yomiya_carpenter_yaman($id){
  $data= darul_yaman_yomiya_detail_carpenter::find($id);
  return view('edit_stock_yomiya_quater_entry_darul_yaman_carpenter',['data'=>$data]);
}
function update_yomiya_carpenter_yaman(Request $req){
   $data = darul_yaman_yomiya_detail_carpenter::find($req->id);
   $data->detail=$req->detail;
   $data->yaman_quater_no=$req->yaman_quater_no;
   $data->total_days=$req->total_days;
   $data->carpenter_name=$req->carpenter_name;
   $data->total=$req->total;

 
  $data->save();
  return redirect('yaman_stock_yomiya_carpenter_list');
}

function quater_chakar_entry(Request $req){
  $data= new darul_sadar_chakar;
  $data->name=$req->name;
  $data->detail=$req->detail;
  $data->chakar=$req->chakar;
  $data->date=$req->date;
  $data->total=$req->total;

  $data->save();

  return view("quater_categores",$data);

}
function quater_chakar_get(){
  $data= darul_sadar_chakar::paginate(30);
   return view('stock_chakar_list_darul_sadar',['cols'=>$data]);
}
function quater_chakar_get_search(Request $req)
{
    $data= darul_sadar_chakar::
    where('name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('stock_chakar_list_darul_sadar_search',['cols'=>$data]);
}
//edit quater chakar
function delete_quater_chakar($id){
  $data= darul_sadar_chakar::find($id);
  $data->delete();
  return redirect('stock_chakar_list_darul_sadar');
}
function showData_quater_chakar($id){
  $data= darul_sadar_chakar::find($id);
  return view('edit_chakar_quater_entry',['data'=>$data]);
}
function update_quater_chakar(Request $req){
  $data=  darul_sadar_chakar::find($req->id);
  $data->name=$req->name;
  $data->detail=$req->detail;
  $data->chakar=$req->chakar;
  $data->date=$req->date;
  $data->total=$req->total;

  $data->save();
  return redirect('stock_chakar_list_darul_sadar');

}

}
