<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ishya_quater_tameer;
use App\Models\quater_tameer_thekedar;
use App\Models\quater_tameer_steel;
use App\Models\add_tameer_quater;
use App\Models\thekedar_bill_tameer;
use App\Models\steel_decorator_bill_tameer;
use App\Models\wood_work_bill_tameer;
use App\Models\wood_work_tameer;
use App\Models\tameer_quater_painter;
use App\Models\tameer_painter_bill;
use App\Models\electric_tameer_quater;
use App\Models\electric_bill_tameer_quater;
use App\Models\tameer_quater_marbel;

use App\Models\tameer_chakar;


use Illuminate\Support\Facades\DB;

class quater_tameer_controller extends Controller
{
    //
    function quater_tameer_ishya(Request $req){
        $data= new ishya_quater_tameer;
        $data->ishya_name=$req->ishya_name;
        $data->muhala=$req->muhala;
        $data->amount=$req->amount;
        $data->rate=$req->rate;
        $data->naqas=$req->naqas;
        $data->detail=$req->detail;
        $data->date=$req->date;

        $data->save();

        return view("quater_tameer_categores",$data);

    }
    function ishya_tameer_list(){
        $data= ishya_quater_tameer::paginate(30);
         return view('ishya_tameer_list',['cols'=>$data]);
    }
    function delete_tameer_ishya($id){
        $data= ishya_quater_tameer::find($id);
        $data->delete();
        return redirect('ishya_tameer_list');
      }

      function showData_ishya_tameer($id){
        $data= ishya_quater_tameer::find($id);
        return view('edit_ishya_tameer',['data'=>$data]);
      }
      function update_tameer_ishya(Request $req){
        $data=  ishya_quater_tameer::find($req->id);
        $data->muhala=$req->muhala;
        $data->ishya_name=$req->ishya_name;
        $data->naqas=$req->naqas;
        $data->rate=$req->rate;
        $data->amount=$req->amount;
        $data->detail=$req->detail;
        $data->save();
        return redirect('ishya_tameer_list');
      }
      function search_ishya_tameer(Request $req)
      {
          $data= ishya_quater_tameer::
          where('detail', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
          ->get();
          return view('ishya_tameer_list_search',['cols'=>$data]);
      }
      function thekedar_tameer_search(Request $req)
      {
          $data= quater_tameer_thekedar::
          where('thekedar_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
          ->get();
          return view('thekedar_tameer_list_search',['cols'=>$data]);
      }
      function search_steel_tameer(Request $req)
      {
          $data= quater_tameer_steel::
          where('decorator_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
          ->get();
          return view('steel_tameer_list_search',['cols'=>$data]);
      }
    function thekedar_tameer_list(){
        $data= quater_tameer_thekedar::paginate(30);
         return view('thekedar_tameer_list',['cols'=>$data]);
    }
    function thekedar_tameer_del($id){
        $data= quater_tameer_thekedar::find($id);
        $data->delete();
        return redirect('thekedar_tameer_list');
      }

      function showData_thekedar_tameer($id){
        $data= quater_tameer_thekedar::find($id);
        return view('edit_thekedar_tameer',['data'=>$data]);
      }
      function update_tameer_thekedar(Request $req){
        $data=  quater_tameer_thekedar::find($req->id);

        $data->thekedar_name=$req->thekedar_name;
        $data->thekedar_type=$req->thekedar_type;
        $data->muhala=$req->muhala;

        $data->detail=$req->detail;
        $data->mrubah_rate=$req->mrubah_rate;
        $data->mrubah_per_rate=$req->mrubah_per_rate;
        $data->progress=$req->progress;
        $data->security_rate=$req->security_rate;
        $data->adaigi=$req->adaigi;
        $data->save();
        return redirect('thekedar_tameer_list');
      }
    function steel_tameer_list(){
        $data= quater_tameer_steel::paginate(30);
         return view('steel_tameer_list',['cols'=>$data]);
    }
    function delete_tameer_steel($id){
        $data= quater_tameer_steel::find($id);
        $data->delete();
        return redirect('steel_tameer_list');
      }
      function showData_steel_tameer($id){
        $data= quater_tameer_steel::find($id);
        return view('edit_steel_tameer',['data'=>$data]);
      }
      function update_tameer_steel(Request $req){
        $data=  quater_tameer_steel::find($req->id);
        $data->decorator_name=$req->decorator_name;
        $data->muhala=$req->muhala;
        $data->detail=$req->detail;
        // $data->date=$req->date;
        $data->weight=$req->weight;
        $data->detail=$req->detail;
        $data->rate=$req->rate;

        $data->save();
        return redirect('steel_tameer_list');
      }
    function quater_tameer_thekedar(Request $req){
        $data= new quater_tameer_thekedar;
        $data->thekedar_name=$req->thekedar_name;
        $data->thekedar_type=$req->thekedar_type;
        $data->muhala=$req->muhala;
        $data->detail=$req->detail;
        $data->mrubah_rate=$req->mrubah_rate;
        $data->mrubah_per_rate=$req->mrubah_per_rate;
        $data->progress=$req->progress;
        $data->adaigi=$req->adaigi;
        $data->security_rate=$req->security_rate;
        $data->date=$req->date;

        $data->save();

        return view("quater_tameer_categores",$data);

    }
    function steel_quater_tameer(Request $req){
    //     $data= new quater_tameer_steel;
    //     $data->decorator_name=$req->decorator_name;
    //     $data->muhala=$req->muhala;
    //     $data->decorator_name=$req->decorator_name;

    //     $data->total=$req->total;

    //     $data->detail=$req->detail;
    //     $data->date=$req->date;

    //     $data->save();

    //     return view("quater_tameer_categores",$data);

    // }
    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'amount'=>$req->amount[$key],
        'decorator_name'=>$req->decorator_name[$key],
        'weight'=>$req->weight[$key],
        'rate'=>$req->rate[$key],
        'date'=>$req->date[$key],
        'muhala'=>$req->muhala[$key],


        ];

        // return dd($database);
        DB::table('quater_tameer_steels')->insert($database);
    }
    return redirect("quater_tameer_categores");

  }
  static function cartItem_decorator()
  {
      return quater_tameer_steel::get('id')->count();

  }
    // function add_tameer(Request $req){
    //     $data= new add_tameer_quater;
    //     $data->tameer_quater_number=$req->tameer_quater_number;

    //     $data->save();

    //     return view("quater_tameer_categores",$data);

    // }
    function quater_tameer_get_data(){
        $data= add_tameer_quater::all();
         return view('quater_tameer_entry',['cols'=>$data]);
    }
    function edit_quater_tameer_get_data(){
        $data= add_tameer_quater::all();
         return view('edit_thekedar_tameer',['cols'=>$data]);
    }

     // water tank bill
     function tameer_quater_thekedar(Request $req){
        $data = new thekedar_bill_tameer;
        $data->date=$req->date;
        $data->thekedar_name=$req->thekedar_name;
        $data->thekedar_type=$req->thekedar_type;
        $data->detail=$req->detail;
        $data->mrubah_rate=$req->mrubah_rate;
        $data->mrubah_per_rate=$req->mrubah_per_rate;
        $data->progress=$req->progress;

        $data->security_rate=$req->security_rate;
        $data->maqam=$req->maqam;


        $data->save();
        return redirect('bill_tameer_thekedar');
      }
      function tameer_quater_steel(Request $req){
        $data= new steel_decorator_bill_tameer;
        $data->decorator_name=$req->decorator_name;
        $data->date=$req->date;
        $data->muhala=$req->muhala;
        $data->date=$req->date;

        $data->detail=$req->detail;
        $data->kraya_chakr=$req->kraya_chakr;
        $data->amount=$req->amount;
        $data->rate=$req->rate;
        $data->per_kg=$req->per_kg;




        $data->save();
        return redirect('bill_tameer_steel_decorator');


    }
    function tameer_quater_thekedar_get(){
        $data= thekedar_bill_tameer::all();
        if ($data->isEmpty()){
            return redirect('bill_tameer_quater_entry');

        }else{
         return view('bill_tameer_thekedar',['cols'=>$data]);
    }}
    static function cartItem_thekedar()
        {
            return thekedar_bill_tameer::get('id')->count();

        }
    function tameer_quater_steel_get(){
        $data= steel_decorator_bill_tameer::all();

        if ($data->isEmpty()){
            return redirect('bill_tameer_quater_entry');

        }else{
         return view('bill_tameer_steel_decorator',['cols'=>$data]);

    }
}
    static function cartItem_steel()
        {
            return steel_decorator_bill_tameer::get('id')->count();

        }
//tameer bill wood works
function tameer_bill_wood(Request $req)
{

    $data= new wood_work_bill_tameer;
    $data->detail=$req->detail;
    $data->date=$req->date;
    $data->muhala=$req->muhala;
    $data->adaigi=$req->adaigi;
    $data->per_foot=$req->per_foot;
    $data->rate=$req->rate;
    $data->advance=$req->advance;

    $data->thekedar_name=$req->thekedar_name;



    $data->save();

    return redirect("tameer_quater_bill_wood");

}
function tank_bill_get_wood(){
    $data= wood_work_bill_tameer::all();

    if ($data->isEmpty()){
        return redirect('bill_tameer_quater_entry');

    }else{
     return view('tameer_quater_bill_wood',['cols'=>$data]);
    }
}
static function tameer_cartItem_wood()
    {
        return wood_work_bill_tameer::get('id')->count();

    }
// tameer wood works
function tameer_wood(Request $req)
{

    // $data= new wood_work_tameer;
    // $data->detail=$req->detail;
    // $data->total=$req->total;
    // $data->thekedar_name=$req->thekedar_name;
    // $data->muhala=$req->muhala;

    // $data->date=$req->date;


    // $data->save();

    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'advance'=>$req->advance[$key],
        'store_name'=>$req->store_name[$key],
        'adaighi'=>$req->adaighi[$key],
        'rate'=>$req->rate[$key],
        'murabah_foot'=>$req->murabah_foot[$key],
        'date'=>$req->date[$key],
        'muhala'=>$req->muhala[$key],


        ];

        // return dd($database);
        DB::table('wood_work_tameers')->insert($database);
    }
    return redirect("quater_tameer_categores");

}
function tameer_painter(Request $req)
{


  foreach($req->inc_id as $key=>$insert){
      $database = [
      'inc_id'=>$req->inc_id[$key],
      'per_murabah_rate'=>$req->per_murabah_rate[$key],
      'rakbah'=>$req->rakbah[$key],
      'painter_name'=>$req->painter_name[$key],
    //   'day'=>$req->day[$key],
      'kaam'=>$req->kaam[$key],
      'date'=>$req->date[$key],
      'muhala'=>$req->muhala[$key],


      ];

      // return dd($database);
      DB::table('tameer_quater_painters')->insert($database);
  }
  return redirect("tameer_quater_stock_categores");

}
function tameer_painter_get(){
    $data = tameer_quater_painter::paginate(30);
    return view('tameer_painter_list',['cols'=>$data]);
  }
  function tameer_painter_search(Request $req)
{
    $data= tameer_quater_painter::
    where('painter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('tameer_painter_list_search',['cols'=>$data]);
}
static function tameer_quater_paint()
  {
      return tameer_quater_painter::get('id')->count();

  }
static function cartItem_wood()
{
    return wood_work_tameer::get('id')->count();

}
function tameer_get_wood(){
    $data= wood_work_tameer::paginate(30);
     return view('tameer_wood_work_list',['cols'=>$data]);
}
function tameer_wood_work_search(Request $req)
{
    $data= wood_work_tameer::
    where('store_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('tameer_wood_work_list_search',['cols'=>$data]);
}
//edit tameer wood works
function delete_tameer_wood($id){
    $data= wood_work_tameer::find($id);
    $data->delete();
    return redirect('tameer_wood_work_list');
  }
  function showData_wood_tameer($id){
    $data= wood_work_tameer::find($id);
    return view('edit_tameer_wood_work_list',['data'=>$data]);
  }
  function update_tameer_wood(Request $req){
    $data=  wood_work_tameer::find($req->id);
    $data->detail=$req->detail;
    $data->store_name=$req->store_name;
    $data->muhala=$req->muhala;
    $data->advance=$req->advance;
    $data->adaighi=$req->adaighi;
    $data->rate=$req->rate;



    $data->save();
    return redirect('tameer_wood_work_list');
  }
  //edit tameer painter
function delete_tameer_paint($id){
    $data= tameer_quater_painter::find($id);
    $data->delete();
    return redirect('tameer_painter_list');
  }
  function showData_tameer_paint($id){
    $data= tameer_quater_painter::find($id);
    return view('edit_tameer_quater_paint_entry',['data'=>$data]);
  }
  function update_tameer_paint(Request $req){
    $data=  tameer_quater_painter::find($req->id);
    $data->painter_name=$req->painter_name;
    $data->muhala=$req->muhala;
    $data->kaam=$req->kaam;
    $data->rakbah=$req->rakbah;
    $data->per_murabah_rate=$req->per_murabah_rate;



    $data->save();
    return redirect('tameer_painter_list');
  }
    //delete tameer thekedar

function delete_bill_tameer_wood($id){
    $data= wood_work_bill_tameer::find($id);
    $data->delete();
    return redirect('tameer_quater_bill_wood');
  }
   //delete tameer steel

function delete_bill_tameer_steel($id){
    $data= steel_decorator_bill_tameer::find($id);
    $data->delete();
    return redirect('bill_tameer_steel_decorator');
  }
  //delete tameer mistri

function delete_bill_tameer_mistri($id){
    $data= thekedar_bill_tameer::find($id);
    $data->delete();
    return redirect('bill_tameer_thekedar');
  }
  function tameer_bill_painter(Request $req){
    $data= new tameer_painter_bill;
    $data->painter_name=$req->painter_name;
    $data->date=$req->date;
    $data->day=$req->day;
    $data->kaam=$req->kaam;
    $data->rakbah=$req->rakbah;
    $data->per_foot=$req->per_foot;
    $data->save();
    return redirect('bill_tameer_steel_decorator');

}
//tameer electric
function electric_tameer(Request $req){
    $data= new electric_tameer_quater;
    $data->store_name=$req->store_name;
    // $data->thekedar_type=$req->thekedar_type;
    $data->detail=$req->detail;
    $data->rate=$req->rate;
    $data->adaigi=$req->adaigi;
    $data->qisth=$req->qisth;
    $data->security_rate=$req->security_rate;
    $data->date=$req->date;
    $data->covered_area=$req->covered_area;
    $data->muhala=$req->muhala;

    $data->save();

    return view("tameer_quater_stock_categores",$data);

}
function tameer_electric_list(){
    $data= electric_tameer_quater::paginate(30);
     return view('tameer_quater_electric_list',['cols'=>$data]);
}
function tameer_electric_search(Request $req)
{
    $data= electric_tameer_quater::
    where('store_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('tameer_quater_electric_list_search',['cols'=>$data]);
}


// tameer quater edit
function delete_electric_edit_tameer($id){
    $data= electric_tameer_quater::find($id);
    $data->delete();
    return redirect('tameer_quater_electric_list');
  }

  function showData_electric_edit_tameer($id){
    $data= electric_tameer_quater::find($id);
    return view('edit_tameer_quater_electric',['data'=>$data]);
  }
  function update_electric_edit_tameer(Request $req){
    $data = electric_tameer_quater::find($req->id);

    $data->store_name=$req->store_name;
    // $data->thekedar_type=$req->thekedar_type;
    $data->detail=$req->detail;
    $data->rate=$req->rate;
    $data->adaigi=$req->adaigi;
    $data->qisth=$req->qisth;
    $data->security_rate=$req->security_rate;
    $data->muhala=$req->muhala;
    $data->covered_area=$req->covered_area;
    $data->save();
    return redirect('tameer_quater_electric_list');
  }
  //tameer electric bill
function electric_bill_tameer(Request $req){
    $data= new electric_bill_tameer_quater;
    $data->store_name=$req->store_name;
    // $data->thekedar_type=$req->thekedar_type;
    $data->detail=$req->detail;
    $data->rate=$req->rate;
    $data->adaigi=$req->adaigi;
    $data->qisth=$req->qisth;
    $data->security_rate=$req->security_rate;
    $data->date=$req->date;
    $data->covered_area=$req->covered_area;
    $data->muhala=$req->muhala;

    $data->save();

    return view("tameer_quater_stock_categores",$data);

}
  //tameer marbel

function marbel_tameer(Request $req){

  foreach($req->inc_id as $key=>$insert){
      $database = [
      'inc_id'=>$req->inc_id[$key],
      'detail'=>$req->detail[$key],
      'store_name'=>$req->store_name[$key],
      'foot'=>$req->foot[$key],
      'amount'=>$req->amount[$key],
      'rate'=>$req->rate[$key],
      'muhala'=>$req->muhala[$key],
      'date'=>$req->date[$key],

      ];


  // return dd($database);
  DB::table('tameer_quater_marbels')->insert($database);
}
return redirect("tameer_quater_stock_categores");
}

function tameer_quater_marbel_get(){
  $data= tameer_quater_marbel::paginate(30);
   return view('tameer_stock_marbel_list',['cols'=>$data]);
}
function tameer_quater_marbel_search(Request $req)
{
    $data= tameer_quater_marbel::
    where('store_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('tameer_stock_marbel_list_search',['cols'=>$data]);
}

//edit tameer marbel
function delete_tameer_marbel($id){
  $data= tameer_quater_marbel::find($id);
  $data->delete();
  return redirect('tameer_stock_marbel_list');
}
function showData_tameer_marbel($id){
  $data= tameer_quater_marbel::find($id);
  return view('edit_stock_tameer_quater_marbel',['data'=>$data]);
}
function update_tameer_marbel(Request $req){
  $data=  tameer_quater_marbel::find($req->id);
  $data->store_name=$req->store_name;
  $data->muhala=$req->muhala;
  $data->rate=$req->rate;
  $data->detail=$req->detail;
  $data->amount=$req->amount;
  $data->foot=$req->foot;
  $data->amount=$req->amount;




  $data->save();
  return redirect('tameer_stock_marbel_list');

}
function tameer_chakar_entry(Request $req){
  $data= new tameer_chakar;
  $data->name=$req->name;
  $data->detail=$req->detail;
  $data->chakar=$req->chakar;
  $data->date=$req->date;
  $data->total=$req->total;

  $data->save();

  return view("quater_tameer_categores",$data);

}
function tameer_chakar_get(){
  $data= tameer_chakar::paginate(30);
   return view('stock_chakar_list_tameer',['cols'=>$data]);
}
function tameer_chakar_get_search(Request $req)
{
    $data= tameer_chakar::
    where('name','LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('stock_chakar_list_tameer_search',['cols'=>$data]);
   
}

//edit tameer chakar
function delete_tameer_chakar($id){
  $data= tameer_chakar::find($id);
  $data->delete();
  return redirect('stock_chakar_list_tameer');
}
function showData_tameer_chakar($id){
  $data= tameer_chakar::find($id);
  return view('edit_chakar_tameer_entry',['data'=>$data]);
}
function update_tameer_chakar(Request $req){
  $data=  tameer_chakar::find($req->id);
  $data->name=$req->name;
  $data->detail=$req->detail;
  $data->chakar=$req->chakar;
  $data->date=$req->date;
  $data->total=$req->total;

  $data->save();
  return redirect('stock_chakar_list_tameer');

}

}