<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\amad_daftr_letter_entry;
use App\Models\amad_daftr_entry;
use App\Models\add_daftr;
use App\Models\daftr_detail;
use App\Models\daftr_detail_mistri;
use App\Models\daftr_detail_painter;
use App\Models\daftr_detail_carpenter;
use App\Models\daftr_yomiya_detail_carpenter;
use App\Models\daftr_bill_carpenter;
use App\Models\daftr_bill;
use App\Models\daftr_bill_painter;
use App\Models\daftr_bill_marbel;
use App\Models\daftr_marbel;
use App\Models\daftr_bill_cable_dict;
use App\Models\daftr_bill_paint_day;
use App\Models\daftr_paint_day;
use App\Models\daftr_cable_dict;
use App\Models\daftr_steel;
use App\Models\chair_daftr;
use App\Models\chair_bill_daftr;
use App\Models\daftr_steel_bill;
use App\Models\daftr_chakar;

use App\Models\daftr_paint_yomiya_bill;



use Session;
use Validator;
use Illuminate\Support\Facades\DB;


class daftr extends Controller
{
    //
    function daftr(Request $req)
    {
        $rules=array(

            "contact_no"=>"required|min:7"
          );
          $Validator = Validator::make($req->all(),$rules);
          if($Validator->fails()){
           return view('amad_daftr_letter_entry')->withErrors($Validator);
          }else{

        $data= new amad_daftr_letter_entry;
        $data->name_letter_person=$req->name_letter_person;
        $data->daftr_no=$req->daftr_no;
        $data->contact_no=$req->contact_no;
        $data->contact_code=$req->contact_code;
        $data->name_staff=$req->name_staff;
        $data->detail=$req->detail;
        $data->date=$req->date;


        $data->save();

        return view("daftr",$data);

         }

    }
    function daftr_letter(){
        $data= amad_daftr_letter_entry::paginate(30);
         return view('amad_daftr_letter_list',['collections'=>$data]);
  }


  function daftr_letter_count()
    {

         $data = DB::table('amad_daftr_letter_entries')->count();
         return view('daftr',['cols'=>$data]);

    }

//

    function show_daftr_letter(){
        $data = amad_daftr_letter_entry::paginate(30);
        return view('amad_daftr_letter_list',['collections'=>$data]);
      }
      function delete_daftr_letter($id){
        $data= amad_daftr_letter_entry::find($id);
        $data->delete();
        return redirect('amad_daftr_letter_list');
      }

      function showData_daftr_letter($id){
        $data= amad_daftr_letter_entry::find($id);
        return view('amad_daftr_letter_update',['data'=>$data]);
      }
      function update_daftr_letter(Request $req){
        $data = amad_daftr_letter_entry::find($req->id);

        $data->name_letter_person=$req->name_letter_person;
        $data->contact_no=$req->contact_no;
        $data->date=$req->date;
        $data->contact_code=$req->contact_code;

        $data->daftr_no=$req->daftr_no;
        $data->name_staff=$req->name_staff;
        $data->detail=$req->detail;

        $data->save();
        return redirect('amad_daftr_letter_list');
      }
      function amad_daftr_letter_search(Request $req)
      {
          $data= amad_daftr_letter_entry::where('name_letter_person', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
          ->get();
          return view('amad_daftr_letter_list_search',['collections'=>$data]);
      }
//add daftr
      function add_new_daftr(Request $req)
      {


          $data= new add_daftr;
          $data->daftr_no=$req->daftr_no;

          $data->save();

          return view("daftr",$data);

      }
// edit
      function show_store_daftr(){
        $data = daftr_detail::paginate(30);
        return view('stock_store_daftr_list',['cols'=>$data]);
      }
      function delete_store_daftr($id){
        $data= daftr_detail::find($id);
        $data->delete();
        return redirect('stock_store_daftr_list');
      }

      function showData_store_daftr($id){
        $data= daftr_detail::find($id);
        return view('edit_stock_amad_entry_daftr',['data'=>$data]);
      }
      function update_store_daftr(Request $req){
        $data = daftr_detail::find($req->id);

        $data->daftr_no=$req->daftr_no;
        $data->store_name=$req->store_name;
        $data->saman=$req->saman;
        $data->amount=$req->amount;
        $data->per_rate=$req->per_rate;


        $data->save();
        return redirect('stock_store_daftr_list');
      }
//
//add store saman
function daftr_store_saman(Request $req)
    {

        $data= new daftr_detail;

        $data->daftr_no=$req->daftr_no;
        $data->store_name=$req->store_name;
        $data->saman=$req->saman;
        $data->amount=$req->amount;
        $data->per_rate=$req->per_rate;
        $data->date=$req->date;

        $data->save();

        return view("daftr",$data);


    }
    function store_saman_daftr_no(){
        $data= add_daftr::all();
         return view('stock_store_amad_daftr_entry',['cols'=>$data]);
    }
    function carpenter_saman_daftr_no(){
        $data= add_daftr::all();
         return view('stock_carpenter_amad_daftr_entry',['cols'=>$data]);
    }
    function painter_saman_daftr_no(){
        $data= add_daftr::all();
         return view('stock_painter_amad_daftr_entry',['cols'=>$data]);
    }
    function mistri_saman_daftr_no(){
        $data= add_daftr::all();
         return view('stock_mistri_amad_daftr_entry',['cols'=>$data]);
    }
    function marbel_saman_daftr_no(){
        $data= add_daftr::all();
         return view('stock_marbel_amad_daftr_entry',['cols'=>$data]);
    }
    function cable_saman_daftr_no(){
        $data= add_daftr::all();
         return view('stock_cable_amad_daftr_entry',['cols'=>$data]);
    }
    function daft_paint_yomiya_daftr_no(){
        $data= add_daftr::all();
         return view('daftr_paint_yomiay_entry',['cols'=>$data]);
    }
    function daftr_carpenter_yomiya_daftr_no(){
      $data= add_daftr::all();
       return view('stock_carpenter_yomiya_daftr_entry',['cols'=>$data]);
  }
    static function cartItem_daftr_marbel()
    {
        return daftr_marbel::get('id')->count();

    }
    static function cartItem_daftr()
    {
        return daftr_detail_carpenter::get('id')->count();

    }
    static function cartItem_daftr_painter()
    {
        return daftr_detail_painter::get('id')->count();

    }
    //add daftr mistri
    function daftr_store_saman_mistri(Request $req)
    {
        foreach($req->inc_id as $key=>$insert){
            $database = [
            'inc_id'=>$req->inc_id[$key],
            'mistri_name'=>$req->mistri_name[$key],
            'mistri_rate'=>$req->mistri_rate[$key],
            'mazdur_rate'=>$req->mazdur_rate[$key],
            'mazdur_total_days'=>$req->mazdur_total_days[$key],
            'mistri_total_days'=>$req->mistri_total_days[$key],
            'daftr_no'=>$req->daftr_no[$key],
            // 'day'=>$req->day[$key],
            'date'=>$req->date[$key],
            'detail'=>$req->detail[$key],

            ];

            // return dd($database);
            DB::table('daftr_detail_mistris')->insert($database);
        }
        return redirect("daftr_stock_categores");

        // $data= new daftr_detail_mistri;

        // $data->daftr_no=$req->daftr_no;
        // $data->mistri_name=$req->mistri_name;
        // $data->mistri_rate=$req->mistri_rate;
        // $data->mazdur_rate=$req->mazdur_rate;
        // $data->mazdur_total_days=$req->mazdur_total_days;
        // $data->mistri_total_days=$req->mistri_total_days;

        // $data->detail=$req->detail;
        // $data->date=$req->date;


        // $data->save();

        // return view("daftr",$data);


    }

// daftr painter
function daftr_painter(Request $req)
{

    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'per_murabah_rate'=>$req->per_murabah_rate[$key],
        'rakbah'=>$req->rakbah[$key],
        'painter_name'=>$req->painter_name[$key],
        'daftr_no'=>$req->daftr_no[$key],
        // 'day'=>$req->day[$key],
        'kaam'=>$req->kaam[$key],
        'date'=>$req->date[$key],


        ];

        // return dd($database);
        DB::table('daftr_detail_painters')->insert($database);
    }
    return redirect("daftr");

}
// daftr carpenter
function daftr_cartpenter(Request $req)
{

    foreach($req->inc_id as $key=>$insert){
        $database = [

        'total_days'=>$req->total_days[$key],
        'detail'=>$req->detail[$key],
        'carpenter_name'=>$req->carpenter_name[$key],
        'daftr_no'=>$req->daftr_no[$key],
        'inc_id'=>$req->inc_id[$key],
        // 'day'=>$req->day[$key],
        // 'size'=>$req->size[$key],
        'rate'=>$req->rate[$key],
        'amount'=>$req->amount[$key],
        'date'=>$req->date[$key],


        ];

        // return dd($database);
        DB::table('daftr_detail_carpenters')->insert($database);
    }
    return redirect("daftr_stock_categores");

}
function steel_daftr(Request $req){

    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'decorator_name'=>$req->decorator_name[$key],
        'weight'=>$req->weight[$key],
        'amount'=>$req->amount[$key],
        'rate'=>$req->rate[$key],
        'date'=>$req->date[$key],
        // 'day'=>$req->day[$key],
        'daftr_no'=>$req->daftr_no[$key],

        ];


    // return dd($database);
    DB::table('daftr_steels')->insert($database);
}
return redirect("daftr");
}
function steel_daftr_list(){
    $data= daftr_steel::paginate(30);
     return view('daftr_steel_list',['cols'=>$data]);
}
function steel_daftr_search(Request $req)
{
    $data= daftr_steel::
    where('decorator_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('daftr_steel_list_search',['cols'=>$data]);
}
function chair_daftr_bunti(Request $req){


    $data= new chair_daftr;

    $data->chair_detail=$req->chair_detail;
    $data->chair_amount=$req->chair_amount;
    $data->name=$req->name;
    $data->per_chair_rate=$req->per_chair_rate;
    $data->per_seat_rate=$req->per_seat_rate;
    $data->seat_amount=$req->seat_amount;
    $data->seat_detail=$req->seat_detail;
    // $data->day=$req->day;
    $data->daftr_no=$req->daftr_no;
    $data->date=$req->date;
    // $data->total=$req->total;

    $data->save();

    return redirect("daftr");


}

function steel_daftr_no(){
    $data= add_daftr::all();
     return view('daftr_steel_entry',['cols'=>$data]);
}
function chair_daftr_no(){
    $data= add_daftr::all();
     return view('daftr_chair_entry',['cols'=>$data]);
}

function store_chair_list(){
    $data= chair_daftr::paginate(30);
     return view('daftr_chair_list',['cols'=>$data]);
}
function store_chair_list_search(Request $req)
{
    $data= chair_daftr::
    where('name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('daftr_chair_list_search',['cols'=>$data]);
}


    function store_daftr_list(){
        $data= daftr_detail::paginate(30);
         return view('stock_store_daftr_list',['cols'=>$data]);
    }
    function stock_daftr_list_search(Request $req)
    {
        $data= daftr_detail::
        where('saman','LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('stock_store_daftr_list_search',['cols'=>$data]);
    }

    function store_daftr_mistri_list(){
        $data= daftr_detail_mistri::paginate(30);
         return view('stock_store_daftr_mistri_list',['cols'=>$data]);
    }
    //daftr edit mistri
    function show_store_mistri(){
        $data = daftr_detail_mistri::paginate(30);
        return view('stock_store_daftr_mistri_list',['cols'=>$data]);
      }
      function delete_store_mistri($id){
        $data= daftr_detail_mistri::find($id);
        $data->delete();
        return redirect('stock_store_daftr_mistri_list');
      }

      function showData_store_mistri($id){
        $data= daftr_detail_mistri::find($id);
        return view('edit_stock_amad_entry_daftr_mistri',['data'=>$data]);
      }
      function update_store_mistri(Request $req){
        $data = daftr_detail_mistri::find($req->id);

        $data->daftr_no=$req->daftr_no;
        $data->mistri_name=$req->mistri_name;
        $data->mistri_rate=$req->mistri_rate;
        $data->mazdur_rate=$req->mazdur_rate;
        $data->mistri_total_days=$req->mistri_total_days;
        $data->mazdur_total_days=$req->mazdur_total_days;
        $data->detail=$req->detail;

        $data->save();
        return redirect('stock_store_daftr_mistri_list');
      }

    //daftr edit chair
    // function show_daftr_chair(){
    //     $data = chair_daftr::paginate(10);
    //     return view('daftr_chair_list',['cols'=>$data]);
    //   }
      function delete_daftr_chair($id){
        $data= chair_daftr::find($id);
        $data->delete();
        return redirect('daftr_chair_list');
      }

      function showData_daftr_chair($id){
        $data= chair_daftr::find($id);
        return view('edit_daftr_chair_entry',['data'=>$data]);
      }
      function update_daftr_chair(Request $req){
        $data = chair_daftr::find($req->id);

        $data->chair_detail=$req->chair_detail;
        $data->chair_amount=$req->chair_amount;
        $data->name=$req->name;
        $data->per_chair_rate=$req->per_chair_rate;
        $data->per_seat_rate=$req->per_seat_rate;
        $data->seat_amount=$req->seat_amount;
        $data->seat_detail=$req->seat_detail;
        // $data->day=$req->day;
        $data->daftr_no=$req->daftr_no;
        $data->date=$req->date;
        // $data->total=$req->total;

        $data->save();
        return redirect('daftr_chair_list');
      }




      function stock_daftr_mistri_search(Request $req)
    {
        $data= daftr_detail_mistri::
        where('mistri_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('stock_store_daftr_mistri_list_search',['cols'=>$data]);
    }
      //amad daftr entry
      function daftr_entry(Request $req){
        $data = new amad_daftr_entry;

        $data->maal_type=$req->maal_type;
        $data->detail=$req->detail;
        $data->amount=$req->amount;
        $data->date=$req->date;

        $data->save();
        return redirect('daftr');
      }
    //amad daftr list
      function daftr_list(){
        $data= amad_daftr_entry::paginate(30);
        return view('daftr_list',['cols'=>$data]);
      }
      // amad daftr edit
      function show_amad_daftr(){
        $data = amad_daftr_entry::paginate(30);
        return view('daftr_list',['cols'=>$data]);
      }
      function delete_amad_daftr($id){
        $data= amad_daftr_entry::find($id);
        $data->delete();
        return redirect('daftr_list');
      }

      function showData_amad_daftr($id){
        $data= amad_daftr_entry::find($id);
        return view('edit_amad_daftr_entry',['data'=>$data]);
      }
      function update_amad_daftr(Request $req){
        $data = amad_daftr_entry::find($req->id);

        $data->maal_type=$req->maal_type;
        $data->detail=$req->detail;
        $data->amount=$req->amount;


        $data->save();
        return redirect('daftr_list');
      }
      function daftr_search(Request $req)
    {
        $data= amad_daftr_entry::
        where('maal_type', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('daftr_list_search',['cols'=>$data]);
    }

//
//daftr get paint+carpenter
function daftr_stock_paint(){
    $data= daftr_detail_painter::paginate(30);
     return view('stock_store_daftr_list_paint',['cols'=>$data]);
}
function daftr_stock_carpenter(){
    $data= daftr_detail_carpenter::paginate(30);
     return view('stock_store_daftr_list_carpenter',['cols'=>$data]);
}
 //daftr edit paint
 function delete_stock_paint_daftr($id){
    $data= daftr_detail_painter::find($id);
    $data->delete();
    return redirect('stock_store_daftr_list_paint');
  }

  function showData_stock_paint_daftr($id){
    $data= daftr_detail_painter::find($id);
    return view('edit_stock_amad_quater_entry_daftr_paint',['data'=>$data]);
  }
  function update_stock_paint_daftr(Request $req){
    $data = daftr_detail_painter::find($req->id);
    $data->daftr_no=$req->daftr_no;
    $data->painter_name=$req->painter_name;
    $data->rakbah=$req->rakbah;
    $data->per_murabah_rate=$req->per_murabah_rate;
    $data->kaam=$req->kaam;


    // $data->safaidi_rakbah=$req->safaidi_rakbah;
    // $data->safaidi_per_murabah_rate=$req->safaidi_per_murabah_rate;
    // $data->paint_rakbah=$req->paint_rakbah;
    // $data->paint_per_murabah_rate=$req->paint_per_murabah_rate;
    // $data->distamper_rakbah=$req->distamper_rakbah;
    // $data->distamper_per_murabah_rate=$req->distamper_per_murabah_rate;
    // $data->total_days=$req->total_days;


    $data->save();
    return redirect('stock_store_daftr_list_paint');
  }
   //daftr edit steel
 function delete_steel_daftr($id){
    $data= daftr_steel::find($id);
    $data->delete();
    return redirect('daftr_steel_list');
  }

  function showData_daftr_steel($id){
    $data= daftr_steel::find($id);
    return view('edit_daftr_steel_entry',['data'=>$data]);
  }
  function update_daftr_steel(Request $req){
    $data = daftr_steel::find($req->id);
    $data->detail=$req->detail;
    $data->daftr_no=$req->daftr_no;
    $data->weight=$req->weight;
    $data->amount=$req->amount;
    $data->rate=$req->rate;
    $data->decorator_name=$req->decorator_name;
    $data->date=$req->date;


    $data->save();
    return redirect('daftr_steel_list');
  }
 //daftr edit carpenter
 function delete_stock_carpenter_daftr($id){
    $data= daftr_detail_carpenter::find($id);
    $data->delete();
    return redirect('stock_store_daftr_list_carpenter');
  }

  function showData_stock_carpenter_daftr($id){
    $data= daftr_detail_carpenter::find($id);
    return view('edit_stock_amad_quater_entry_daftr_carpenter',['data'=>$data]);
  }
  function update_stock_carpenter_daftr(Request $req){
    $data = daftr_detail_carpenter::find($req->id);
    $data->detail=$req->detail;
    $data->daftr_no=$req->daftr_no;
    $data->total_days=$req->total_days;
    $data->carpenter_name=$req->carpenter_name;
    $data->rate=$req->rate;
    $data->amount=$req->amount;
    // $data->size=$req->size;

    $data->save();
    return redirect('stock_store_daftr_list_carpenter');
  }
  //daftr search
  function daftr_store_paint_list_search(Request $req)
  {
      $data= daftr_detail_painter::
      where('painter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('stock_store_paint_daftr_list_search',['cols'=>$data]);
  }
  function daftr_store_carpenter_list_search(Request $req)
  {
      $data= daftr_detail_carpenter::
      where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
      ->get();
      return view('stock_store_carpenter_daftr_list_search',['cols'=>$data]);
  }
  // bill for daftr carpenter

function daftr_bill_carpenter(Request $req){
    $data = new daftr_bill_carpenter;
    $data->detail=$req->detail;
    $data->total_days=$req->total_days;
    $data->carpenter_name=$req->carpenter_name;
    $data->size=$req->size;
    $data->daftr_no=$req->daftr_no;
    $data->day=$req->day;
    $data->date=$req->date;

    $data->rate=$req->rate;
    $data->amount=$req->amount;

    $data->save();
    return redirect("daftr_bill_carpenter");


  }
  // bill for daftr

function daftr_bill_post(Request $req){
    $data = new daftr_bill;
    $data->detail=$req->detail;
    $data->mistri_days=$req->mistri_days;
    $data->mazdur_days=$req->mazdur_days;

    $data->mistri_name=$req->mistri_name;
    $data->mistri_rate=$req->mistri_rate;
    $data->mazdur_rate=$req->mazdur_rate;
    $data->daftr_no=$req->daftr_no;
    $data->day=$req->day;
    $data->date=$req->date;


    $data->save();
    return redirect("daftr_bill_mistri");


  }
   // bill for daftr painter
  function daftr_bill_paint(Request $req){
    $data = new daftr_bill_painter;
    // $data->detail=$req->detail;
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

    $data->daftr_no=$req->daftr_no;
    $data->day=$req->day;
    $data->date=$req->date;
    // $data =  daftr_bill_painter::all();
    // $data->delete();


    $data->save();
    return redirect("daftr_bill_painter");

  }
     // bill for daftr painter yomiya
     function daftr_painter_yomiya_bill(Request $req){
        $data = new daftr_bill_paint_day;
        $data->total_days=$req->total_days;
        $data->painter_name=$req->painter_name;
        $data->detail=$req->detail;
        $data->daftr_no=$req->daftr_no;
        $data->day=$req->day;
        $data->date=$req->date;
        $data->total=$req->total;


        $data->save();
        return redirect("daftr_bill_paint_yomiya");

      }
      // bill for daftr chair bunti
     function chair_daftr_bill_bunti(Request $req){
        $data = new chair_bill_daftr;

        $data->chair_detail=$req->chair_detail;
        $data->chair_amount=$req->chair_amount;
        $data->name=$req->name;
        $data->per_chair_rate=$req->per_chair_rate;
        $data->per_seat_rate=$req->per_seat_rate;
        $data->seat_amount=$req->seat_amount;
        $data->seat_detail=$req->seat_detail;
        $data->day=$req->day;
        $data->daftr_no=$req->daftr_no;
        $data->date=$req->date;
        // $data->total=$req->total;

        $data->save();

        return redirect("daftr_bill_chair_list");

      }
      function daftr_paint_yomiya_list(){
        $data= daftr_bill_paint_day::paginate(30);
         return view('daftr_bill_paint_yomiya',['cols'=>$data]);
    }
    function daftr_paint(Request $req){
        $data = new daftr_paint_day;
        $data->total_days=$req->total_days;
        $data->painter_name=$req->painter_name;
        $data->detail=$req->detail;
        $data->daftr_no=$req->daftr_no;
        $data->date=$req->date;
        $data->total=$req->total;


        $data->save();
        return redirect("daftr_paint_yomiya_list");

      }
      function daftr_painter_yomiya_get(){
        $data= daftr_paint_day::paginate(30);
         return view('daftr_paint_yomiya_list',['cols'=>$data]);
    }
    function daftr_painter_yomiya_get_search(Request $req)
    {
        $data= daftr_paint_day::
        where('painter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('daftr_paint_yomiya_list_search',['cols'=>$data]);
    }
      function daftr_painter_yomiya_bill_get(){
        $data= daftr_bill_paint_day::all();
        if ($data->isEmpty()){
            return redirect('daftr_bill_entry');

        }else{
         return view('daftr_bill_paint_yomiya',['cols'=>$data]);
    }}
    static function cartItem_paint_yomiya()
    {
        return daftr_bill_paint_day::get('id')->count();

    }

function delete_bill_painter_yomiya_daftr($id){
    $data= daftr_bill_paint_day::find($id);
    $data->delete();
    return redirect('daftr_bill_paint_yomiya');
  }
  function daftr_bill_get(){
    $data= daftr_bill::all();
    if ($data->isEmpty()){
        return redirect('daftr_bill_entry');

    }else{
     return view('daftr_bill_mistri',['cols'=>$data]);
}}
static function cartItem_mistri()
    {
        return daftr_detail_mistri::get('id')->count();

    }
function daftr_bill_carpenter_get(){
    $data= daftr_bill_carpenter::all();
    if ($data->isEmpty()){
        return redirect('daftr_bill_entry');

    }else{
     return view('daftr_bill_carpenter',['cols'=>$data]);
}}
static function cartItem_carpenter()
    {
        return daftr_bill_carpenter::get('id')->count();

    }
    static function cartItem_steel_daftr()
    {
        return daftr_steel::get('id')->count();

    }
function daftr_bill_painter_get(){
    $data= daftr_bill_painter::all();
        if ($data->isEmpty()){
            return redirect('daftr_bill_entry');

        }else{
     return view('daftr_bill_painter',['cols'=>$data]);
}}
static function cartItem()
    {
        return daftr_bill_painter::get('id')->count();

    }
    //
    function delete_bill_daftr_mistri($id){
        $data= daftr_bill::find($id);
        $data->delete();
        return redirect('daftr_bill_mistri');
      }

function delete_bill_daftr_carpenter($id){
        $data= daftr_bill_carpenter::find($id);
        $data->delete();
        return redirect('daftr_bill_carpenter');
      }
function delete_bill_daftr_painter($id){
        $data= daftr_bill_painter::find($id);
        $data->delete();
        return redirect('daftr_bill_painter');
      }
            // bill for daftr marbel

function daftr_marbel_bill(Request $req){
    $data = new daftr_bill_marbel;
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;

    $data->daftr_no=$req->daftr_no;
    $data->day=$req->day;
    $data->date=$req->date;
    $data->murbah_rate=$req->murbah_rate;
    $data->per_murbah_rate=$req->per_murbah_rate;


    $data->save();
    return redirect("daftr_bill_marbel");


  }
  function daftr_marbel_bill_get(){
    $data= daftr_bill_marbel::all();

    if ($data->isEmpty()){
        return redirect('daftr_bill_entry');

    }else{
     return view('daftr_bill_marbel',['cols'=>$data]);
}}
static function cartItem_marbel()
    {
        return daftr_bill_marbel::get('id')->count();

    }
    function delete_bill_marbel_daftr($id){
        $data= daftr_bill_marbel::find($id);
        $data->delete();
        return redirect('daftr_bill_marbel');
      }

       //  daftr marbel
  function daftr_marbel_post(Request $req){
    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'size'=>$req->size[$key],
        'color'=>$req->color[$key],
        'amount'=>$req->amount[$key],
        'rate_per_bag'=>$req->rate_per_bag[$key],
        'laber_name'=>$req->laber_name[$key],
        'daftr_no'=>$req->daftr_no[$key],
        // 'day'=>$req->day[$key],
        'total_days'=>$req->total_days[$key],
        'date'=>$req->date[$key],

        ];
        // return dd($database);
        DB::table('daftr_marbels')->insert($database);
    }
    return redirect("daftr");



  }
   //daftr get factory
 function daftr_stock_marbel(){
    $data= daftr_marbel::paginate(30);
     return view('stock_store_daftr_list_marbel',['cols'=>$data]);
}
 //daftr search marbel
 function daftr_stock_marbel_search(Request $req)
 {
     $data= daftr_marbel::
     where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
     ->get();
     return view('stock_store_daftr_list_marbel_search',['cols'=>$data]);
 }
  // daftr marbel edit
  function delete_marbel_daftr($id){
    $data= daftr_marbel::find($id);
    $data->delete();
    return redirect('stock_store_daftr_list_marbel');
  }
  function showData_stock_daftr_marbel($id){
    $data= daftr_marbel::find($id);
    return view('edit_stock_amad_daftr_entry_marbel',['data'=>$data]);
  }
function update_stock_daftr_marbel(Request $req){
    $data = daftr_marbel::find($req->id);
    $data->laber_name=$req->laber_name;
        $data->amount=$req->amount;
        $data->size=$req->size;
        $data->detail=$req->detail;
        $data->rate_per_bag=$req->rate_per_bag;
        $data->total_days=$req->total_days;
        $data->color=$req->color;

        $data->daftr_no=$req->daftr_no;

    $data->save();
    return redirect('stock_store_daftr_list_marbel');
  }
       // bill for daftr cable dict,electtic,civil work

function daftr_cable_dict_bill(Request $req){
    $data = new daftr_bill_cable_dict;
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;

    $data->daftr_no=$req->daftr_no;
    $data->day=$req->day;
    $data->date=$req->date;
    $data->total=$req->total;


    $data->save();
    return redirect("daftr_bill_cable_dict_list");


  }

function daftr_cable_dict_bill_get(){
    $data= daftr_bill_cable_dict::all();

    if ($data->isEmpty()){
        return redirect('daftr_bill_entry');

    }else{
     return view('daftr_bill_cable_dict_list',['cols'=>$data]);
}}
// daftr cable dict delete
function delete_bill_cable_dict_daftr($id){
    $data= daftr_bill_cable_dict::find($id);
    $data->delete();
    return redirect('daftr_bill_cable_dict_list');
  }
  static function cartItem_cable()
    {
        return daftr_bill_cable_dict::get('id')->count();

    }
      // daftr cable dict
function daftr_cable_dict_daftr(Request $req){
    $data = new daftr_cable_dict;
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;
    $data->daftr_no=$req->daftr_no;
    $data->date=$req->date;
    $data->total=$req->total;
    $data->save();
    return redirect("daftr_stock_cable_dict_list");
  }
  // daftr cable dict edit
function delete_cable_dict_daftr($id){
    $data= daftr_cable_dict::find($id);
    $data->delete();
    return redirect('daftr_stock_cable_dict_list');
  }
  function showData_stock_daftr_cable_dict($id){
    $data= daftr_cable_dict::find($id);
    return view('edit_stock_amad_daftr_entry_cable_dict',['data'=>$data]);
  }
function update_stock_daftr_cable_dict(Request $req){
    $data = daftr_cable_dict::find($req->id);
    $data->detail=$req->detail;
    $data->laber_name=$req->laber_name;
    $data->daftr_no=$req->daftr_no;
    $data->total=$req->total;

    $data->save();
    return redirect('daftr_stock_cable_dict_list');
  }
  //daftr search cable_dict
function daftr_stock_cable_dict_search(Request $req)
{
    $data= daftr_cable_dict::
    where('laber_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('daftr_cable_dict_list_search',['cols'=>$data]);
}
//daftr get cable dict
function daftr_stock_cable_dict(){
    $data= daftr_cable_dict::paginate(30);
     return view('daftr_stock_cable_dict_list',['cols'=>$data]);
}
//daftr painter yomiya update
function delete_daftr_painter_yomiya($id){
    $data= daftr_paint_day::find($id);
    $data->delete();
    return redirect('daftr_paint_yomiya_list');
  }

  function showData_daftr_painter_yomiya($id){
    $data= daftr_paint_day::find($id);
    return view('edit_daftr_paint_yomiay_entry',['data'=>$data]);
  }
  function update_daftr_yomiya(Request $req){
    $data = daftr_paint_day::find($req->id);

    $data->daftr_no=$req->daftr_no;
    $data->date=$req->date;
    $data->painter_name=$req->painter_name;
    $data->total_days=$req->total_days;
    $data->detail=$req->detail;

    $data->save();
    return redirect('daftr_paint_yomiya_list');
  }
  function daftr_bill_paint_yomiya(Request $req){
    $data= new daftr_paint_yomiya_bill;
    $data->daftr_no=$req->daftr_no;
    $data->painter_name=$req->painter_name;
    $data->day=$req->day;
    $data->total=$req->total;
    $data->detail=$req->detail;
    $data->total_days=$req->total_days;
    $data->date=$req->date;

    $data->save();

    return view("daftr_stock_categores",$data);

}
function daftr_bill_steel(Request $req){
    $data= new daftr_steel_bill;
    $data->daftr_no=$req->daftr_no;
    $data->decorator_name=$req->decorator_name;
    $data->day=$req->day;
    $data->amount=$req->amount;
    $data->detail=$req->detail;
    $data->rate=$req->rate;
    $data->weight=$req->weight;
    $data->date=$req->date;

    $data->save();

    return view("daftr_bill_steel_list",$data);

}
function daftr_bill_steel_get(){
    $data= daftr_steel_bill::all();
    if ($data->isEmpty()){
        return redirect('daftr_bill_entry');

    }else{
     return view('daftr_bill_steel_list',['cols'=>$data]);
}}

static function cartItem_steel_bill_daftr()
{
    return daftr_steel_bill::get('id')->count();

}
function delete_bill_steel_daftr($id){
    $data= daftr_steel_bill::find($id);
    $data->delete();
    return redirect('daftr_bill_steel_list');
  }
  //chair bill
  function chair_bill_daftr_no(){
    $data= chair_bill_daftr::all();
    if ($data->isEmpty()){
        return redirect('daftr_bill_entry');

    }else{
     return view('daftr_bill_chair_list',['cols'=>$data]);
}}

static function cartItem_chair_bill_daftr()
{
    return chair_bill_daftr::get('id')->count();

}
function delete_bill_daftr_chair($id){
    $data= chair_bill_daftr::find($id);
    $data->delete();
    return redirect('daftr_bill_chair_list');
  }
   // daftr carpenter yomiya
   function daftr_yomiya_cartpenter(Request $req)
   {
      
       foreach($req->inc_id as $key=>$insert){
       $database = [

       'total'=>$req->total[$key],
       'total_days'=>$req->total_days[$key],
       'detail'=>$req->detail[$key],
       'carpenter_name'=>$req->carpenter_name[$key],
       'daftr_no'=>$req->daftr_no[$key],
       'inc_id'=>$req->inc_id[$key],
       'date'=>$req->date[$key],

       ];

       // return dd($database);
       DB::table('daftr_yomiya_detail_carpenters')->insert($database);
   }
   return redirect("daftr_stock_categores");

   }
   //daftr get carpenter yomiya
function stock_yomiya_carpenter_daftr(){
  $data= daftr_yomiya_detail_carpenter::paginate(30);
   return view('daftr_stock_yomiya_carpenter_list',['cols'=>$data]);
}
// daftr carpenter yomiya 
function daftr_search_yomiya_carpenter(Request $req)
{
    $data= daftr_yomiya_detail_carpenter::
    where('carpenter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('daftr_stock_yomiya_carpenter_list_search',['cols'=>$data]);
}

//daftr yomiya edit carpenter
function delete_yomiya_carpenter_daftr($id){
  $data= daftr_yomiya_detail_carpenter::find($id);
  $data->delete();
  return redirect('daftr_stock_yomiya_carpenter_list');
}

function showData_yomiya_carpenter_daftr($id){
  $data= daftr_yomiya_detail_carpenter::find($id);
  return view('edit_stock_yomiya_quater_entry_daftr_carpenter',['data'=>$data]);
}
function update_yomiya_carpenter_daftr(Request $req){
   $data = daftr_yomiya_detail_carpenter::find($req->id);
   $data->detail=$req->detail;
   $data->daftr_no=$req->daftr_no;
   $data->total_days=$req->total_days;
   $data->carpenter_name=$req->carpenter_name;
   $data->total=$req->total;

 
  $data->save();
  return redirect('daftr_stock_yomiya_carpenter_list');
}

function daftr_chakar_entry(Request $req){
  $data= new daftr_chakar;
  $data->name=$req->name;
  $data->detail=$req->detail;
  $data->chakar=$req->chakar;
  $data->date=$req->date;
  $data->total=$req->total;

  $data->save();

  return view("daftr_stock_categores",$data);

}
function daftr_chakar_get(){
  $data= daftr_chakar::paginate(30);
   return view('stock_chakar_list_daftr',['cols'=>$data]);
}
function daftr_chakar_get_search(Request $req)
{
    $data= daftr_chakar::
    where('name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('stock_chakar_list_daftr_search',['cols'=>$data]);
}

//edit daftr chakar
function delete_daftr_chakar($id){
  $data= daftr_chakar::find($id);
  $data->delete();
  return redirect('stock_chakar_list_daftr');
}
function showData_daftr_chakar($id){
  $data= daftr_chakar::find($id);
  return view('edit_chakar_daftr_entry',['data'=>$data]);
}
function update_daftr_chakar(Request $req){
  $data=  daftr_chakar::find($req->id);
  $data->name=$req->name;
  $data->detail=$req->detail;
  $data->chakar=$req->chakar;
  $data->date=$req->date;
  $data->total=$req->total;

  $data->save();
  return redirect('stock_chakar_list_daftr');

}


}
