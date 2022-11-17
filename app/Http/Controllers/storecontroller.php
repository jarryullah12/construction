<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\store;
use App\Models\store_nasir;
use App\Models\store_shift;
use App\Models\daftr_store;
use App\Models\quater_store;
use App\Models\quater_stores_tameer;
use Session;
use Validator;
use Illuminate\Support\Facades\DB;


class storecontroller extends Controller
{
    //
    function store_saman(Request $req){


 
      
        $data= new store;
        $data->ishya_name=$req->ishya_name;
        $data->saman_type=$req->saman_type;
        $data->detail=$req->detail;
        $data->amount=$req->amount;
        $data->maqam=$req->maqam;
        $data->naqas=$req->naqas;
        $data->rate=$req->rate;

        $data->date=$req->date;

        $data->save();


        return view("store_categores",$data);
    }

     //store daftr

     function store_daftr(Request $req){

        $data= new daftr_store;

        $data->ishya_name=$req->ishya_name;
        $data->saman_type=$req->saman_type;
        $data->detail=$req->detail;
        $data->detail_shift=$req->detail_shift;

        // $data->remain_amount=$req->remain_amount;
        $data->amount=$req->amount;
        $data->maqam=$req->maqam;
        $data->naqas=$req->naqas;
        $data->rate=$req->rate;
        $data->date=$req->date;
        $data->ext_naqas=$req->ext_naqas;
        $data->ext_amount=$req->ext_amount;
        $data->save();

        return view("store_categores");

    }
    function daftr_list(){
        $data = daftr_store::paginate(30);
        return view('daftr_store_list',['cols'=>$data]);
      }
      function daftr_list_search(Request $req)
    {
        $data= daftr_store::
        where('ishya_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('daftr_store_list_search',['cols'=>$data]);
    }
    function delete_daftr_store($id){
        $data= daftr_store::find($id);
        $data->delete();
        return redirect('daftr_store_list');
      }
    //store quater tameer
    function store_quater_tameer(Request $req){

        $data= new quater_stores_tameer;
        $data->ishya_name=$req->ishya_name;
        $data->saman_type=$req->saman_type;
        $data->detail=$req->detail;
        $data->detail_shift=$req->detail_shift;

        // $data->remain_amount=$req->remain_amount;
        $data->amount=$req->amount;
        $data->maqam=$req->maqam;
        $data->naqas=$req->naqas;
        $data->ext_naqas=$req->ext_naqas;
        $data->ext_amount=$req->ext_amount;

        $data->rate=$req->rate;

        $data->date=$req->date;

        $data->save();

        return view("store_categores",$data);

    }
    function quater_tameer_list_store(){
        $data = quater_stores_tameer::paginate(30);
        return view('quater_tameer_store_list',['cols'=>$data]);
      }
      function delete_tameer_store($id){
        $data= quater_stores_tameer::find($id);
        $data->delete();
        return redirect('quater_tameer_store_list');
      }
      function quater_tameer_store_search(Request $req)
      {
          $data= quater_stores_tameer::
          where('ishya_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
          ->get();
          return view('quater_tameer_store_list_search',['cols'=>$data]);
      }
    function store_quater(Request $req){

        $data= new quater_store;
        $data->ishya_name=$req->ishya_name;
        $data->saman_type=$req->saman_type;
        $data->detail=$req->detail;
        $data->detail_shift=$req->detail_shift;

        // $data->remain_amount=$req->remain_amount;
        $data->amount=$req->amount;
        $data->maqam=$req->maqam;
        $data->naqas=$req->naqas;
        $data->rate=$req->rate;
        $data->ext_naqas=$req->ext_naqas;
        $data->ext_amount=$req->ext_amount;
        $data->date=$req->date;

        $data->save();

        return view("store_categores",$data);

    }

    function quater_list(){
        $data = quater_store::paginate(30);
        return view('quater_store_list',['cols'=>$data]);
      }
      function quater_store_search(Request $req)
    {
        $data= quater_store::
        where('ishya_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Asc")
        ->get();
        return view('quater_store_list_search',['cols'=>$data]);
    }
    function delete_qtr_store($id){
        $data= quater_store::find($id);
        $data->delete();
        return redirect('quater_store_list');
      }

// store 150



    //store nasir edit
    function show_store(){
        $data = store_nasir::all();
        return view('store_nasir_list',['cols'=>$data]);
      }
      function delete_store($id){
        $data= store_nasir::find($id);
        $data->delete();
        return redirect('store_nasir_list');
      }

      function showData_store($id){
        $data= store_nasir::find($id);
        return view('edit_store_entry',['data'=>$data]);
      }
      function update_store(Request $req){
        $data = store_nasir::find($req->id);

        $data->ishya_name=$req->ishya_name;
        $data->saman_type=$req->saman_type;
        $data->maqam=$req->maqam;
        $data->detail=$req->detail;
        // $data->remain_amount=$req->remain_amount;
        $data->amount=$req->amount;
        $data->naqas=$req->naqas;
        $data->total=$req->total;

        $data->save();
        return redirect('store_nasir_list');
      }
      //store tehreeq edit
      function store_search(Request $req)
      {
          $data= store::
          where('ishya_name', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Desc")
          ->get();
          return view('store_list_search',['cols'=>$data]);
      }
      function store_saman_search(Request $req)
      {
          $data= store::
          where('saman_type', 'LIKE' ,'%'.$req->input('query').'%')->orderBy("date","Desc")->orderBy("maqam","Desc")
          ->get();
          return view('store_list_saman_search',['cols'=>$data]);
      }
      // function store_saman_search(Request $req)
      // {
        
      //   $data = store::select("id", "saman_type", "maqam")
      //                  ->orWhere(DB::raw("concat(saman_type, ' ', maqam)"), 'LIKE', "%".$req->input('query')."%")
      //                  ->get();
      //     return view('store_list_saman_search',['cols'=>$data]);
      // }

      function show_tehreeq(){
      
    
        $data= store::paginate(30);
        return view('store_list',['cols'=>$data]);
      }

      function delete_tehreeq($id){
        $data= store::find($id);
        $data->delete();
        return redirect('store_list');
      }

      function showData_tehreeq($id){
        $data= store::find($id);
        return view('edit_store_tehreeq_entry',['data'=>$data]);
      }
      function update_tehreeq(Request $req){
        $data = store::find($req->id);

        $data->ishya_name=$req->ishya_name;
        $data->saman_type=$req->saman_type;
        $data->maqam=$req->maqam;
        $data->detail=$req->detail;
        // $data->remain_amount=$req->remain_amount;
        $data->amount=$req->amount;
        $data->naqas=$req->naqas;
        $data->total=$req->total;

        $data->save();
        return redirect('store_list');
      }

      
      // function showDetail_store($id){
      //   $data= store::find($id);
      //   return view('store_list_detail',['col'=>$data]);
      // }
      function showDetail_store(){
        $data = store::paginate(30);
        return view('store_list_detail',['cols'=>$data]);
      }
//store all update



  function store_delete_all($id){
    $data= store::find($id);
    $data->delete();
    return redirect('store_list');
  }

  function showData_store_all_data($id){
    $data= store::find($id);
    return view('edit_store',['data'=>$data]);
  }
  function update_store_all_data(Request $req){
    $data = store::find($req->id);

    $data->ishya_name=$req->ishya_name;
    $data->saman_type=$req->saman_type;
    $data->maqam=$req->maqam;
    $data->detail=$req->detail;
    $data->amount=$req->amount;
    $data->naqas=$req->naqas;
    $data->rate=$req->rate;

    $data->save();
    return redirect('store_list');
  }





}
