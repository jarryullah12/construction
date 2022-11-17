<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ishya_rated;
use App\Models\ishya_water_tank;
use App\Models\amad_tank_entry;
use App\Models\thekedar_water_tank;
use App\Models\amad_tameer_quater_entry;
use App\Models\steel_decorator_tank;
use App\Models\steel_decorator_bill_tank;
use App\Models\thekedar_bill_water_tank;
use App\Models\wood_work_bill_tank;
use App\Models\wood_work_tank_steel;
use App\Models\water_tank_painter;
use App\Models\electric_water_tank;
use App\Models\electric_bill_water_tank;
use App\Models\water_tank_marbel;

use Illuminate\Support\Facades\DB;


class ishya extends Controller
{
    //
    function ishya_saman(Request $req){
        $data= new ishya_rated;
        $data->ishya_name=$req->ishya_name;
        $data->ishya_type=$req->ishya_type;
        $data->amount=$req->amount;
        $data->date=$req->date;

        $data->save();

        return view("ishya_rate_categores",$data);

    }
    function ishya_list(){
        $data= ishya_rated::paginate(30);
         return view('ishya_rate_list',['cols'=>$data]);
    }
    function ishya_list_search(Request $req)
    {
        $data= ishya_rated::
        where('ishya_name', $req->input('query'))
        ->get();
        return view('ishya_rate_list_search',['cols'=>$data]);
    }

    //edit ishya

    //fatuh saman edit
    function show_ishya(){
        $data = ishya_rated::paginate(30);
        return view('ishya_rate_list',['cols'=>$data]);
      }
      function delete_ishya($id){
        $data= ishya_rated::find($id);
        $data->delete();
        return redirect('ishya_rate_list');
      }

      function showData_ishya($id){
        $data= ishya_rated::find($id);
        return view('edit_ishya_rate',['data'=>$data]);
      }
      function update_ishya(Request $req){
        $data = ishya_rated::find($req->id);

        $data->ishya_name=$req->ishya_name;
        $data->ishya_type=$req->ishya_type;

        $data->amount=$req->amount;

        $data->save();
        return redirect('ishya_rate_list');
      }
      //water tank ishya
      function ishya_tank(Request $req){
        $data= new ishya_water_tank;
        $data->ishya_name=$req->ishya_name;
        $data->detail=$req->detail;
        $data->rate=$req->rate;
        $data->amount=$req->amount;
        $data->naqas=$req->naqas;
        $data->date=$req->date;

        $data->save();

        return view("water_tank_categores",$data);

    }
    function ishya_list_tank(){
        $data= ishya_water_tank::paginate(30);
         return view('ishya_tank_list',['cols'=>$data]);
    }
    function ishya_tank_search(Request $req)
    {
        $data= ishya_water_tank::
        where('detail', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('ishya_tank_list_search',['cols'=>$data]);
    }




 //water tank electric
 function electric_tank(Request $req){
    $data= new electric_water_tank;
    $data->store_name=$req->store_name;
    // $data->thekedar_type=$req->thekedar_type;
    $data->detail=$req->detail;
    $data->rate=$req->rate;
    $data->adaigi=$req->adaigi;
    $data->qisth=$req->qisth;
    $data->security_rate=$req->security_rate;
    $data->date=$req->date;
    $data->covered_area=$req->covered_area;


    $data->save();

    return view("water_tank_categores",$data);

}
function tank_electric_list(){
    $data= electric_water_tank::paginate(30);
     return view('water_tank_electric_list',['cols'=>$data]);
}
function tank_electric_search(Request $req)
{
    $data= electric_water_tank::
    where('store_name','LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('water_tank_electric_list_search',['cols'=>$data]);
}

// water tank electric edit
function delete_electric_edit_tank($id){
    $data= electric_water_tank::find($id);
    $data->delete();
    return redirect('water_tank_electric_list');
  }

  function showData_electric_edit($id){
    $data= electric_water_tank::find($id);
    return view('edit_water_tank_electric',['data'=>$data]);
  }
  function update_electric_edit(Request $req){
    $data = electric_water_tank::find($req->id);

    $data->store_name=$req->store_name;
    // $data->thekedar_type=$req->thekedar_type;
    $data->detail=$req->detail;
    $data->rate=$req->rate;
    $data->adaigi=$req->adaigi;
    $data->qisth=$req->qisth;
    $data->security_rate=$req->security_rate;
    // $data->date=$req->date;
    $data->covered_area=$req->covered_area;
    $data->save();
    return redirect('water_tank_electric_list');
  }
  //tank electric bill
  function electric_bill_tank(Request $req){
    $data= new electric_bill_water_tank;
    $data->store_name=$req->store_name;
    // $data->thekedar_type=$req->thekedar_type;
    $data->detail=$req->detail;
    $data->rate=$req->rate;
    $data->adaigi=$req->adaigi;
    $data->qisth=$req->qisth;
    $data->security_rate=$req->security_rate;
    $data->date=$req->date;
    $data->covered_area=$req->covered_area;

    $data->save();

    return view("water_tank_categores",$data);

}


    //water tank thekedar
    function thekedar_tank(Request $req){
        $data= new thekedar_water_tank;
        $data->thekedar_name=$req->thekedar_name;
        $data->thekedar_type=$req->thekedar_type;
        $data->detail=$req->detail;
        $data->mrubah_rate=$req->mrubah_rate;
        $data->mrubah_per_rate=$req->mrubah_per_rate;
        $data->progress=$req->progress;
        $data->adaigi=$req->adaigi;
        $data->security_rate=$req->security_rate;
        $data->date=$req->date;
        // $data->muhala=$req->muhala;


        $data->save();

        return view("water_tank_categores",$data);

    }
    function thekedar_list_tank(){
        $data= thekedar_water_tank::paginate(30);
         return view('thekedar_tank_list',['cols'=>$data]);
    }

    //edit thekedar
    function show_thekedar(){
        $data = thekedar_water_tank::paginate(30);
        return view('thekedar_tank_list',['cols'=>$data]);
      }
      function delete_thekedar($id){
        $data= thekedar_water_tank::find($id);
        $data->delete();
        return redirect('thekedar_tank_list');
      }

      function showData_thekedar($id){
        $data= thekedar_water_tank::find($id);
        return view('edit_thekedar_tank',['data'=>$data]);
      }
      function update_thekedar(Request $req){
        $data = thekedar_water_tank::find($req->id);

        $data->thekedar_name=$req->thekedar_name;
        $data->thekedar_type=$req->thekedar_type;
        $data->detail=$req->detail;
        $data->mrubah_rate=$req->mrubah_rate;
        $data->mrubah_per_rate=$req->mrubah_per_rate;
        $data->progress=$req->progress;
        $data->security_rate=$req->security_rate;
        $data->adaigi=$req->adaigi;


        $data->save();
        return redirect('thekedar_tank_list');
      }
      function thekedar_tank_search(Request $req)
    {
        $data= thekedar_water_tank::
        where('thekedar_name','LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('thekedar_tank_list_search',['cols'=>$data]);
    }
    function water_painter(Request $req)
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
        //   'muhala'=>$req->muhala[$key],


          ];

          // return dd($database);
          DB::table('water_tank_painters')->insert($database);
      }
      return redirect("water_tank_stock_categores");

    }
    function water_painter_get(){
        $data = water_tank_painter::paginate(30);
        return view('water_tank_painter_list',['cols'=>$data]);
      }
      function water_paint_search(Request $req)
      {
          $data= water_tank_painter::
          where('painter_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
          ->get();
          return view('water_tank_painter_list_search',['cols'=>$data]);
      }
    static function water_tank_paint()
      {
          return water_tank_painter::get('id')->count();

      }

    //water tank steel decorator

    function steel_tank(Request $req){
        foreach($req->inc_id as $key=>$insert){
            $database = [
            'inc_id'=>$req->inc_id[$key],
            'detail'=>$req->detail[$key],
            'amount'=>$req->amount[$key],
            'decorator_name'=>$req->decorator_name[$key],
            'weight'=>$req->weight[$key],
            'rate'=>$req->rate[$key],
            // 'muhala'=>$req->muhala[$key],
            'date'=>$req->date[$key],


            ];

            // return dd($database);
            DB::table('steel_decorator_tanks')->insert($database);
        }
        return redirect("water_tank_categores");

      }

      static function cartItem_decorator()
      {
          return steel_decorator_tank::get('id')->count();

      }
    //     $data= new steel_decorator_tank;
    //     $data->decorator_name=$req->decorator_name;


    //     $data->detail=$req->detail;


    //     $data->total=$req->total;
    //     $data->date=$req->date;

    //     $data->save();

    //     return view("water_tank_categores",$data);

    // }
    function steel_list(){
        $data= steel_decorator_tank::paginate(30);
         return view('steel_tank_list',['cols'=>$data]);
    }
    function steel_tank_search(Request $req)
    {
        $data= steel_decorator_tank::
        where('decorator_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('steel_tank_list_search',['cols'=>$data]);
    }

    //edit steel tank
    function show_steel(){
        $data = steel_decorator_tank::paginate(30);
        return view('steel_tank_list',['cols'=>$data]);
      }
      function delete_steel($id){
        $data= steel_decorator_tank::find($id);
        $data->delete();
        return redirect('steel_tank_list');
      }

      function showData_steel($id){
        $data= steel_decorator_tank::find($id);
        return view('edit_steel_tank',['data'=>$data]);
      }
      function update_steel(Request $req){
        $data = steel_decorator_tank::find($req->id);

        $data->decorator_name=$req->decorator_name;
        $data->detail=$req->detail;

        $data->weight=$req->weight;
        $data->rate=$req->rate;
        $data->amount=$req->amount;



        $data->save();
        return redirect('steel_tank_list');
      }
       //edit painter tank

      function delete_tank_painter($id){
        $data= water_tank_painter::find($id);
        $data->delete();
        return redirect('water_tank_painter_list');
      }

      function showData_water_tank_paint($id){
        $data= water_tank_painter::find($id);
        return view('edit_water_tank_paint_entry',['data'=>$data]);
      }
      function update_water_tank_paint(Request $req){
        $data = water_tank_painter::find($req->id);

        $data->painter_name=$req->painter_name;
        $data->per_murabah_rate=$req->per_murabah_rate;
        $data->rakbah=$req->rakbah;
        $data->kaam=$req->kaam;

        $data->save();
        return redirect('water_tank_painter_list');
      }
      //edit ishya tank


    function show_ishya_edit(){
        $data = ishya_water_tank::paginate(30);
        return view('ishya_tank_list',['cols'=>$data]);
      }
      function delete_ishya_edit($id){
        $data= ishya_water_tank::find($id);
        $data->delete();
        return redirect('ishya_tank_list');
      }

      function showData_ishya_edit($id){
        $data= ishya_water_tank::find($id);
        return view('edit_ishya_tank',['data'=>$data]);
      }
      function update_ishya_edit(Request $req){
        $data = ishya_water_tank::find($req->id);

        $data->ishya_name=$req->ishya_name;
        $data->detail=$req->detail;
        $data->amount=$req->amount;
        $data->naqas=$req->naqas;
        $data->rate=$req->rate;
        $data->save();
        return redirect('ishya_tank_list');
      }
      function tank_amad_quater_entry(Request $req){
        $data = new amad_tank_entry;
        $data->date=$req->date;

        $data->maal_type=$req->maal_type;
        $data->detail=$req->detail;
        $data->amount=$req->amount;
        $data->save();
        return redirect('water_tank_categores');
      }
      function water_tank_amad_quater_list(){
        $data= amad_tank_entry::paginate(30);
        return view('water_tank_amad_quater_list',['cols'=>$data]);
      }


      function amad_tank_delete($id){
        $data= amad_tank_entry::find($id);
        $data->delete();
        return redirect('water_tank_amad_quater_list');
      }

      function showData_amad_tank_edit($id){
        $data= amad_tank_entry::find($id);
        return view('edit_water_tank_amad_quater_entry',['data'=>$data]);
      }
      function update_amad_tank_edit(Request $req){
        $data = amad_tank_entry::find($req->id);

        $data->maal_type=$req->maal_type;
        $data->detail=$req->detail;
        $data->amount=$req->amount;
        $data->save();
        return redirect('water_tank_amad_quater_list');
      }
      function search_amad_tank(Request $req)
      {
          $data= amad_tank_entry::
          where('maal_type', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
          ->get();
          return view('amad_quater_tank_search',['cols'=>$data]);
      }
      //amad tameer quater
      function amad_tameer_quater(){
        $data= amad_tameer_quater_entry::paginate(30);
        return view('tameer_quater_list',['cols'=>$data]);
      }
      function amad_tameer_post(Request $req){
        $data = new amad_tameer_quater_entry;

        $data->maal_type=$req->maal_type;
        $data->detail=$req->detail;
        $data->amount=$req->amount;
        $data->date=$req->date;

        $data->save();
        return redirect('quater_tameer_categores');
      }
      //edit tameer quater
      function amad_tameer_delete($id){
        $data= amad_tameer_quater_entry::find($id);
        $data->delete();
        return redirect('tameer_quater_list');
      }
      function showData_amad_tameer_edit($id){
        $data= amad_tameer_quater_entry::find($id);
        return view('edit_amad_quater_tameer_entry',['data'=>$data]);
      }
      function update_amad_tameer_edit(Request $req){
        $data = amad_tameer_quater_entry::find($req->id);

        $data->maal_type=$req->maal_type;
        $data->detail=$req->detail;
        $data->amount=$req->amount;
        $data->save();
        return redirect('tameer_quater_list');
      }
      function search_amad_tameer(Request $req)
      {
          $data= amad_tameer_quater_entry::
          where('maal_type', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
          ->get();
          return view('amad_quater_tameer_search',['cols'=>$data]);
      }
      // water tank bill
      function tank_bill_thekedar(Request $req){
        $data = new thekedar_bill_water_tank;
        $data->date=$req->date;
        $data->thekedar_name=$req->thekedar_name;
        $data->thekedar_type=$req->thekedar_type;
        $data->detail=$req->detail;
        $data->mrubah_rate=$req->mrubah_rate;
        $data->mrubah_per_rate=$req->mrubah_per_rate;
        $data->progress=$req->progress;
        $data->security_rate=$req->security_rate;


        $data->save();
        return redirect('water_tank_bill_thekedar');
      }
      function steel_bill_tank(Request $req){
        $data= new steel_decorator_bill_tank;
        $data->decorator_name=$req->decorator_name;
        $data->date=$req->date;
        $data->kraya_chakr=$req->kraya_chakr;
        $data->amount=$req->amount;

        $data->per_kg=$req->per_kg;
        $data->rate=$req->rate;
        $data->detail=$req->detail;



        $data->save();

        return redirect("water_tank_bill_steel");

    }
    function tank_bill_thekedar_get(){

        $data= thekedar_bill_water_tank::all();

         if ($data->isEmpty()){
            return redirect("water_tank_bill_entry");

         }else{
             return view('water_tank_bill_thekedar',['cols'=>$data]);

         }
        }
    static function cartItem_thekedar()
        {
            return thekedar_bill_water_tank::get('id')->count();

        }
    function tank_bill_get_steel(){
        $data= steel_decorator_bill_tank::all();
        if ($data->isEmpty()){
            return redirect("water_tank_bill_entry");

    }
    else{
        return view('water_tank_bill_steel',['cols'=>$data]);

    }
}
    static function cartItem_steel()
        {
            return steel_decorator_bill_tank::get('id')->count();

        }
// water tank bill wood works
function tank_bill_wood(Request $req)
{

    $data= new wood_work_bill_tank;
    $data->detail=$req->detail;
    $data->date=$req->date;
    $data->adaigi=$req->adaigi;
    $data->per_foot=$req->per_foot;
    $data->rate=$req->rate;
    $data->advance=$req->advance;

    $data->thekedar_name=$req->thekedar_name;


    $data->save();

    return redirect("water_tank_bill_wood");

}
function tank_bill_get_wood(){

    $data= wood_work_bill_tank::all();
    if ($data->isEmpty()){
    return redirect('water_tank_bill_entry');

}else{
    return view('water_tank_bill_wood',['cols'=>$data]);

}}
static function cartItem_wood()
    {
        return wood_work_bill_tank::get('id')->count();

    }

// water tank  wood works
function tank_wood(Request $req)
{

    // $data= new wood_work_tank_steel;
    // $data->detail=$req->detail;
    // $data->total=$req->total;
    // $data->thekedar_name=$req->thekedar_name;

    // $data->date=$req->date;


    // $data->save();

    // return redirect("water_tank_categores");


    foreach($req->inc_id as $key=>$insert){
        $database = [
        'inc_id'=>$req->inc_id[$key],
        'detail'=>$req->detail[$key],
        'advance'=>$req->advance[$key],
        'store_name'=>$req->store_name[$key],
        'adaigi'=>$req->adaigi[$key],
        'rate'=>$req->rate[$key],
        'per_foot'=>$req->per_foot[$key],
        // 'muhala'=>$req->muhala[$key],

        'date'=>$req->date[$key],


        ];

        // return dd($database);
        DB::table('wood_work_tank_steels')->insert($database);
    }
    return redirect("water_tank_categores");

}
static function cartItem_wood_work()
{
    return wood_work_tank_steel::get('id')->count();

}
function tank_get_wood(){
    $data= wood_work_tank_steel::paginate(30);
     return view('water_tank_wood_work_list',['cols'=>$data]);
}
function water_tank_wood_work_search(Request $req)
{
    $data= wood_work_tank_steel::
    where('store_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('water_tank_wood_work_list_search',['cols'=>$data]);
}
//edit water tank wood works
function delete_water_wood($id){
    $data= wood_work_tank_steel::find($id);
    $data->delete();
    return redirect('water_tank_wood_work_list');
  }
  function showData_wood_water($id){
    $data= wood_work_tank_steel::find($id);
    return view('edit_water_wood_work_list',['data'=>$data]);
  }
  function update_water_wood(Request $req){
    $data=  wood_work_tank_steel::find($req->id);
    $data->detail=$req->detail;
    $data->store_name=$req->store_name;
    $data->advance=$req->advance;
    $data->adaigi=$req->adaigi;
    $data->rate=$req->rate;
    $data->per_foot=$req->per_foot;
    // $data->muhala=$req->muhala;



    $data->save();
    return redirect('water_tank_wood_work_list');
  }
//delete water bill wood

function delete_water_bill_wood($id){
    $data= wood_work_bill_tank::find($id);
    $data->delete();
    return redirect('water_tank_bill_wood');
  }
//delete water bill steel

function delete_steel_bill_tank($id){
    $data= steel_decorator_bill_tank::find($id);
    $data->delete();
    return redirect('water_tank_bill_steel');
  }

  //delete water bill thekedar

function delete_thekedar_bill_tank($id){
    $data= thekedar_bill_water_tank::find($id);
    $data->delete();
    return redirect('water_tank_bill_thekedar');
  }
  function tank_bill_painter(Request $req){
    $data= new tank_painter_bill;
    $data->painter_name=$req->painter_name;
    $data->date=$req->date;
    $data->day=$req->day;
    $data->kaam=$req->kaam;
    $data->rakbah=$req->rakbah;
    $data->per_foot=$req->per_foot;
    $data->save();
    return redirect('bill_tameer_steel_decorator');

}
 //tank marbel

 function marbel_tank(Request $req){

  foreach($req->inc_id as $key=>$insert){
      $database = [
      'inc_id'=>$req->inc_id[$key],
      'detail'=>$req->detail[$key],
      'store_name'=>$req->store_name[$key],
      'foot'=>$req->foot[$key],
      'amount'=>$req->amount[$key],
      'rate'=>$req->rate[$key],
      // 'muhala'=>$req->muhala[$key],
      'date'=>$req->date[$key],

      ];


  // return dd($database);
  DB::table('water_tank_marbels')->insert($database);
}
return redirect("water_tank_stock_categores");
}

function water_tank_marbel_get(){
  $data= water_tank_marbel::paginate(30);
   return view('water_stock_marbel_list',['cols'=>$data]);
}
function water_tank_marbel_search(Request $req)
{
    $data= water_tank_marbel::
    where('store_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
    ->get();
    return view('water_stock_marbel_list_search',['cols'=>$data]);
}
//edit water marbel
function delete_water_marbel($id){
  $data= water_tank_marbel::find($id);
  $data->delete();
  return redirect('water_stock_marbel_list');
}
function showData_tank_marbel($id){
  $data= water_tank_marbel::find($id);
  return view('edit_stock_tank_marbel',['data'=>$data]);
}
function update_tank_marbel(Request $req){
  $data= water_tank_marbel::find($req->id);
  $data->store_name=$req->store_name;
  $data->rate=$req->rate;
  $data->detail=$req->detail;
  $data->amount=$req->amount;
  $data->foot=$req->foot;
  $data->amount=$req->amount;

  $data->save();
  return redirect('water_stock_marbel_list');

}

}
