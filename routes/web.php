<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\quater;
use App\Http\Controllers\daftr;
use App\Http\Controllers\ishya;
use App\Http\Controllers\quater_tameer_controller;
use App\Http\Controllers\storecontroller;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/signout', function () {
    Session::forget('user');
    return redirect('/signin');
});

Route::view("/register","register");
Route::view("/signin","signin");
Route::post("register",[UserController::class,'register']);
Route::post("signin",[UserController::class,'login']);

Route::get('profile_list',[UserController::class,'show']);
Route::get('delete/{id}',[UserController::class,'delete']);
Route::get('profile/{id}',[UserController::class,'showData']);
Route::post('profile',[UserController::class,'update']);


Route::view("/amad_quater_letter_entry","amad_quater_letter_entry");
Route::post("amad_quater_letter_list",[quater::class,'quater']);
Route::get('amad_quater_letter_list',[quater::class,'amad_letter_list']);


Route::get('amad_quater_letter_list',[quater::class,'show_quater_letter']);
Route::get('amad_quater_letter_delete/{id}',[quater::class,'delete_quater_letter']);
Route::get('amad_quater_letter_update/{id}',[quater::class,'showData_quater_letter']);
Route::post('amad_quater_letter_update',[quater::class,'update_quater_letter']);

Route::view("search_amad_quater_letter","search_amad_quater_letter");
Route::get("search_amad_quater_letter/",[quater::class,'search_amad_letter']);


Route::view("/quater","quater");


Route::get('amad_daftr_letter_list',[daftr::class,'show_daftr_letter']);
Route::get('amad_daftr_delete/{id}',[daftr::class,'delete_daftr_letter']);
Route::get('amad_daftr_letter_update/{id}',[daftr::class,'showData_daftr_letter']);
Route::post('amad_daftr_letter_update',[daftr::class,'update_daftr_letter']);

Route::view("/amad_daftr_letter_entry","amad_daftr_letter_entry");

Route::get("amad_daftr_letter_list/",[qauter::class,'search_letter']);




//add quater
Route::view("/add_quater","add_quater");
Route::post('add_quater_nasar',[quater::class,'add_nasar_quater']);


Route::view("/add_quater","add_quater");
Route::post('add_quater_waqfeen',[quater::class,'add_waqfeen_quater']);
Route::view("/add_quater","add_quater");
Route::post('add_quater_factory',[quater::class,'add_factory_quater']);
Route::view("/add_quater","add_quater");
Route::post('add_quater_fatuh',[quater::class,'add_fatuh_quater']);

Route::view("/add_quater","add_quater");
Route::post('add_quater_sadar',[quater::class,'add_new_quater']);
//add daftr
Route::view("/add_daftr","add_daftr");
Route::post('add_daftr',[daftr::class,'add_new_daftr']);



Route::post("amad_daftr_letter_list",[daftr::class,'daftr']);
Route::get('amad_daftr_letter_list',[daftr::class,'daftr_letter']);
Route::view("/daftr","daftr");
Route::get('daftr',[daftr::class,'daftr_letter_count']);
//daftr store saman
Route::view("/stock_amad_entry_daftr","stock_amad_entry_daftr");
Route::post("stock_store_amad_daftr_entry",[daftr::class,'daftr_store_saman']);
Route::get('stock_store_amad_daftr_entry',[daftr::class,'store_saman_daftr_no']);
Route::get('stock_carpenter_amad_daftr_entry',[daftr::class,'carpenter_saman_daftr_no']);
Route::get('stock_mistri_amad_daftr_entry',[daftr::class,'mistri_saman_daftr_no']);
Route::get('stock_marbel_amad_daftr_entry',[daftr::class,'marbel_saman_daftr_no']);
Route::get('stock_cable_amad_daftr_entry',[daftr::class,'cable_saman_daftr_no']);
Route::get('daftr_paint_yomiay_entry',[daftr::class,'daft_paint_yomiya_daftr_no']);
Route::get('stock_carpenter_yomiya_daftr_entry',[daftr::class,'daftr_carpenter_yomiya_daftr_no']);


Route::post('stock_painter_amad_daftr_entry',[daftr::class,'daftr_painter']);
Route::get('stock_painter_amad_daftr_entry',[daftr::class,'painter_saman_daftr_no']);

// Route::get('amad_daftr_letter_list',[daftr::class,'daftr_letter']);

//daftr store saman mistri
Route::view("/stock_amad_entry_daftr_mistri","stock_amad_entry_daftr_mistri");
Route::post("stock_mistri_amad_daftr_entry",[daftr::class,'daftr_store_saman_mistri']);
// Route::get('amad_daftr_letter_list',[daftr::class,'daftr_letter']);
//daftr edit
Route::get('stock_store_daftr_list',[daftr::class,'show_store_daftr']);
Route::get('daftr_store_delete/{id}',[daftr::class,'delete_store_daftr']);
Route::get('edit_stock_amad_entry_daftr/{id}',[daftr::class,'showData_store_daftr']);
Route::post('edit_stock_amad_entry_daftr',[daftr::class,'update_store_daftr']);



//daftr edit mistri

Route::get('stock_store_daftr_mistri_list',[daftr::class,'show_store_mistri']);
Route::get('daftr_mistri_delete/{id}',[daftr::class,'delete_store_mistri']);
Route::get('edit_stock_amad_entry_daftr_mistri/{id}',[daftr::class,'showData_store_mistri']);
Route::post('edit_stock_amad_entry_daftr_mistri',[daftr::class,'update_store_mistri']);
//daftr list
Route::get('stock_store_daftr_list',[daftr::class,'store_daftr_list']);

Route::view("/stock_store_daftr_list_search","stock_store_daftr_list_search");
Route::get('stock_store_daftr_list_search',[daftr::class,'stock_daftr_list_search']);

//daftr mistri list
Route::get('stock_store_daftr_mistri_list',[daftr::class,'store_daftr_mistri_list']);
Route::view("/stock_store_daftr_mistri_list_search","stock_store_daftr_mistri_list_search");
Route::get('stock_store_daftr_mistri_list_search',[daftr::class,'stock_daftr_mistri_search']);

//daftr amad entry
Route::view("/amad_daftr_entry","amad_daftr_entry");
Route::post('amad_daftr_entry',[daftr::class,'daftr_entry']);
Route::get('daftr_list',[daftr::class,'daftr_list']);
//edit amad daftr
Route::get('daftr_list',[daftr::class,'show_amad_daftr']);
Route::get('daftr_edit_delete/{id}',[daftr::class,'delete_amad_daftr']);
Route::get('edit_amad_daftr_entry/{id}',[daftr::class,'showData_amad_daftr']);
Route::post('edit_amad_daftr_entry',[daftr::class,'update_amad_daftr']);
//
//edit quater entry darul sadar
Route::get('stock_store_saman_list',[quater::class,'show_store_sadar']);
Route::get('sadar_delete/{id}',[quater::class,'delete_store_sadar']);
Route::get('edit_stock_amad_quater_entry_darul_sadar/{id}',[quater::class,'showData_store_sadar']);
Route::post('edit_stock_amad_quater_entry_darul_sadar',[quater::class,'update_store_sadar']);

Route::view("/stock_store_saman_list_search","stock_store_saman_list_search");
Route::get("stock_store_saman_list_search/",[quater::class,'stock_saman_sadar_search']);
//quater entry darul sadar mistri
Route::view('/stock_amad_quater_entry_darul_sadar','stock_amad_quater_entry_darul_sadar');
Route::post('stock_mistri_amad_quater_entry_darul_sadar',[quater::class,'mistri_saman']);
Route::get('stock_mistri_list',[quater::class,'mistri_saman_list']);



Route::view('/stock_store_quater_entry_darul_sadar','stock_store_quater_entry_darul_sadar');
Route::post("stock_store_quater_entry_darul_sadar",[quater::class,'store_saman_darul_sadar']);

Route::view("/stock_mistri_list_search","stock_mistri_list_search");
Route::get("stock_mistri_list_search",[quater::class,'stock_mistri_sadar_search']);
//edit quater entry darul nasar
Route::get('stock_store_saman_list_nasar',[quater::class,'show_store_nasar']);
Route::get('nasar_delete/{id}',[quater::class,'delete_store_nasar']);
Route::get('edit_stock_amad_quater_entry_darul_nasar/{id}',[quater::class,'showData_store_nasar']);
Route::post('edit_stock_amad_quater_entry_darul_nasar',[quater::class,'update_store_nasar']);

//edit quater entry darul sadar mistri
Route::get('stock_store_saman_list_mistri',[quater::class,'show_store_sadar_mistri']);
Route::get('sadar_mistri_delete/{id}',[quater::class,'delete_store_sadar_mistri']);
Route::get('edit_stock_amad_quater_entry_darul_sadar_mistri/{id}',[quater::class,'showData_store_sadar_mistri']);
Route::post('edit_stock_amad_quater_entry_darul_sadar_mistri',[quater::class,'update_store_sadar_mistri']);
//edit quater entry darul nasar mistri
Route::get('nasar_stock_mistri_list',[quater::class,'show_store_nasar_mistri']);
Route::get('nasar_mistri_delete/{id}',[quater::class,'delete_store_nasar_mistri']);
Route::get('edit_stock_amad_quater_entry_darul_nasar_mistri/{id}',[quater::class,'showData_store_nasar_mistri']);
Route::post('edit_stock_amad_quater_entry_darul_nasar_mistri',[quater::class,'update_store_nasar_mistri']);
//edit quater entry factory area
Route::get('factory_stock_store_saman_list',[quater::class,'show_store_factory']);
Route::get('factory_delete/{id}',[quater::class,'delete_store_factory']);
Route::get('edit_stock_amad_quater_entry_factory_area/{id}',[quater::class,'showData_store_factory']);
Route::post('edit_stock_amad_quater_entry_factory_area',[quater::class,'update_store_factory']);
//edit quater entry darul waqfeen
Route::get('waqfeen_stock_store_saman_list',[quater::class,'show_store_waqfeen']);
Route::get('waqfeen_delete/{id}',[quater::class,'delete_store_waqfeen']);
Route::get('edit_stock_amad_quater_entry_darul_waqfeen/{id}',[quater::class,'showData_store_waqfeen']);
Route::post('edit_stock_amad_quater_entry_darul_waqfeen',[quater::class,'update_store_waqfeen']);
//edit quater entry darul fatuh
Route::get('fatuh_stock_store_saman_list',[quater::class,'show_store_fatuh']);
Route::get('fatuh_delete/{id}',[quater::class,'delete_store_fatuh']);
Route::get('edit_stock_amad_quater_entry_darul_fatuh/{id}',[quater::class,'showData_store_fatuh']);
Route::post('edit_stock_amad_quater_entry_darul_fatuh',[quater::class,'update_store_fatuh']);
//edit quater entry mistri
Route::get('factory_stock_mistri_list',[quater::class,'show_store_factory_mistri']);
Route::get('factory_mistri_delete/{id}',[quater::class,'delete_store_factory_mistri']);
Route::get('edit_stock_amad_quater_entry_factory_area_mistri/{id}',[quater::class,'showData_store_factory_mistri']);
Route::post('edit_stock_amad_quater_entry_factory_area_mistri',[quater::class,'update_store_factory_mistri']);
// edit quater entry darul waqfeen mistru
Route::get('waqfeen_stock_mistri_list',[quater::class,'show_store_waqfeen_mistri']);
Route::get('waqfeen_mistri_delete/{id}',[quater::class,'delete_store_waqfeen_mistri']);
Route::get('edit_stock_amad_quater_entry_darul_waqfeen_mistri/{id}',[quater::class,'showData_store_waqfeen_mistri']);
Route::post('edit_stock_amad_quater_entry_darul_waqfeen_mistri',[quater::class,'update_store_waqfeen_mistri']);

//quater entry darul sadar
//quater entry darul fatuh post
// Route::view('/stock_amad_quater_entry_darul_fatuh','stock_amad_quater_entry_darul_fatuh');
// Route::post("stock_amad_quater_entry_darul_fatuh",[quater::class,'store_saman_fatuh']);
Route::view('/stock_store_amad_quater_entry_darul_fatuh','stock_store_amad_quater_entry_darul_fatuh');
Route::post("stock_store_amad_quater_entry_darul_fatuh",[quater::class,'store_saman_fatuh_post']);
Route::get('stock_store_saman_list_fatuh',[quater::class,'store_saman_list_fatuh']);

Route::view("/stock_store_saman_list_fatuh_search","stock_store_saman_list_fatuh_search");
Route::get('stock_store_saman_list_fatuh_search',[quater::class,'stock_saman_list_fatuh_search']);

// edit quater entry darul fatuh
Route::get('stock_store_saman_list_fatuh',[quater::class,'show_saman_fatuh_edit']);
Route::get('fatuh_saman_delete/{id}',[quater::class,'delete_saman_fatuh_edit']);
Route::get('edit_stock_amad_quater_entry_darul_fatuh/{id}',[quater::class,'showData_saman_fatuh_edit']);
Route::post('edit_stock_amad_quater_entry_darul_fatuh',[quater::class,'update_saman_fatuh_edit']);
//entry fatuh mistri
Route::view("/stock_amad_quater_entry_darul_fatuh","stock_amad_quater_entry_darul_fatuh");
Route::get('stock_store_amad_quater_entry_darul_fatuh',[quater::class,'store_saman_fatuh']);
Route::post("stock_mistri_amad_quater_entry_darul_fatuh",[quater::class,'mistri_fatuh']);
Route::get('stock_store_saman_mistri_list_fatuh',[quater::class,'fatuh_mistri_list']);
Route::get('stock_mistri_amad_quater_entry_darul_fatuh',[quater::class,'store_mistri_fatuh']);


Route::get('stock_carpenter_amad_quater_entry_darul_fatuh',[quater::class,'carpenter_saman_fatuh']);
Route::get('stock_cable_amad_quater_entry_darul_fatuh',[quater::class,'cable_saman_fatuh']);
Route::get('stock_painter_amad_quater_entry_darul_fatuh',[quater::class,'painter_saman_fatuh']);


// Route::get('stock_store_saman_mistri_list_fatuh',[quater::class,'fatuh_mistri_list']);
// edit quater entry darul fatuh mistri
Route::get('stock_store_saman_mistri_list_fatuh',[quater::class,'show_saman_fatuh_mistri']);
Route::get('fatuh_mistri_delete/{id}',[quater::class,'delete_saman_fatuh_mistri']);
Route::get('edit_stock_amad_quater_entry_darul_fatuh_mistri/{id}',[quater::class,'showData_saman_fatuh_mistri']);
Route::post('edit_stock_amad_quater_entry_darul_fatuh_mistri',[quater::class,'update_saman_fatuh_mistri']);

Route::view("/stock_store_saman_mistri_list_fatuh_search","stock_store_saman_mistri_list_fatuh_search");
Route::get('stock_store_saman_mistri_list_fatuh_search',[quater::class,'stock_saman_mistri_list_fatuh_search']);

//quater factroy area view
Route::view("/stock_amad_quater_entry_factory_area","stock_amad_quater_entry_factory_area");
//quater darul sadar view
Route::view("/stock_amad_quater_entry_darul_sadar","stock_amad_quater_entry_darul_sadar");
//quater darul yaman
Route::view("/stock_store_amad_quater_entry_darul_yaman","stock_store_amad_quater_entry_darul_yaman");
Route::post("add_yaman_quater",[quater::class,'add_quater_yaman']);
Route::post("stock_store_amad_quater_entry_darul_yaman",[quater::class,'store_saman_darul_yaman_post']);
Route::post("stock_mistri_amad_quater_entry_darul_yaman",[quater::class,'mistri_yaman']);
Route::get('stock_store_amad_quater_entry_darul_yaman',[quater::class,'quater_no_yaman']);
Route::get('stock_carpenter_amad_quater_entry_darul_yaman',[quater::class,'carpenter_quater_no_yaman']);
Route::get('stock_mistri_amad_quater_entry_darul_yaman',[quater::class,'mistri_quater_no_yaman']);
Route::get('stock_cable_amad_quater_entry_darul_yaman',[quater::class,'cable_quater_no_yaman']);
Route::get('stock_painter_amad_quater_entry_darul_yaman',[quater::class,'painter_quater_no_yaman']);


Route::get('stock_store_saman_list_yaman',[quater::class,'saman_list_yaman']);
Route::get('stock_store_saman_mistri_list_yaman',[quater::class,'saman_list_mistri_yaman']);
Route::get('stock_store_saman_list_yaman_search',[quater::class,'saman_list_yaman_search']);
//quater darul yaman edit
Route::get('yaman_saman_delete/{id}',[quater::class,'delete_yaman']);
Route::get('edit_stock_amad_quater_entry_darul_yaman/{id}',[quater::class,'showData_saman_yaman_edit']);
Route::post('edit_stock_amad_quater_entry_darul_yaman',[quater::class,'update_saman_yaman_edit']);
Route::get('stock_store_saman_list_yaman_search',[quater::class,'saman_list_yaman_search']);
Route::get('stock_store_saman_mistri_list_yaman_search',[quater::class,'mistri_list_yaman_search']);
//quater darul yaman mistri edit
Route::get('yaman_mistri_delete/{id}',[quater::class,'delete_yama_mistri']);
Route::get('edit_stock_amad_quater_entry_darul_yaman_mistri/{id}',[quater::class,'showData_yaman_mistri_edit']);
Route::post('edit_stock_amad_quater_entry_darul_yaman_mistri',[quater::class,'update_yaman_mistri_edit']);
//quater darul sadar view
//quater darul nasar get


Route::view("/stock_amad_quater_entry_darul_waqfeen","stock_amad_quater_entry_darul_waqfeen");
Route::post("stock_mistri_amad_quater_entry_darul_waqfeen",[quater::class,'mistri_waqfeen_mistri']);
Route::view("/stock_store_amad_quater_entry_darul_waqfeen","stock_store_amad_quater_entry_darul_waqfeen");
Route::post("stock_store_amad_quater_entry_darul_waqfeen",[quater::class,'store_saman_waqfeen']);
Route::get('stock_store_amad_quater_entry_darul_waqfeen',[quater::class,'store_saman_waqfeen_quater']);
Route::get('stock_marbel_amad_quater_entry_darul_waqfeen',[quater::class,'marbel_saman_waqfeen_quater']);
Route::get('stock_carpenter_amad_quater_entry_darul_waqfeen',[quater::class,'carpenter_saman_waqfeen_quater']);
Route::get('stock_mistri_amad_quater_entry_darul_waqfeen',[quater::class,'mistri_saman_waqfeen_quater']);
Route::get('stock_cable_amad_quater_entry_darul_waqfeen',[quater::class,'cable_saman_waqfeen_quater']);
Route::get('stock_painter_amad_quater_entry_darul_waqfeen',[quater::class,'painter_saman_waqfeen_quater']);



Route::view("/stock_store_amad_quater_entry_factory_area","stock_store_amad_quater_entry_factory_area");
Route::post("stock_store_amad_quater_entry_factory_area",[quater::class,'store_saman_factory']);
Route::view("/stock_amad_quater_entry_factory_area","stock_amad_quater_entry_factory_area");
Route::post("stock_mistri_amad_quater_entry_factory_area",[quater::class,'factory_area_mistri']);
Route::get('stock_store_amad_quater_entry_factory_area',[quater::class,'store_saman_factory_quater']);
Route::get('stock_marbel_amad_quater_entry_factory_area',[quater::class,'marbel_saman_factory_quater']);
Route::get('stock_mistri_amad_quater_entry_factory_area',[quater::class,'mistri_saman_factory_quater']);
Route::get('stock_cable_amad_quater_entry_factory_area',[quater::class,'cable_saman_factory_quater']);
Route::get('stock_painter_amad_quater_entry_factory_area',[quater::class,'painter_saman_factory_quater']);

Route::view("/factory_stock_store_saman_list_search","factory_stock_store_saman_list_search");
Route::get('factory_stock_store_saman_list_search/',[quater::class,'factory_store_saman_list_search']);


Route::view("/stock_amad_quater_entry_darul_nasar","stock_amad_quater_entry_darul_nasar");
Route::post("stock_mistri_amad_quater_entry_darul_nasar",[quater::class,'mistri_nasar']);
Route::view("/stock_store_amad_quater_entry_darul_nasar","stock_store_amad_quater_entry_darul_nasar");
Route::post('stock_store_amad_quater_entry_darul_nasar',[quater::class,'store_saman_nasar']);
Route::get('stock_store_amad_quater_entry_darul_nasar',[quater::class,'store_saman_nasar_quater_no']);
Route::get('stock_marbel_amad_quater_entry_darul_nasar',[quater::class,'marbel_saman_nasar_quater_no']);
Route::get('stock_mistri_amad_quater_entry_darul_nasar',[quater::class,'mistri_saman_nasar_quater_no']);
Route::get('stock_cable_amad_quater_entry_darul_nasar',[quater::class,'cable_saman_nasar_quater_no']);


Route::get('stock_amad_quater_entry_darul_nasar',[quater::class,'store_saman_nasar_quater_mistri']);
Route::get('quater_nasar_paint_yomiay_entry',[quater::class,'paint_yomiya_saman_nasar']);
Route::get('quater_nasar_steel_entry',[quater::class,'steel_saman_nasar']);

Route::get('quater_waqfeen_paint_yomiya',[quater::class,'paint_yomiya_saman_waqfeen']);


//ishya rate
Route::view("/ishya_rate","ishya_rate");
Route::post("ishya_rate",[ishya::class,'ishya_saman']);
Route::get('ishya_rate_list',[ishya::class,'ishya_list']);
Route::view("/ishya_rate_list_search","ishya_rate_list_search");
Route::get('ishya_rate_list_search',[ishya::class,'ishya_list_search']);
//edit ishya rate
Route::get('ishya_rate_list',[ishya::class,'show_ishya']);
Route::get('ishya_delete/{id}',[ishya::class,'delete_ishya']);
Route::get('edit_ishya_rate/{id}',[ishya::class,'showData_ishya']);
Route::post('edit_ishya_rate',[ishya::class,'update_ishya']);

//ishya stock water tenk
Route::view("/amad_water_tank_store","amad_water_tank_store");
Route::post("amad_water_tank_store",[ishya::class,'ishya_tank']);
Route::get('ishya_tank_list',[ishya::class,'ishya_list_tank']);
Route::view("/ishya_tank_list_search","ishya_tank_list_search");
Route::get('ishya_tank_list_search',[ishya::class,'ishya_tank_search']);

//edit //ishya stock water tenk
Route::get('ishya_tank_list',[ishya::class,'show_ishya_edit']);
Route::get('ishya_edit_delete/{id}',[ishya::class,'delete_ishya_edit']);
Route::get('edit_ishya_tank/{id}',[ishya::class,'showData_ishya_edit']);
Route::post('edit_ishya_tank',[ishya::class,'update_ishya_edit']);
//thekedar stock water tenk
Route::view("/amad_water_tank_thekedar","amad_water_tank_thekedar");
Route::post("amad_water_tank_thekedar",[ishya::class,'thekedar_tank']);
Route::get('thekedar_tank_list',[ishya::class,'thekedar_list_tank']);
Route::view("/thekedar_tank_list_search","thekedar_tank_list_search");
Route::get('thekedar_tanks_list_search',[ishya::class,'thekedar_tank_search']);

//steel stock water tenk
Route::view("/amad_water_tank_steel","amad_water_tank_steel");
Route::post("amad_water_tank_steel",[ishya::class,'steel_tank']);
Route::get('steel_tank_list',[ishya::class,'steel_tank_list']);
Route::view("/steel_tank_list_search","steel_tank_list_search");
Route::get('steel_tank_list_search',[ishya::class,'steel_tank_search']);

//edit //thekedar stock water tenk
Route::get('thekedar_tank_list',[ishya::class,'show_thekedar']);
Route::get('thekedar_delete/{id}',[ishya::class,'delete_thekedar']);
Route::get('edit_thekedar_tank/{id}',[ishya::class,'showData_thekedar']);
Route::post('edit_thekedar_tank',[ishya::class,'update_thekedar']);

//edit //steel stock water tenk
Route::get('steel_tank_list',[ishya::class,'show_steel']);
Route::get('steel_delete/{id}',[ishya::class,'delete_steel']);
Route::get('edit_steel_tank/{id}',[ishya::class,'showData_steel']);
Route::post('edit_steel_tank',[ishya::class,'update_steel']);



//daftr store
Route::view("/store_list","store_list");
Route::post("store_list_daftr",[storecontroller::class,'store_daftr']);
Route::get('daftr_store_list',[storecontroller::class,'daftr_list']);
Route::view("/daftr_store_list_search","daftr_store_list_search");
Route::get('daftr_store_delete/{id}',[storecontroller::class,'delete_daftr_store']);

Route::get('daftr_store_list_search',[storecontroller::class,'daftr_list_search']);

Route::view("/amad_daftr_letter_list_search","amad_daftr_letter_list_search");
Route::get('amad_daftr_letter_list_search',[daftr::class,'amad_daftr_letter_search']);

Route::view("/daftr_list_search","daftr_list_search");
Route::get('daftr_list_search',[daftr::class,'daftr_search']);
//quater store tameer
Route::view("/store_list_tameer_quater","store_list_tameer_quater");
Route::post("store_list_tameer_quater",[storecontroller::class,'store_quater_tameer']);
Route::view("/quater_tameer_store_list","quater_tameer_store_list");
Route::get('quater_tameer_store_list',[storecontroller::class,'quater_tameer_list_store']);
Route::get('quater_tameer_store_delete/{id}',[storecontroller::class,'delete_tameer_store']);

Route::view("/quater_tameer_store_list_search","quater_tameer_store_list_search");
Route::get('quater_tameer_store_list_search',[storecontroller::class,'quater_tameer_store_search']);
//quater store
Route::view("/store_list","store_list");
Route::post("store_list_quater",[storecontroller::class,'store_quater']);
Route::get('quater_store_list',[storecontroller::class,'quater_list']);
Route::get('quater_store_delete/{id}',[storecontroller::class,'delete_qtr_store']);

Route::view("/quater_store_list_search","quater_store_list_search");
Route::get('quater_store_list_search',[storecontroller::class,'quater_store_search']);
//store kabar tehreeq
Route::view("/store","store");
Route::post("store",[storecontroller::class,'store_saman']);
Route::get('store_list',[storecontroller::class,'store_kabar_list']);
Route::view("/store_categores","store_categores");


//edit store tehreeq
Route::get('tehreeq_delete/{id}',[storecontroller::class,'delete_tehreeq']);
Route::get('edit_store_tehreeq_entry/{id}',[storecontroller::class,'showData_tehreeq']);
Route::post('edit_store_tehreeq_entry',[storecontroller::class,'update_tehreeq']);
Route::get('store_list',[storecontroller::class,'show_tehreeq']);

Route::view("/store_list_search","store_list_search");
Route::get('store_list_search',[storecontroller::class,'store_search']);

Route::view("/store_list_saman_search","store_list_saman_search");
Route::get('store_list_saman_search',[storecontroller::class,'store_saman_search']);
//
//edit store all data
Route::get('store_all_delete/{id}',[storecontroller::class,'store_delete_all']);
Route::get('edit_store/{id}',[storecontroller::class,'showData_store_all_data']);
Route::post('edit_store',[storecontroller::class,'update_store_all_data']);
//
Route::get('stock_store_amad_quater_entry_darul_sadar',[quater::class,'store_saman']);
Route::get('quater_sadar_steel_entry',[quater::class,'steel_sadar_quater_no']);
Route::get('quater_waqfeen_steel_entry',[quater::class,'steel_waqfeen_quater_no']);
Route::get('quater_fatuh_steel_entry',[quater::class,'steel_fatuh_quater_no']);
Route::get('quater_factory_steel_entry',[quater::class,'steel_factory_quater_no']);
Route::get('quater_yaman_steel_entry',[quater::class,'steel_yaman_quater_no']);
Route::get('daftr_steel_entry',[daftr::class,'steel_daftr_no']);
Route::get('daftr_chair_entry',[daftr::class,'chair_daftr_no']);

//daftr bill chair
Route::post('daftr_bill_chair_entry',[daftr::class,'chair_daftr_bill_bunti']);
Route::get('daftr_bill_chair_list',[daftr::class,'chair_bill_daftr_no']);
Route::get('delete_bill_daftr_chair/{id}',[daftr::class,'delete_bill_daftr_chair']);



//edit chair daftr
Route::get('delete_daftr_chair/{id}',[daftr::class,'delete_daftr_chair']);
Route::get('edit_daftr_chair_entry/{id}',[daftr::class,'showData_daftr_chair']);
Route::post('edit_daftr_chair_entry',[daftr::class,'update_daftr_chair']);

//electric water tank
Route::view("/amad_water_tank_electric","amad_water_tank_electric");
Route::post('amad_water_tank_electric',[ishya::class,'electric_tank']);
Route::get('water_tank_electric_list',[ishya::class,'tank_electric_list']);
Route::get('water_tank_electric_list_search/',[ishya::class,'tank_electric_search']);

//electric tameer quater
Route::view("/amad_tameer_quater_electric","amad_tameer_quater_electric");
Route::post('amad_tameer_quater_electric',[quater_tameer_controller::class,'electric_tameer']);
Route::get('tameer_quater_electric_list',[quater_tameer_controller::class,'tameer_electric_list']);
Route::get('tameer_quater_electric_list_search/',[quater_tameer_controller::class,'tameer_electric_search']);
//electric water tank edit

Route::get('electric_tank_delete/{id}',[ishya::class,'delete_electric_edit_tank']);
Route::get('edit_water_tank_electric/{id}',[ishya::class,'showData_electric_edit']);
Route::post('edit_water_tank_electric',[ishya::class,'update_electric_edit']);
//electric tameer quater edit

Route::get('electric_tameer_delete/{id}',[quater_tameer_controller::class,'delete_electric_edit_tameer']);
Route::get('edit_tameer_quater_electric/{id}',[quater_tameer_controller::class,'showData_electric_edit_tameer']);
Route::post('edit_tameer_quater_electric',[quater_tameer_controller::class,'update_electric_edit_tameer']);

Route::get('stock_marbel_amad_quater_entry_darul_sadar',[quater::class,'marbel_saman']);
Route::get('stock_carpenter_amad_quater_entry_darul_sadar',[quater::class,'carpenter_saman']);
Route::get('stock_carpenter_yomiya_quater_entry_darul_sadar',[quater::class,'carpenter_saman_yomiya']);
Route::get('stock_carpenter_yomiya_quater_entry_darul_nasar',[quater::class,'carpenter_saman_yomiya_nasar']);
Route::get('stock_carpenter_yomiya_quater_entry_darul_waqfeen',[quater::class,'carpenter_saman_yomiya_waqfeen']);
Route::get('stock_carpenter_yomiya_quater_entry_darul_fatuh',[quater::class,'carpenter_saman_yomiya_fatuh']);
Route::get('stock_carpenter_yomiya_quater_entry_factory_area',[quater::class,'carpenter_saman_yomiya_factory_area']);
Route::get('stock_carpenter_yomiya_quater_entry_darul_yaman',[quater::class,'carpenter_saman_yomiya_yaman']);



Route::get('stock_cable_amad_quater_entry_darul_sadar',[quater::class,'cable_saman']);
Route::get('stock_painter_amad_quater_entry_darul_sadar',[quater::class,'painter_saman']);
Route::get('quater_sadar_paint_yomiay_entry',[quater::class,'paint_yomiya_saman_sadar']);
Route::get('quater_fatuh_paint_yomiya_entry',[quater::class,'paint_yomiya_saman_fatuh']);
Route::get('quater_factory_paint_yomiya_entry',[quater::class,'paint_yomiya_saman_factory']);
Route::get('quater_yaman_paint_yomiya_entry',[quater::class,'paint_yomiya_saman_yaman']);



Route::get('stock_mistri_amad_quater_entry_darul_sadar',[quater::class,'mistri_saman_get']);

Route::get('stock_amad_quater_entry_darul_factory',[quater::class,'store_saman_factory']);


Route::get('stock_store_saman_list',[quater::class,'store_saman_list']);
Route::get('nasar_stock_store_saman_list',[quater::class,'nasar_store_saman_list']);
Route::get('waqfeen_stock_store_saman_list',[quater::class,'waqfeen_store_saman_list']);

Route::view("waqfeen_stock_store_saman_list_search","waqfeen_stock_store_saman_list_search");
Route::get('waqfeen_stock_store_saman_list_search/',[quater::class,'waqfeen_store_saman_list_search']);

Route::get('factory_stock_store_saman_list',[quater::class,'factory_store_saman_list']);

Route::view("/nasar_stock_store_saman_list_search","nasar_stock_store_saman_list_search");
Route::get("nasar_stock_store_saman_list_search/",[quater::class,'nasar_saman_list_search']);

Route::get('nasar_stock_mistri_list',[quater::class,'mistri_saman_list']);
Route::get('nasar_stock_mistri_list',[quater::class,'nasar_stock_mistri_list']);

Route::view("/nasar_stock_mistri_list_search","nasar_stock_mistri_list_search");
Route::get("nasar_stock_mistri_list_search/",[quater::class,'nasar_mistri_search']);

Route::get('waqfeen_stock_mistri_list',[quater::class,'waqfeen_stock_mistri_list']);
Route::get('factory_stock_mistri_list',[quater::class,'factory_stock_mistri_list']);

Route::view("/waqfeen_stock_mistri_list_search","waqfeen_stock_mistri_list_search");
Route::get('waqfeen_stock_mistri_list_search/',[quater::class,'waqfeen_mistri_list_search']);

Route::view("/factory_stock_mistri_list_search","factory_stock_mistri_list_search");
Route::get('factory_stock_mistri_list_search',[quater::class,'factory_mistri_list_search']);


Route::get('quater_list',[quater::class,'show_amad']);
Route::get('delete/{id}',[quater::class,'delete_amad']);
Route::get('edit_amad_quater_entry/{id}',[quater::class,'showData_amad']);
Route::post('edit_amad_quater_entry',[quater::class,'update_amad']);
Route::view("/search_quater_list","search_quater_list");
Route::get('search_quater_list/',[quater::class,'search_amad_quater']);

Route::get("quater_list/",[qauter::class,'search_amad_quater']);

Route::get('quater_list',[quater::class,'amad_list']);


Route::view("/amad_quater_entry","amad_quater_entry");
Route::post("amad_quater_entry",[quater::class,'amad_quater']);


//tameer quater

Route::get('ishya_tameer_list',[quater_tameer_controller::class,'ishya_tameer_list']);
Route::get('ishya_tameer_delete/{id}',[quater_tameer_controller::class,'delete_tameer_ishya']);
Route::get('edit_ishya_tameer/{id}',[quater_tameer_controller::class,'showData_ishya_tameer']);
Route::post('edit_ishya_tameer',[quater_tameer_controller::class,'update_tameer_ishya']);

Route::get('thekedar_tameer_list',[quater_tameer_controller::class,'thekedar_tameer_list']);
Route::get('thekedar_tameer_delete/{id}',[quater_tameer_controller::class,'thekedar_tameer_del']);
Route::get('edit_thekedar_tameer/{id}',[quater_tameer_controller::class,'showData_thekedar_tameer']);
Route::post('edit_thekedar_tameer',[quater_tameer_controller::class,'update_tameer_thekedar']);

Route::get('steel_tameer_list',[quater_tameer_controller::class,'steel_tameer_list']);
Route::get('steel_tameer_delete/{id}',[quater_tameer_controller::class,'delete_tameer_steel']);
Route::get('edit_steel_tameer/{id}',[quater_tameer_controller::class,'showData_steel_tameer']);
Route::post('edit_steel_tameer',[quater_tameer_controller::class,'update_tameer_steel']);

Route::view("/amad_tameer_quater_store","amad_tameer_quater_store");
Route::post("amad_tameer_quater_store",[quater_tameer_controller::class,'quater_tameer_ishya']);

Route::view("ishya_tameer_list_search","ishya_tameer_list_search");
Route::get("ishya_tameer_list_search/",[quater_tameer_controller::class,'search_ishya_tameer']);

Route::view("steel_tameer_list_search","steel_tameer_list_search");
Route::get("steel_tameer_list_search/",[quater_tameer_controller::class,'search_steel_tameer']);

Route::view("thekedar_tameer_list_search","thekedar_tameer_list_search");
Route::get("thekedar_tameer_list_search/",[quater_tameer_controller::class,'thekedar_tameer_search']);

Route::view("/amad_tameer_quater_thekedar","amad_tameer_quater_thekedar");
Route::post("amad_tameer_quater_thekedar",[quater_tameer_controller::class,'quater_tameer_thekedar']);

Route::view("/amad_tameer_quater_steel","amad_tameer_quater_steel");
Route::post("amad_tameer_quater_steel",[quater_tameer_controller::class,'steel_quater_tameer']);

Route::view("/amad_quater_list","amad_quater_list");


//
Route::view("/store_list_detail","store_list_detail");
Route::get("store_list_detail",[storecontroller::class,'showDetail_store']);
//add tameer quater
Route::view("/add_tameer_quater","add_tameer_quater");
Route::post("add_tameer_quater",[quater_tameer_controller::class,'add_tameer']);
Route::get("quater_tameer_entry",[quater_tameer_controller::class,'quater_tameer_get_data']);
Route::get("edit_thekedar_tameer",[quater_tameer_controller::class,'edit_quater_tameer_get_data']);
//water tank entry
Route::view("/water_tank_amad_quater_entry","water_tank_amad_quater_entry");
Route::post("water_tank_amad_quater_entry",[ishya::class,'tank_amad_quater_entry']);
Route::view("/water_tank_amad_quater_list","water_tank_amad_quater_list");
Route::get("water_tank_amad_quater_list",[ishya::class,'water_tank_amad_quater_list']);
//edit water tank entry
Route::get('delete_amad_tank_edit/{id}',[ishya::class,'amad_tank_delete']);
Route::get('edit_water_tank_amad_quater_entry/{id}',[ishya::class,'showData_amad_tank_edit']);
Route::post('edit_water_tank_amad_quater_entry',[ishya::class,'update_amad_tank_edit']);
Route::get("amad_quater_tank_search/",[ishya::class,'search_amad_tank']);

//water tank entry
Route::view("/amad_quater_tameer_entry","amad_quater_tameer_entry");
Route::get("tameer_quater_list",[ishya::class,'amad_tameer_quater']);
Route::post('amad_quater_tameer_entry',[ishya::class,'amad_tameer_post']);
//edit tameer quater entry
Route::get('delete_amad_quater_tameer/{id}',[ishya::class,'amad_tameer_delete']);
Route::get('edit_amad_quater_tameer_entry/{id}',[ishya::class,'showData_amad_tameer_edit']);
Route::post('edit_amad_quater_tameer_entry',[ishya::class,'update_amad_tameer_edit']);
Route::get("amad_quater_tameer_search/",[ishya::class,'search_amad_tameer']);

//water tank detail painter
Route::view("/amad_water_tank_painter","amad_water_tank_painter");
Route::post('amad_water_tank_painter',[ishya::class,'water_painter']);
Route::get("water_tank_painter_list/",[ishya::class,'water_painter_get']);
Route::get("water_tank_painter_list_search/",[ishya::class,'water_paint_search']);

//tameer quater painter
Route::view("/amad_tameer_quater_painter","amad_tameer_quater_painter");
Route::post('amad_tameer_quater_painter',[quater_tameer_controller::class,'tameer_painter']);
Route::get("tameer_painter_list/",[quater_tameer_controller::class,'tameer_painter_get']);
Route::get("tameer_painter_list_search/",[quater_tameer_controller::class,'tameer_painter_search']);

//darul sadar detail painter
Route::post('stock_painter_amad_quater_entry_darul_sadar',[quater::class,'darul_sadar_painter']);
Route::get("sadar_stock_paint_list/",[quater::class,'sadar_stock_paint']);
Route::get("sadar_stock_carpenter_list/",[quater::class,'sadar_stock_carpenter']);

Route::get('stock_painter_amad_quater_entry_darul_nasar',[quater::class,'painter_saman_nasar_quater_no']);

//darul nasar detail painter
Route::post('stock_painter_amad_quater_entry_darul_nasar',[quater::class,'darul_nasar_painter']);

Route::get("nasar_stock_paint_list/",[quater::class,'nasar_stock_paint']);
Route::get("nasar_stock_carpenter_list/",[quater::class,'nasar_stock_carpenter']);

//darul sadar detail carpenter
Route::post('stock_carpenter_amad_quater_entry_darul_sadar',[quater::class,'darul_sadar_cartpenter']);
// Route::view("/stock_carpenter_yomiya_quater_entry_darul_sadar","stock_carpenter_yomiya_quater_entry_darul_sadar");

//darul sadar detail carpenter yomiya
Route::post('stock_carpenter_yomiya_quater_entry_darul_sadar',[quater::class,'darul_sadar_yomiya_cartpenter']);
Route::get("sadar_stock_yomiya_carpenter_list/",[quater::class,'sadar_stock_yomiya_carpenter']);
Route::get("sadar_stock_yomiya_carpenter_list_search/",[quater::class,'sadar_search_yomiya_carpenter']);

//darul nasar detail carpenter yomiya

Route::post('stock_carpenter_yomiya_quater_entry_darul_nasar',[quater::class,'darul_nasar_yomiya_cartpenter']);
Route::get("nasar_stock_yomiya_carpenter_list/",[quater::class,'nasar_stock_yomiya_carpenter']);
Route::get("nasar_stock_yomiya_carpenter_list_search/",[quater::class,'nasar_search_yomiya_carpenter']);

//darul waqfeen detail carpenter yomiya

Route::post('stock_carpenter_yomiya_quater_entry_darul_waqfeen',[quater::class,'darul_waqfeen_yomiya_cartpenter']);
Route::get("waqfeen_stock_yomiya_carpenter_list/",[quater::class,'waqfeen_stock_yomiya_carpenter']);
Route::get("waqfeen_stock_yomiya_carpenter_list_search/",[quater::class,'waqfeen_search_yomiya_carpenter']);

//darul fatuh detail carpenter yomiya

Route::post('stock_carpenter_yomiya_quater_entry_darul_fatuh',[quater::class,'darul_fatuh_yomiya_cartpenter']);
Route::get("fatuh_stock_yomiya_carpenter_list/",[quater::class,'fatuh_stock_yomiya_carpenter']);
Route::get("fatuh_stock_yomiya_carpenter_list_search/",[quater::class,'fatuh_search_yomiya_carpenter']);

//darul yaman detail carpenter yomiya

Route::post('stock_carpenter_yomiya_quater_entry_darul_yaman',[quater::class,'darul_yaman_yomiya_cartpenter']);
Route::get("yaman_stock_yomiya_carpenter_list/",[quater::class,'yaman_stock_yomiya_carpenter']);
Route::get("yaman_stock_yomiya_carpenter_list_search/",[quater::class,'yaman_search_yomiya_carpenter']);
//edit darul sadar detail yomiya carpenter

Route::get('delete_yomiya_carpenter_sadar/{id}',[quater::class,'delete_yomiya_carpenter_sadar']);
Route::get('edit_stock_yomiya_quater_entry_darul_sadar_carpenter/{id}',[quater::class,'showData_yomiya_carpenter_sadar']);
Route::post('edit_stock_yomiya_quater_entry_darul_sadar_carpenter',[quater::class,'update_yomiya_carpenter_sadar']);
//edit darul nasar detail yomiya carpenter

Route::get('delete_yomiya_carpenter_nasar/{id}',[quater::class,'delete_yomiya_carpenter_nasar']);
Route::get('edit_stock_yomiya_quater_entry_darul_nasar_carpenter/{id}',[quater::class,'showData_yomiya_carpenter_nasar']);
Route::post('edit_stock_yomiya_quater_entry_darul_nasar_carpenter',[quater::class,'update_yomiya_carpenter_nasar']);
//edit darul waqfeen detail yomiya carpenter

Route::get('delete_yomiya_carpenter_waqfeen/{id}',[quater::class,'delete_yomiya_carpenter_waqfeen']);
Route::get('edit_stock_yomiya_quater_entry_darul_waqfeen_carpenter/{id}',[quater::class,'showData_yomiya_carpenter_waqfeen']);
Route::post('edit_stock_yomiya_quater_entry_darul_waqfeen_carpenter',[quater::class,'update_yomiya_carpenter_waqfeen']);
//edit darul fatuh detail yomiya carpenter

Route::get('delete_yomiya_carpenter_fatuh/{id}',[quater::class,'delete_yomiya_carpenter_fatuh']);
Route::get('edit_stock_yomiya_quater_entry_darul_fatuh_carpenter/{id}',[quater::class,'showData_yomiya_carpenter_fatuh']);
Route::post('edit_stock_yomiya_quater_entry_darul_fatuh_carpenter',[quater::class,'update_yomiya_carpenter_fatuh']);
//edit darul fatuh detail yomiya carpenter

Route::get('delete_yomiya_carpenter_factory/{id}',[quater::class,'delete_yomiya_carpenter_factory']);
Route::get('edit_stock_yomiya_quater_entry_factory_area_carpenter/{id}',[quater::class,'showData_yomiya_carpenter_factory']);
Route::post('edit_stock_yomiya_quater_entry_factory_area_carpenter',[quater::class,'update_yomiya_carpenter_factory']);
// factory_area detail carpenter yomiya

Route::post('stock_carpenter_yomiya_quater_entry_factory_area',[quater::class,'factory_area_yomiya_cartpenter']);
Route::get("factory_area_stock_yomiya_carpenter_list/",[quater::class,'factory_stock_yomiya_carpenter']);
Route::get("factory_area_stock_yomiya_carpenter_list_search/",[quater::class,'factory_area_search_yomiya_carpenter']);

//edit darul yaman detail yomiya carpenter

Route::get('delete_yomiya_carpenter_yaman/{id}',[quater::class,'delete_yomiya_carpenter_yaman']);
Route::get('edit_stock_yomiya_quater_entry_darul_yaman_carpenter/{id}',[quater::class,'showData_yomiya_carpenter_yaman']);
Route::post('edit_stock_yomiya_quater_entry_darul_yaman_carpenter',[quater::class,'update_yomiya_carpenter_yaman']);

//edit daftr detail yomiya carpenter

Route::get('delete_yomiya_carpenter_yaman/{id}',[daftr::class,'delete_yomiya_carpenter_daftr']);
Route::get('edit_stock_yomiya_quater_entry_daftr_carpenter/{id}',[daftr::class,'showData_yomiya_carpenter_daftr']);
Route::post('edit_stock_yomiya_quater_entry_daftr_carpenter',[daftr::class,'update_yomiya_carpenter_daftr']);

//daftr detail carpenter yomiya
Route::post('stock_carpenter_yomiya_daftr_entry',[daftr::class,'daftr_yomiya_cartpenter']);
Route::get('daftr_stock_yomiya_carpenter_list',[daftr::class,'stock_yomiya_carpenter_daftr']);

Route::get('stock_carpenter_yomiya_daftr_list',[daftr::class,'daftr_stock_yomiya_carpenter']);
Route::get("daftr_stock_yomiya_carpenter_list_search/",[daftr::class,'daftr_search_yomiya_carpenter']);


//darul nasar detail carpenter
Route::post('stock_carpenter_amad_quater_entry_darul_nasar',[quater::class,'darul_nasar_cartpenter']);
Route::get('stock_carpenter_amad_quater_entry_darul_nasar',[quater::class,'carpenter_saman_nasar_quater_no']);


//darul waqfeen detail painter
Route::post('stock_painter_amad_quater_entry_darul_waqfeen',[quater::class,'darul_waqfeen_painter']);
Route::get("waqfeen_stock_paint_list/",[quater::class,'waqfeen_stock_paint']);
Route::get("waqfeen_stock_carpenter_list/",[quater::class,'waqfeen_stock_carpenter']);
//darul waqfeen detail carpenter
Route::post('stock_carpenter_amad_quater_entry_darul_waqfeen',[quater::class,'darul_waqfeen_cartpenter']);

//factory_area detail painter
Route::post('stock_painter_amad_quater_entry_factory_area',[quater::class,'factory_area_painter']);
Route::get("factory_stock_paint_list/",[quater::class,'factory_stock_paint']);
Route::get("factory_stock_carpenter_list/",[quater::class,'factory_stock_carpenter']);
//factory_area detail carpenter
Route::view("/stock_carpenter_amad_quater_entry_factory_area","stock_carpenter_amad_quater_entry_factory_area");
Route::post('stock_carpenter_amad_quater_entry_factory_area',[quater::class,'factory_area_cartpenter']);
Route::get('stock_carpenter_amad_quater_entry_factory_area',[quater::class,'carpenter_saman_factory_quater']);

//darul fatuh detail painter
Route::post('stock_painter_amad_quater_entry_darul_fatuh',[quater::class,'darul_fatuh_painter']);
Route::get("fatuh_stock_paint_list/",[quater::class,'fatuh_stock_paint']);
Route::get("fatuh_stock_carpenter_list/",[quater::class,'fatuh_stock_carpenter']);
//darul fatuh detail carpenter
Route::post('stock_carpenter_amad_quater_entry_darul_fatuh',[quater::class,'darul_fatuh_cartpenter']);

//darul yaman detail painter
Route::post('stock_painter_amad_quater_entry_darul_yaman',[quater::class,'darul_yaman_painter']);
Route::get("yaman_stock_paint_list/",[quater::class,'yaman_stock_paint']);
Route::get("yaman_stock_carpenter_list/",[quater::class,'yaman_stock_carpenter']);
//darul yaman detail carpenter
Route::post('stock_carpenter_amad_quater_entry_darul_yaman',[quater::class,'darul_yaman_cartpenter']);

//daftr detail painter
Route::post('stock_amad_entry_daftr_painter',[daftr::class,'daftr_painter']);
Route::get("stock_store_daftr_list_paint/",[daftr::class,'daftr_stock_paint']);

Route::get("stock_store_daftr_list_carpenter/",[daftr::class,'daftr_stock_carpenter']);
//daftr detail carpenter
Route::post('stock_carpenter_amad_daftr_entry',[daftr::class,'daftr_cartpenter']);
//edit darul sadar detail painter
Route::get('delete_paint_sadar/{id}',[quater::class,'delete_stock_paint_sadar']);
Route::get('edit_stock_amad_quater_entry_darul_sadar_paint/{id}',[quater::class,'showData_stock_paint_sadar']);
Route::post('edit_stock_amad_quater_entry_darul_sadar_paint',[quater::class,'update_stock_paint_sadar']);
//edit darul sadar detail carpenter
Route::get('delete_carpenter_sadar/{id}',[quater::class,'delete_stock_carpenter_sadar']);
Route::get('edit_stock_amad_quater_entry_darul_sadar_carpenter/{id}',[quater::class,'showData_stock_carpenter_sadar']);
Route::post('edit_stock_amad_quater_entry_darul_sadar_carpenter',[quater::class,'update_stock_carpenter_sadar']);
//edit darul nasar detail painter
Route::get('delete_paint_nasar/{id}',[quater::class,'delete_stock_paint_nasar']);
Route::get('edit_stock_amad_quater_entry_darul_nasar_paint/{id}',[quater::class,'showData_stock_paint_nasar']);
Route::post('edit_stock_amad_quater_entry_darul_nasar_paint',[quater::class,'update_stock_paint_nasar']);
//edit darul nasar detail carpenter
Route::get('delete_carpenter_nasar/{id}',[quater::class,'delete_stock_carpenter_nasar']);
Route::get('edit_stock_amad_quater_entry_darul_nasar_carpenter/{id}',[quater::class,'showData_stock_carpenter_nasar']);
Route::post('edit_stock_amad_quater_entry_darul_nasar_carpenter',[quater::class,'update_stock_carpenter_nasar']);
//edit  factory detail carpenter
Route::get('delete_carpenter_factory/{id}',[quater::class,'delete_stock_carpenter_factory']);
Route::get('edit_stock_amad_quater_entry_factory_carpenter/{id}',[quater::class,'showData_stock_carpenter_factory']);
Route::post('edit_stock_amad_quater_entry_factory_carpenter',[quater::class,'update_stock_carpenter_factory']);
//edit  factory detail paint
Route::get('delete_paint_factory/{id}',[quater::class,'delete_stock_paint_factory']);
Route::get('edit_stock_amad_quater_entry_factory_paint/{id}',[quater::class,'showData_stock_paint_factory']);
Route::post('edit_stock_amad_quater_entry_factory_paint',[quater::class,'update_stock_paint_factory']);
//edit  factory carpenter paint
Route::get('delete_carpenter_factory/{id}',[quater::class,'delete_stock_carpenter_factory']);
Route::get('edit_stock_amad_quater_entry_factory_carpenter/{id}',[quater::class,'showData_stock_carpenter_factory']);
Route::post('edit_stock_amad_quater_entry_factory_carpenter',[quater::class,'update_stock_carpenter_factory']);
//edit darul waqfeen detail paint
Route::get('delete_paint_waqfeen/{id}',[quater::class,'delete_stock_paint_waqfeen']);
Route::get('edit_stock_amad_quater_entry_darul_waqfeen_paint/{id}',[quater::class,'showData_stock_paint_waqfeen']);
Route::post('edit_stock_amad_quater_entry_darul_waqfeen_paint',[quater::class,'update_stock_paint_waqfeen']);
//edit darul waqfeen detail carpenter
Route::get('delete_carpenter_waqfeen/{id}',[quater::class,'delete_stock_carpenter_waqfeen']);
Route::get('edit_stock_amad_quater_entry_darul_waqfeen_carpenter/{id}',[quater::class,'showData_stock_carpenter_waqfeen']);
Route::post('edit_stock_amad_quater_entry_darul_waqfeen_carpenter',[quater::class,'update_stock_carpenter_waqfeen']);
//edit darul yaman detail carpenter
Route::get('delete_carpenter_yaman/{id}',[quater::class,'delete_stock_carpenter_yaman']);
Route::get('edit_stock_amad_quater_entry_darul_yaman_carpenter/{id}',[quater::class,'showData_stock_carpenter_yaman']);
Route::post('edit_stock_amad_quater_entry_darul_yaman_carpenter',[quater::class,'update_stock_carpenter_yaman']);
//edit darul yaman detail paint
Route::get('delete_paint_yaman/{id}',[quater::class,'delete_stock_paint_yaman']);
Route::get('edit_stock_amad_quater_entry_darul_yaman_paint/{id}',[quater::class,'showData_stock_paint_yaman']);
Route::post('edit_stock_amad_quater_entry_darul_yaman_paint',[quater::class,'update_stock_paint_yaman']);
//edit daftr detail paint
Route::get('delete_paint_daftr/{id}',[daftr::class,'delete_stock_paint_daftr']);
Route::get('edit_stock_amad_quater_entry_daftr_paint/{id}',[daftr::class,'showData_stock_paint_daftr']);
Route::post('edit_stock_amad_quater_entry_daftr_paint',[daftr::class,'update_stock_paint_daftr']);
//edit daftr detail carpenter
Route::get('delete_carpenter_daftr/{id}',[daftr::class,'delete_stock_carpenter_daftr']);
Route::get('edit_stock_amad_quater_entry_daftr_carpenter/{id}',[daftr::class,'showData_stock_carpenter_daftr']);
Route::post('edit_stock_amad_quater_entry_daftr_carpenter',[daftr::class,'update_stock_carpenter_daftr']);
//edit fatuh detail paint
Route::get('delete_paint_fatuh/{id}',[quater::class,'delete_stock_paint_fatuh']);
Route::get('edit_stock_amad_quater_entry_darul_fatuh_paint/{id}',[quater::class,'showData_stock_paint_fatuh']);
Route::post('edit_stock_amad_quater_entry_darul_fatuh_paint',[quater::class,'update_stock_paint_fatuh']);
//edit fatuh detail carpenter
Route::get('delete_carpenter_fatuh/{id}',[quater::class,'delete_stock_carpenter_fatuh']);
Route::get('edit_stock_amad_quater_entry_darul_fatuh_carpenter/{id}',[quater::class,'showData_stock_carpenter_fatuh']);
Route::post('edit_stock_amad_quater_entry_darul_fatuh_carpenter',[quater::class,'update_stock_carpenter_fatuh']);
//edit darul yaman detail carpenter
Route::get('delete_carpenter_yaman/{id}',[quater::class,'delete_stock_carpenter_yaman']);
Route::get('edit_stock_amad_quater_entry_darul_yaman_carpenter/{id}',[quater::class,'showData_stock_carpenter_yaman']);
Route::post('edit_stock_amad_quater_entry_darul_yaman_carpenter',[quater::class,'update_stock_carpenter_yaman']);

//sadar search
Route::get('stock_store_paint_sadar_list_search/',[quater::class,'sadar_store_paint_list_search']);
Route::get('stock_store_carpenter_sadar_list_search/',[quater::class,'sadar_store_carpenter_list_search']);
//nasar search
Route::get('stock_store_paint_nasar_list_search/',[quater::class,'nasar_store_paint_list_search']);
Route::get('stock_store_carpenter_nasar_list_search/',[quater::class,'nasar_store_carpenter_list_search']);
//factory search
Route::get('stock_store_paint_factory_list_search/',[quater::class,'factory_store_paint_list_search']);
Route::get('stock_store_carpenter_factory_list_search/',[quater::class,'factory_store_carpenter_list_search']);
//waqfeen search
Route::get('stock_store_paint_waqfeen_list_search/',[quater::class,'waqfeen_store_paint_list_search']);
Route::get('stock_store_carpenter_waqfeen_list_search/',[quater::class,'waqfeen_store_carpenter_list_search']);
//fatuh search
Route::get('stock_store_paint_fatuh_list_search/',[quater::class,'fatuh_store_paint_list_search']);
Route::get('stock_store_carpenter_fatuh_list_search/',[quater::class,'fatuh_store_carpenter_list_search']);
//yaman search
Route::get('stock_store_paint_yaman_list_search/',[quater::class,'yaman_store_paint_list_search']);
Route::get('stock_store_carpenter_yaman_list_search/',[quater::class,'yaman_store_carpenter_list_search']);
//daftr search
Route::get('stock_store_paint_daftr_list_search/',[daftr::class,'daftr_store_paint_list_search']);
Route::get('stock_store_carpenter_daftr_list_search/',[daftr::class,'daftr_store_carpenter_list_search']);
//quater bill
Route::post('quater_bill_entry_mistri',[quater::class,'quater_bill_post']);
Route::get('quater_bill_mistri',[quater::class,'quater_bill_get']);

//quater bill carpenter

Route::post('quater_bill_entry_carpenter',[quater::class,'quater_bill_carpenter']);
Route::get('quater_bill_carpenter',[quater::class,'quater_bill_carpenter_get']);

//quater bill painter

Route::post('quater_bill_entry',[quater::class,'quater_bill_paint']);
Route::get('quater_bill_painter',[quater::class,'quater_bill_painter_get']);

//darul sadar detail steel
// Route::view("/quater_sadar_steel_entry","quater_sadar_steel_entry");

Route::post('quater_sadar_steel_entry',[quater::class,'steel_sadar']);
Route::get("quater_sadar_steel_list/",[quater::class,'steel_sadar_list']);
Route::get("quater_sadar_steel_list_search/",[quater::class,'steel_sadar_search']);

Route::get("waqfeen_stock_/",[quater::class,'waqfeen_stock_carpenter']);
//darul sadar detail steel
// Route::view("/quater_sadar_steel_entry","quater_sadar_steel_entry");

Route::post('quater_yaman_steel_entry',[quater::class,'steel_yaman']);
Route::get("quater_yaman_steel_list/",[quater::class,'steel_yaman_list']);
Route::get("quater_yaman_steel_list_search/",[quater::class,'steel_yaman_search']);

Route::get("waqfeen_stoc/",[quater::class,'waqfeen_stock_carpenter']);
//darul sadar detail steel
// Route::view("/quater_sadar_steel_entry","quater_sadar_steel_entry");

Route::post('quater_factory_steel_entry',[quater::class,'steel_factory']);
Route::get("quater_factory_steel_list/",[quater::class,'steel_factory_list']);
Route::get("quater_factory_steel_list_search/",[quater::class,'steel_factory_search']);

Route::get("waqfeen_s/",[quater::class,'waqfeen_stock_carpenter']);
//darul sadar detail steel
// Route::view("/quater_sadar_steel_entry","quater_sadar_steel_entry");

Route::post('quater_fatuh_steel_entry',[quater::class,'steel_fatuh']);
Route::get("quater_fatuh_steel_list/",[quater::class,'steel_fatuh_list']);
Route::get("quater_fatuh_steel_list_search/",[quater::class,'steel_fatuh_search']);

Route::get("waqfeen_stock_carp/",[quater::class,'waqfeen_stock_carpenter']);
//darul nasar detail steel
// Route::view("/quater_nasar_steel_entry","quater_nasar_steel_entry");

Route::post('quater_nasar_steel_entry',[quater::class,'steel_nasar']);
Route::get("quater_nasar_steel_list/",[quater::class,'steel_nasar_list']);
Route::get("quater_nasar_steel_list_search/",[quater::class,'steel_nasar_search']);

Route::get("waqfeen_stock_carp/",[quater::class,'waqfeen_stock_carpenter']);
//darul sadar detail steel
// Route::view("/quater_sadar_steel_entry","quater_sadar_steel_entry");

Route::post('daftr_steel_entry',[daftr::class,'steel_daftr']);
Route::get("daftr_steel_list/",[daftr::class,'steel_daftr_list']);
Route::get("daftr_steel_list_search/",[daftr::class,'steel_daftr_search']);

Route::get("waqfeen_/",[daftr::class,'waqfeen_stock_carpenter']);
// Route::view("/quater_nasar_steel_entry","quater_nasar_steel_entry");

Route::post('quater_waqfeen_steel_entry',[quater::class,'steel_waqfeen']);
Route::get("quater_waqfeen_steel_list/",[quater::class,'steel_waqfeen_list']);
Route::get("quater_waqfeen_steel_list_search/",[quater::class,'steel_waqfeen_search']);

Route::get("waqfe/",[quater::class,'waqfeen_stock_carpenter']);
//daftr bill
Route::post('daftr_bill_entry_mistri',[daftr::class,'daftr_bill_post']);
Route::get('daftr_bill_mistri',[daftr::class,'daftr_bill_get']);
// Route::view("/quater_sadar_steel_entry","quater_sadar_steel_entry");

Route::post('daftr_chair_entry',[daftr::class,'chair_daftr_bunti']);
Route::get("daftr_chair_list/",[daftr::class,'store_chair_list']);
Route::get("daftr_chair_list_search/",[daftr::class,'store_chair_list_search']);
//daftr bill carpenter

// Route::post('daftr_bill_entry_carpenter',[daftr::class,'daftr_bill_carpenter']);
// Route::get('daftr_bill_carpenter',[daftr::class,'daftr_bill_carpenter_get']);

//daftr bill painter

Route::post('daftr_bill_entry',[daftr::class,'daftr_bill_paint']);
Route::get('daftr_bill_painter',[daftr::class,'daftr_bill_painter_get']);
//water tank bill thekedar

Route::post('water_tank_bill_entry_thekedar',[ishya::class,'tank_bill_thekedar']);
Route::get('water_tank_bill_thekedar',[ishya::class,'tank_bill_thekedar_get']);
//water tank bill steel

Route::post('water_tank_bill_entry_steel',[ishya::class,'steel_bill_tank']);
Route::get('water_tank_bill_steel',[ishya::class,'tank_bill_get_steel']);

//tameer quater bill thekedar

Route::post('bill_tameer_quater_entry_thekedar',[quater_tameer_controller::class,'tameer_quater_thekedar']);
Route::get('bill_tameer_thekedar',[quater_tameer_controller::class,'tameer_quater_thekedar_get']);
//tameer quater bill steel

// Route::post('bill_tameer_quater_entry_steel',[quater_tameer_controller::class,'tameer_quater_steel']);
Route::get('bill_tameer_steel_decorator',[quater_tameer_controller::class,'tameer_quater_steel_get']);
//tameer quater bill wood

Route::post('bill_tameer_quater_entry_wood',[quater_tameer_controller::class,'tameer_bill_wood']);
Route::get('tameer_quater_bill_wood',[quater_tameer_controller::class,'tank_bill_get_wood']);

//water tank bill wood works

Route::post('amad_water_tank_wood',[ishya::class,'tank_bill_wood']);
Route::get('water_tank_bill_wood',[ishya::class,'tank_bill_get_wood']);
//water tank  wood works
Route::view("/amad_water_tank_wood","amad_water_tank_wood");
Route::post('amad_water_tank_wood',[ishya::class,'tank_wood']);
Route::get('water_tank_wood_work_list',[ishya::class,'tank_get_wood']);
//tameer quater  wood works
Route::view("/amad_tameer_quater_wood","amad_tameer_quater_wood");

Route::post('amad_tameer_quater_wood',[quater_tameer_controller::class,'tameer_wood']);
Route::get('tameer_wood_work_list',[quater_tameer_controller::class,'tameer_get_wood']);
//tameer quater+ water tank  wood works search

Route::get('tameer_wood_work_list_search/',[quater_tameer_controller::class,'tameer_wood_work_search']);
Route::get('water_tank_wood_work_list_search/',[ishya::class,'water_tank_wood_work_search']);
//edit tameer quater  wood works
Route::get('delete_tameer_quater_wood/{id}',[quater_tameer_controller::class,'delete_tameer_wood']);
Route::get('edit_tameer_wood_work_list/{id}',[quater_tameer_controller::class,'showData_wood_tameer']);
Route::post('edit_tameer_wood_work_list',[quater_tameer_controller::class,'update_tameer_wood']);
//edit water tank wood works
Route::get('delete_water_tank_wood/{id}',[ishya::class,'delete_water_wood']);
Route::get('edit_water_wood_work_list/{id}',[ishya::class,'showData_wood_water']);
Route::post('edit_water_wood_work_list',[ishya::class,'update_water_wood']);
Route::get('delete_wood_tank',[ishya::class,'delete_tank_wood']);
// delete wood tank bill
Route::get('delete_wood_bill/{id}',[ishya::class,'delete_water_bill_wood']);
// delete steel tank bill
Route::get('delete_steel_bill/{id}',[ishya::class,'delete_steel_bill_tank']);
// delete thekedar tank bill
Route::get('delete_thekedar_bill/{id}',[ishya::class,'delete_thekedar_bill_tank']);
// delete tameer bill wood
Route::get('delete_tameer_bill_wood/{id}',[quater_tameer_controller::class,'delete_bill_tameer_wood']);
// delete tameer bill steel
Route::get('delete_tameer_bill_steel/{id}',[quater_tameer_controller::class,'delete_bill_tameer_steel']);
// delete tameer bill mistri
Route::get('delete_tameer_bill_mistri/{id}',[quater_tameer_controller::class,'delete_bill_tameer_mistri']);
// delete quater bill mistri
Route::get('delete_quater_bill_mistri/{id}',[quater::class,'delete_bill_quater_mistri']);
// delete quater bill carpenter
Route::get('delete_quater_bill_carpenter/{id}',[quater::class,'delete_bill_quater_carpenter']);
// delete quater bill painter
Route::get('delete_quater_bill_painter/{id}',[quater::class,'delete_bill_quater_painter']);
// delete daftr bill mistri
Route::get('delete_daftr_bill_mistri/{id}',[daftr::class,'delete_bill_daftr_mistri']);
// delete daftr bill carpenter
Route::get('delete_daftr_bill_carpenter/{id}',[daftr::class,'delete_bill_daftr_carpenter']);
// delete daftr bill painter
Route::get('delete_daftr_bill_painter/{id}',[daftr::class,'delete_bill_daftr_painter']);
//quater bill marbel

Route::post('quater_bill_entry_marbel',[quater::class,'quater_marbel_bill']);
Route::get('quater_bill_marbel',[quater::class,'quater_marbel_bill_get']);
Route::get('delete_bill_quater_marbel/{id}',[quater::class,'delete_bill_marbel_quater']);

//daftr bill marbel

Route::post('daftr_bill_entry_marbel',[daftr::class,'daftr_marbel_bill']);
Route::get('daftr_bill_marbel',[daftr::class,'daftr_marbel_bill_get']);
Route::get('delete_bill_daftr_marbel/{id}',[daftr::class,'delete_bill_marbel_daftr']);
//daftr bill painter yomiya

Route::post('daftr_bill_paint_yomiay_entry',[daftr::class,'daftr_painter_yomiya_bill']);
Route::get('daftr_bill_paint_yomiya',[daftr::class,'daftr_painter_yomiya_bill_get']);
Route::get('delete_bill_daftr_painter_yomiya/{id}',[daftr::class,'delete_bill_painter_yomiya_daftr']);
//daftr bill painter yomiya

Route::post('daftr_paint_yomiay_entry',[daftr::class,'daftr_paint']);
Route::get('daftr_paint_yomiya_list',[daftr::class,'daftr_painter_yomiya_get']);
Route::get('daftr_paint_yomiya_list_search',[daftr::class,'daftr_painter_yomiya_get_search']);

Route::get('delete_bill_daftr_painter_yomiya/{id}',[daftr::class,'delete_bill_painter_yomiya_daftr']);
//quater bill painter yomiya
// Route::view("/quater_nasar_paint_yomiay_entry","quater_nasar_paint_yomiay_entry");

Route::post('quater_sadar_paint_yomiay_entry',[quater::class,'quater_painter_yomiya_bill']);
Route::get('quater_sadar_paint_yomiya_list',[quater::class,'sadar_paint_yomiya_list']);
Route::get('quater_sadar_paint_yomiya_list_search/',[quater::class,'sadar_paint_yomiya_list_search']);
Route::get('delete_bill_quater_painter_yomiya/{id}',[quater::class,'delete_bill_painter_yomiya_quater']);
//quater sadar painter yomiya udate
Route::get('sadar_paint_delete/{id}',[quater::class,'delete_quater_painter_yomiya']);
Route::get('edit_quater_sadar_paint_yomiay_entry/{id}',[quater::class,'showData_quater_painter_yomiya']);
Route::post('edit_quater_sadar_paint_yomiay_entry',[quater::class,'update_quater_yomiya']);
//quater nasar painter yomiya udate
Route::get('nasar_paint_delete/{id}',[quater::class,'delete_nasar_quater_painter_yomiya']);
Route::get('edit_quater_nasar_paint_yomiay_entry/{id}',[quater::class,'showData_nasar_quater_painter_yomiya']);
Route::post('edit_quater_nasar_paint_yomiay_entry',[quater::class,'update_nasar_quater_yomiya']);
//quater factory painter yomiya udate
Route::get('factory_paint_delete/{id}',[quater::class,'delete_factory_quater_painter_yomiya']);
Route::get('edit_quater_factory_paint_yomiay_entry/{id}',[quater::class,'showData_factory_quater_painter_yomiya']);
Route::post('edit_quater_factory_paint_yomiay_entry',[quater::class,'update_factory_quater_yomiya']);
//quater waqfeen painter yomiya udate
Route::get('waqfeen_paint_delete/{id}',[quater::class,'delete_waqfeen_quater_painter_yomiya']);
Route::get('edit_quater_waqfeen_paint_yomiay_entry/{id}',[quater::class,'showData_waqfeen_quater_painter_yomiya']);
Route::post('edit_quater_waqfeen_paint_yomiay_entry',[quater::class,'update_waqfeen_quater_yomiya']);
//quater fatuh painter yomiya udate
Route::get('fatuh_paint_delete/{id}',[quater::class,'delete_fatuh_quater_painter_yomiya']);
Route::get('edit_quater_fatuh_paint_yomiay_entry/{id}',[quater::class,'showData_fatuh_quater_painter_yomiya']);
Route::post('edit_quater_fatuh_paint_yomiay_entry',[quater::class,'update_fatuh_quater_yomiya']);
//quater yaman painter yomiya udate
Route::get('yaman_paint_delete/{id}',[quater::class,'delete_yaman_quater_painter_yomiya']);
Route::get('edit_quater_yaman_paint_yomiay_entry/{id}',[quater::class,'showData_yaman_quater_painter_yomiya']);
Route::post('edit_quater_yaman_paint_yomiay_entry',[quater::class,'update_yaman_quater_yomiya']);
//daftr  painter yomiya udate
Route::get('daftr_paint_delete/{id}',[daftr::class,'delete_daftr_painter_yomiya']);
Route::get('edit_daftr_paint_yomiay_entry/{id}',[daftr::class,'showData_daftr_painter_yomiya']);
Route::post('edit_daftr_paint_yomiay_entry',[daftr::class,'update_daftr_yomiya']);
//quater sadar steel udate
Route::get('sadar_steel_delete/{id}',[quater::class,'delete_sadar_steel']);
Route::get('edit_quater_sadar_steel_entry/{id}',[quater::class,'showData_quater_sadar_steel']);
Route::post('edit_quater_sadar_steel_entry',[quater::class,'update_steel_sadar']);
//quater nasar steel udate
Route::get('nasar_steel_delete/{id}',[quater::class,'delete_nasar_steel']);
Route::get('edit_quater_nasar_steel_entry/{id}',[quater::class,'showData_quater_nasar_steel']);
Route::post('edit_quater_nasar_steel_entry',[quater::class,'update_steel_nasar']);
//quater factory steel udate
Route::get('factory_steel_delete/{id}',[quater::class,'delete_factory_steel']);
Route::get('edit_quater_factory_steel_entry/{id}',[quater::class,'showData_quater_factory_steel']);
Route::post('edit_quater_factory_steel_entry',[quater::class,'update_steel_factory']);
//quater waqfeen steel udate
Route::get('waqfeen_steel_delete/{id}',[quater::class,'delete_waqfeen_steel']);
Route::get('edit_quater_waqfeen_steel_entry/{id}',[quater::class,'showData_quater_waqfeen_steel']);
Route::post('edit_quater_waqfeen_steel_entry',[quater::class,'update_steel_waqfeen']);
//quater fatuh steel udate
Route::get('fatuh_steel_delete/{id}',[quater::class,'delete_fatuh_steel']);
Route::get('edit_quater_fatuh_steel_entry/{id}',[quater::class,'showData_quater_fatuh_steel']);
Route::post('edit_quater_fatuh_steel_entry',[quater::class,'update_steel_fatuh']);
//quater yaman steel udate
Route::get('yaman_steel_delete/{id}',[quater::class,'delete_yaman_steel']);
Route::get('edit_quater_yaman_steel_entry/{id}',[quater::class,'showData_quater_yaman_steel']);
Route::post('edit_quater_yaman_steel_entry',[quater::class,'update_steel_yaman']);
//quater water tank painter udate
Route::get('tank_painter_delete/{id}',[ishya::class,'delete_tank_painter']);
Route::get('edit_water_tank_paint_entry/{id}',[ishya::class,'showData_water_tank_paint']);
Route::post('edit_water_tank_paint_entry',[ishya::class,'update_water_tank_paint']);
//quater tameer painter udate
Route::get('tameer_painter_delete/{id}',[quater_tameer_controller::class,'delete_tameer_painter']);
Route::get('edit_tameer_quater_paint_entry/{id}',[quater_tameer_controller::class,'showData_tameer_paint']);
Route::post('edit_tameer_quater_paint_entry',[quater_tameer_controller::class,'update_tameer_paint']);
//daftr steel udate
Route::get('daftr_steel_delete/{id}',[daftr::class,'delete_daftr_steel']);
Route::get('edit_daftr_steel_entry/{id}',[daftr::class,'showData_daftr_steel']);
Route::post('edit_daftr_steel_entry',[daftr::class,'update_daftr_steel']);
// Route::view("/quater_nasar_paint_yomiay_entry","quater_nasar_paint_yomiay_entry");

Route::post('quater_factory_paint_yomiya_entry',[quater::class,'quater_painter_yomiya_factory']);
Route::get('quater_factory_paint_yomiya_list',[quater::class,'factory_paint_yomiya_list']);
Route::get('quater_factory_paint_yomiya_list_search/',[quater::class,'factory_paint_yomiya_list_search']);
Route::get('delete_bill_quater_painter_yomiya/{id}',[quater::class,'delete_bill_painter_yomiya_quater']);
//quater waqfeen painter yomiya
// Route::view("/quater_nasar_paint_yomiay_entry","quater_nasar_paint_yomiay_entry");

Route::post('quater_yaman_paint_yomiya_entry',[quater::class,'quater_painter_yomiya_yaman']);
Route::get('quater_yaman_paint_yomiya_list',[quater::class,'yaman_paint_yomiya_list']);
Route::get('quater_yaman_paint_yomiya_list_search',[quater::class,'yaman_paint_yomiya_list_search']);

Route::get('delete_bill_quater_painter_yomiya/{id}',[quater::class,'delete_bill_painter_yomiya_quater']);
//quater waqfeen painter yomiya
// Route::view("/quater_waqfeen_paint_yomiay_entry","quater_waqfeen_paint_yomiay_entry");

Route::post('quater_waqfeen_paint_yomiya',[quater::class,'quater_painter_yomiya_waqfeen']);
Route::get('quater_waqfeen_paint_yomiya_list',[quater::class,'waqfeen_paint_yomiya_list']);
Route::get('quater_waqfeen_paint_yomiya_list_search',[quater::class,'waqfeen_paint_yomiya_list_search']);
Route::get('delete_bill_quater_painter_yomiya/{id}',[quater::class,'delete_bill_painter_yomiya_quater']);
//quater fatuh painter yomiya
// Route::view("/quater_waqfeen_paint_yomiay_entry","quater_waqfeen_paint_yomiay_entry");

Route::post('quater_fatuh_paint_yomiya_entry',[quater::class,'quater_painter_yomiya_fatuh']);
Route::get('quater_fatuh_paint_yomiya_list',[quater::class,'fatuh_paint_yomiya_list']);
Route::get('quater_fatuh_paint_yomiya_list_search/',[quater::class,'fatuh_paint_yomiya_search']);
Route::get('delete_bill_quater_painter_yomiya/{id}',[quater::class,'delete_bill_painter_yomiya_quater']);
//quater bill painter yomiya
// Route::view("/quater_sadar_paint_yomiay_entry","quater_sadar_paint_yomiay_entry");
Route::post('quater_nasar_paint_yomiay_entry',[quater::class,'quater_painter_yomiya_nasar']);

Route::get('quater_nasar_paint_yomiya_list',[quater::class,'nasar_paint_yomiya_list']);
Route::get('quater_nasar_paint_yomiya_list_search/',[quater::class,'nasar_paint_yomiya_list_search']);

Route::get('delete_nasar_quater_painter_yomiya/{id}',[quater::class,'delete_nasar_painter_yomiya_quater']);

//quater sadar marbel
// Route::view("/stock_marbel_amad_quater_entry_darul_sadar","stock_marbel_amad_quater_entry_darul_sadar");

Route::post('stock_marbel_amad_quater_entry_darul_sadar',[quater::class,'quater_marbel_sadar']);
Route::get('sadar_stock_marbel_list',[quater::class,'sadar_stock_marbel']);
Route::get('sadar_stock_marbel_list_search/',[quater::class,'sadar_stock_marbel_search']);
Route::get('edit_stock_amad_quater_entry_darul_sadar_marbel/{id}',[quater::class,'showData_stock_sadar_marbel']);
Route::post('edit_stock_amad_quater_entry_darul_sadar_marbel',[quater::class,'update_stock_sadar_marbel']);
Route::get('delete_sadar_marbel/{id}',[quater::class,'delete_marbel_sadar']);


//quater nasar marbel

Route::post('stock_marbel_amad_quater_entry_darul_nasar',[quater::class,'quater_marbel_nasar']);
Route::get('nasar_stock_marbel_list',[quater::class,'nasar_stock_marbel']);
Route::get('nasar_stock_marbel_list_search/',[quater::class,'nasar_stock_marbel_search']);
Route::get('edit_stock_amad_quater_entry_darul_nasar_marbel/{id}',[quater::class,'showData_stock_nasar_marbel']);
Route::post('edit_stock_amad_quater_entry_darul_nasar_marbel',[quater::class,'update_stock_nasar_marbel']);
Route::get('delete_nasar_marbel/{id}',[quater::class,'delete_marbel_nasar']);

//quater yaman marbel

Route::post('stock_marbel_amad_quater_entry_darul_yaman',[quater::class,'quater_marbel_yaman']);
Route::get('stock_marbel_amad_quater_entry_darul_yaman',[quater::class,'marbel_quater_no_yaman']);

Route::get('yaman_stock_marbel_list',[quater::class,'yaman_stock_marbel']);
Route::get('yaman_stock_marbel_list_search/',[quater::class,'yaman_stock_marbel_search']);
Route::get('edit_stock_amad_quater_entry_darul_yaman_marbel/{id}',[quater::class,'showData_stock_yaman_marbel']);
Route::post('edit_stock_amad_quater_entry_darul_yaman_marbel',[quater::class,'update_stock_yaman_marbel']);
Route::get('delete_yaman_marbel/{id}',[quater::class,'delete_marbel_yaman']);

//quater fatuh marbel

Route::post('stock_marbel_amad_quater_entry_darul_fatuh',[quater::class,'quater_marbel_fatuh']);
Route::get('stock_marbel_amad_quater_entry_darul_fatuh',[quater::class,'marbel_saman_fatuh']);

Route::get('fatuh_stock_marbel_list',[quater::class,'fatuh_stock_marbel']);
Route::get('fatuh_stock_marbel_list_search/',[quater::class,'fatuh_stock_marbel_search']);
Route::get('edit_stock_amad_quater_entry_darul_fatuh_marbel/{id}',[quater::class,'showData_stock_fatuh_marbel']);
Route::post('edit_stock_amad_quater_entry_darul_fatuh_marbel',[quater::class,'update_stock_fatuh_marbel']);
Route::get('delete_fatuh_marbel/{id}',[quater::class,'delete_marbel_fatuh']);
//quater waqfeen marbel

Route::post('stock_marbel_amad_quater_entry_darul_waqfeen',[quater::class,'quater_marbel_waqfeen']);
Route::get('waqfeen_stock_marbel_list',[quater::class,'waqfeen_stock_marbel']);
Route::get('waqfeen_stock_marbel_list_search/',[quater::class,'waqfeen_stock_marbel_search']);
Route::get('edit_stock_amad_quater_entry_darul_waqfeen_marbel/{id}',[quater::class,'showData_stock_waqfeen_marbel']);
Route::post('edit_stock_amad_quater_entry_darul_waqfeen_marbel',[quater::class,'update_stock_waqfeen_marbel']);
Route::get('delete_waqfeen_marbel/{id}',[quater::class,'delete_marbel_waqfeen']);
//quater factory marbel

Route::post('stock_marbel_amad_quater_entry_factory_area',[quater::class,'quater_marbel_factory']);
Route::get('factory_stock_marbel_list',[quater::class,'factory_stock_marbel']);
Route::get('factory_stock_marbel_list_search/',[quater::class,'factory_stock_marbel_search']);
Route::get('edit_stock_amad_quater_entry_factory_marbel/{id}',[quater::class,'showData_stock_factory_marbel']);
Route::post('edit_stock_amad_quater_entry_factory_marbel',[quater::class,'update_stock_factory_marbel']);
Route::get('delete_factory_marbel/{id}',[quater::class,'delete_marbel_factory']);
//daftr  marbel

Route::post('stock_marbel_amad_daftr_entry',[daftr::class,'daftr_marbel_post']);
Route::get('stock_store_daftr_list_marbel',[daftr::class,'daftr_stock_marbel']);
Route::get('stock_store_daftr_list_marbel_search/',[daftr::class,'daftr_stock_marbel_search']);
Route::get('edit_stock_amad_daftr_entry_marbel/{id}',[daftr::class,'showData_stock_daftr_marbel']);
Route::post('edit_stock_amad_daftr_entry_marbel',[daftr::class,'update_stock_daftr_marbel']);
Route::get('delete_daftr_marbel/{id}',[daftr::class,'delete_marbel_daftr']);
//quater bill cable dict

Route::post('quater_bill_entry_cable_dict',[quater::class,'quater_cable_dict_bill']);
Route::get('quater_bill_cable_dict_list',[quater::class,'quater_cable_dict_bill_get']);
Route::get('delete_bill_quater_cable_dict/{id}',[quater::class,'delete_bill_cable_dict_quater']);
//daftr bill cable dict

Route::post('daftr_bill_entry_cable_dict',[daftr::class,'daftr_cable_dict_bill']);
Route::get('daftr_bill_cable_dict_list',[daftr::class,'daftr_cable_dict_bill_get']);
Route::get('delete_bill_daftr_cable_dict/{id}',[daftr::class,'delete_bill_cable_dict_daftr']);
//quater sadar cable dict

Route::post('stock_cable_amad_quater_entry_darul_sadar',[quater::class,'quater_cable_dict_sadar']);
Route::get('quater_sadar_cable_dict_list',[quater::class,'sadar_stock_cable_dict_list']);
Route::get('quater_sadar_cable_dict_list_search/',[quater::class,'sadar_stock_cable_dict_search']);
Route::get('edit_stock_amad_quater_entry_sadar_cable_dict/{id}',[quater::class,'showData_stock_sadar_cable_dict']);
Route::post('edit_stock_amad_quater_entry_sadar_cable_dict',[quater::class,'update_stock_sadar_cable_dict']);
Route::get('delete_sadar_cable_dict/{id}',[quater::class,'delete_cable_dict_sadar']);
//quater nasar cable dict

Route::post('stock_cable_amad_quater_entry_darul_nasar',[quater::class,'quater_cable_dict_nasar']);
Route::get('quater_nasar_cable_dict_list',[quater::class,'nasar_stock_cable_dict_list']);
Route::get('quater_nasar_cable_dict_list_search/',[quater::class,'nasar_stock_cable_dict_search']);
Route::get('edit_stock_amad_quater_entry_nasar_cable_dict/{id}',[quater::class,'showData_stock_nasar_cable_dict']);
Route::post('edit_stock_amad_quater_entry_nasar_cable_dict',[quater::class,'update_stock_nasar_cable_dict']);
Route::get('delete_nasar_cable_dict/{id}',[quater::class,'delete_cable_dict_nasar']);
//quater factory cable dict

Route::post('stock_cable_amad_quater_entry_factory_area',[quater::class,'quater_cable_dict_factory']);
Route::get('quater_factory_cable_dict_list',[quater::class,'factory_stock_cable_dict_list']);
Route::get('quater_factory_cable_dict_list_search/',[quater::class,'factory_stock_cable_dict_search']);
Route::get('edit_stock_amad_quater_entry_factory_cable_dict/{id}',[quater::class,'showData_stock_factory_cable_dict']);
Route::post('edit_stock_amad_quater_entry_factory_cable_dict',[quater::class,'update_stock_factory_cable_dict']);
Route::get('delete_factory_cable_dict/{id}',[quater::class,'delete_cable_dict_factory']);
//quater fatuh cable dict

Route::post('stock_cable_amad_quater_entry_darul_fatuh',[quater::class,'quater_cable_dict_fatuh']);
Route::get('quater_fatuh_cable_dict_list',[quater::class,'fatuh_stock_cable_dict_list']);
Route::get('quater_fatuh_cable_dict_list_search/',[quater::class,'fatuh_stock_cable_dict_search']);
Route::get('edit_stock_amad_quater_entry_fatuh_cable_dict/{id}',[quater::class,'showData_stock_fatuh_cable_dict']);
Route::post('edit_stock_amad_quater_entry_fatuh_cable_dict',[quater::class,'update_stock_fatuh_cable_dict']);
Route::get('delete_fatuh_cable_dict/{id}',[quater::class,'delete_cable_dict_fatuh']);
//quater yaman cable dict

Route::post('stock_cable_amad_quater_entry_darul_yaman',[quater::class,'quater_cable_dict_yaman']);
Route::get('quater_yaman_cable_dict_list',[quater::class,'yaman_stock_cable_dict_list']);
Route::get('quater_yaman_cable_dict_list_search/',[quater::class,'yaman_stock_cable_dict_search']);
Route::get('edit_stock_amad_quater_entry_yaman_cable_dict/{id}',[quater::class,'showData_stock_yaman_cable_dict']);
Route::post('edit_stock_amad_quater_entry_yaman_cable_dict',[quater::class,'update_stock_yaman_cable_dict']);
Route::get('delete_yaman_cable_dict/{id}',[quater::class,'delete_cable_dict_yaman']);
//quater waqfeen cable dict

Route::post('stock_cable_amad_quater_entry_darul_waqfeen',[quater::class,'quater_cable_dict_waqfeen']);
Route::get('quater_waqfeen_cable_dict_list',[quater::class,'waqfeen_stock_cable_dict_list']);
Route::get('quater_waqfeen_cable_dict_list_search/',[quater::class,'waqfeen_stock_cable_dict_search']);
Route::get('edit_stock_amad_quater_entry_waqfeen_cable_dict/{id}',[quater::class,'showData_stock_waqfeen_cable_dict']);
Route::post('edit_stock_amad_quater_entry_waqfeen_cable_dict',[quater::class,'update_stock_waqfeen_cable_dict']);
Route::get('delete_waqfeen_cable_dict/{id}',[quater::class,'delete_cable_dict_waqfeen']);

//daftr  cable dict

Route::post('stock_cable_amad_daftr_entry',[daftr::class,'daftr_cable_dict_daftr']);
Route::get('daftr_stock_cable_dict_list',[daftr::class,'daftr_stock_cable_dict']);
Route::get('daftr_cable_dict_list_search/',[daftr::class,'daftr_stock_cable_dict_search']);
Route::get('edit_stock_amad_daftr_entry_cable_dict/{id}',[daftr::class,'showData_stock_daftr_cable_dict']);
Route::post('edit_stock_amad_daftr_entry_cable_dict',[daftr::class,'update_stock_daftr_cable_dict']);
Route::get('delete_daftr_cable_dict/{id}',[daftr::class,'delete_cable_dict_daftr']);
//quater paint yomiya bill

Route::post('quater_bill_paint_yomiya_entry',[quater::class,'quater_paint_yomiya_bill']);
Route::get('quater_bill_paint_yomiya',[quater::class,'quater_painter_yomiya_bill_get']);
//quater bill steel
Route::post('quater_bill_steel_entry',[quater::class,'quater_bill_steel']);
Route::get('quater_bill_steel_list',[quater::class,'quater_bill_steel_get']);
Route::get('delete_steel_bill/{id}',[quater::class,'delete_bill_steel']);

//tameer quater bill electric
Route::post('tameer_quater_bill_electric',[quater_tameer_controller::class,'electric_bill_tameer']);
Route::get('tameer_quater_bill_list',[quater_tameer_controller::class,'tameer_bill_elctric_list']);
//water tank bill electric
Route::post('water_tank_bill_electric',[ishya::class,'electric_bill_tank']);
Route::get('water_tank_bill_electric',[ishya::class,'tank_bill_elctric_list']);
//daftr paint yomiya bill

Route::post('daftr_bill_paint_yomiya_entry',[daftr::class,'daftr_bill_paint_yomiya']);
Route::get('daftr_stock_cable_dict_list',[daftr::class,'daftr_stock_cable_dict']);
//daftr bill steel
Route::post('daftr_bill_steel_entry',[daftr::class,'daftr_bill_steel']);
Route::get('daftr_bill_steel_list',[daftr::class,'daftr_bill_steel_get']);
Route::get('delete_steel_bill_daftr/{id}',[daftr::class,'delete_bill_steel_daftr']);

//water tank bill painter
Route::post('water_tank_bill_entry_painter',[ishya::class,'tank_bill_painter']);
Route::get('daftr_stock_cable_dic',[ishya::class,'daftr_stock_cable_dict']);
//tameer bill painter
Route::post('tameer_bill_entry_painter',[quater_tameer_controller::class,'tameer_bill_painter']);
Route::get('daftr_stock_cable_dict',[quater_tameer_controller::class,'daftr_stock_cable_dict']);

//tameer marbel
Route::view("/tameer_quater_marbel_entry","tameer_quater_marbel_entry");

Route::post('tameer_quater_marbel_entry',[quater_tameer_controller::class,'marbel_tameer']);
Route::get('tameer_stock_marbel_list',[quater_tameer_controller::class,'tameer_quater_marbel_get']);
Route::get('tameer_stock_marbel_list_search/',[quater_tameer_controller::class,'tameer_quater_marbel_search']);


//edit tameer quater marbel

Route::get('delete_marbel_tameer/{id}',[quater_tameer_controller::class,'delete_tank_marbel']);
Route::get('edit_stock_tank_marbel/{id}',[quater_tameer_controller::class,'showData_tank_marbel']);
Route::post('edit_stock_tank_marbel',[quater_tameer_controller::class,'update_tank_marbel']);

//edit water tank marbel

Route::get('delete_marbel_tank/{id}',[ishya::class,'delete_tank_marbel']);
Route::get('edit_stock_tank_marbel/{id}',[ishya::class,'showData_tank_marbel']);
Route::post('edit_stock_tank_marbel',[ishya::class,'update_tank_marbel']);
//water tank marbel
Route::view("/water_tank_marbel_entry","water_tank_marbel_entry");

Route::post('water_tank_marbel_entry',[ishya::class,'marbel_tank']);
Route::get('water_stock_marbel_list',[ishya::class,'water_tank_marbel_get']);

Route::get('water_stock_marbel_list_search/',[ishya::class,'water_tank_marbel_search']);

// quater chakar
Route::view("/stock_chakar_entry_darul_sadar","stock_chakar_entry_darul_sadar");

Route::post('stock_chakar_entry_darul_sadar',[quater::class,'quater_chakar_entry']);
Route::get('stock_chakar_list_darul_sadar',[quater::class,'quater_chakar_get']);
Route::get('stock_chakar_list_darul_sadar_search/',[quater::class,'quater_chakar_get_search']);
// daftr chakar
Route::view("/stock_chakar_entry_daftr","stock_chakar_entry_daftr");

Route::post('stock_chakar_entry_daftr',[daftr::class,'daftr_chakar_entry']);
Route::get('stock_chakar_list_daftr',[daftr::class,'daftr_chakar_get']);
Route::get('stock_chakar_list_daftr_search/',[daftr::class,'daftr_chakar_get_search']);
// tameer chakar
Route::view("/stock_chakar_entry_tameer","stock_chakar_entry_tameer");

Route::post('stock_chakar_entry_tameer',[quater_tameer_controller::class,'tameer_chakar_entry']);
Route::get('stock_chakar_list_tameer',[quater_tameer_controller::class,'tameer_chakar_get']);
Route::get('stock_chakar_list_tameer_search/',[quater_tameer_controller::class,'tameer_chakar_get_search']);


//edit quater chakar

Route::get('delete_quater_chakar/{id}',[quater::class,'quater_chakar_delete']);
Route::get('edit_chakar_quater_entry/{id}',[quater::class,'showData_quater_chakar']);
Route::post('edit_chakar_quater_entry',[quater::class,'update_quater_chakar']);
//edit daftr chakar

Route::get('delete_daftr_chakar/{id}',[daftr::class,'daftr_chakar_delete']);
Route::get('edit_chakar_daftr_entry/{id}',[daftr::class,'showData_daftr_chakar']);
Route::post('edit_chakar_daftr_entry',[daftr::class,'update_daftr_chakar']);
//edit tameer chakar

Route::get('delete_tameer_chakar/{id}',[quater_tameer_controller::class,'tameer_chakar_delete']);
Route::get('edit_chakar_tameer_entry/{id}',[quater_tameer_controller::class,'showData_tameer_chakar']);
Route::post('edit_chakar_tameer_entry',[quater_tameer_controller::class,'update_tameer_chakar']);
//

Route::view("/quater_stock_sadar_categores","quater_stock_sadar_categores");
Route::view("/quater_stock_nasar_categores","quater_stock_nasar_categores");
Route::view("/quater_stock_waqfeen_categores","quater_stock_waqfeen_categores");
Route::view("/quater_stock_fatuh_categores","quater_stock_fatuh_categores");
Route::view("/quater_stock_yaman_categores","quater_stock_yaman_categores");
Route::view("/quater_stock_factory_categores","quater_stock_factory_categores");
Route::view("/daftr_stock_categores","daftr_stock_categores");

Route::view("/quater_bill_chakar","quater_bill_chakar");
Route::view("/daftr_bill_chakar","daftr_bill_chakar");
Route::view("/tameer_bill_chakar","tameer_bill_chakar");
Route::view("/daftr_bill_allowance","daftr_bill_allowance");


//stock store categores
// Route::view("/stock_store_amad_quater_entry_darul_sadar","stock_store_amad_quater_entry_darul_sadar");
// Route::view("/stock_store_amad_quater_entry_darul_nasar","stock_store_amad_quater_entry_darul_nasar");
// Route::view("/stock_store_amad_quater_entry_darul_waqfeen","stock_store_amad_quater_entry_darul_waqfeen");
// Route::view("/stock_store_amad_quater_entry_darul_yaman","stock_store_amad_quater_entry_darul_yaman");
// Route::view("/stock_store_amad_quater_entry_darul_fatuh","stock_store_amad_quater_entry_darul_fatuh");
// Route::view("/stock_store_amad_quater_entry_factory_area","stock_store_amad_quater_entry_factory_area");

//stock marbel categores
Route::view("/quater_marbel_factory_categores","quater_stock_factory_categores");
Route::view("/daftr_bill_carpenter","daftr_bill_carpenter");
Route::view("/quater_bill_carpenter","quater_bill_carpenter");

// Route::view("/stock_marbel_amad_quater_entry_darul_sadar","stock_marbel_amad_quater_entry_darul_sadar");
// Route::view("/stock_marbel_amad_quater_entry_darul_nasar","stock_marbel_amad_quater_entry_darul_nasar");
// Route::view("/stock_marbel_amad_quater_entry_darul_waqfeen","stock_marbel_amad_quater_entry_darul_waqfeen");
// Route::view("/stock_marbel_amad_quater_entry_darul_yaman","stock_marbel_amad_quater_entry_darul_yaman");
// Route::view("/stock_marbel_amad_quater_entry_darul_fatuh","stock_marbel_amad_quater_entry_darul_fatuh");
// Route::view("/stock_marbel_amad_quater_entry_factory_area","stock_marbel_amad_quater_entry_factory_area");
//stock carpenter categores
Route::view("/quater_carpenter_factory_categores","quater_stock_factory_categores");
// Route::view("/stock_carpenter_amad_quater_entry_darul_sadar","stock_carpenter_amad_quater_entry_darul_sadar");
// Route::view("/stock_carpenter_amad_quater_entry_darul_nasar","stock_carpenter_amad_quater_entry_darul_nasar");
// Route::view("/stock_carpenter_amad_quater_entry_darul_waqfeen","stock_carpenter_amad_quater_entry_darul_waqfeen");
// Route::view("/stock_carpenter_amad_quater_entry_darul_yaman","stock_carpenter_amad_quater_entry_darul_yaman");
// Route::view("/stock_carpenter_amad_quater_entry_darul_fatuh","stock_carpenter_amad_quater_entry_darul_fatuh");
// Route::view("/stock_carpenter_amad_quater_entry_factory_area","stock_carpenter_amad_quater_entry_factory_area");
//stock mistri categores
Route::view("/quater_mistri_factory_categores","quater_mistri_factory_categores");
// Route::view("/stock_mistri_amad_quater_entry_darul_sadar","stock_mistri_amad_quater_entry_darul_sadar");
// Route::view("/stock_mistri_amad_quater_entry_darul_nasar","stock_mistri_amad_quater_entry_darul_nasar");
// Route::view("/stock_mistri_amad_quater_entry_darul_waqfeen","stock_mistri_amad_quater_entry_darul_waqfeen");
// Route::view("/stock_mistri_amad_quater_entry_darul_yaman","stock_mistri_amad_quater_entry_darul_yaman");
// Route::view("/stock_mistri_amad_quater_entry_darul_fatuh","stock_mistri_amad_quater_entry_darul_fatuh");
// Route::view("/stock_mistri_amad_quater_entry_factory_area","stock_mistri_amad_quater_entry_factory_area");
//stock cable categores
Route::view("/quater_cable_factory_categores","quater_cable_factory_categores");
// Route::view("/stock_cable_amad_quater_entry_darul_sadar","stock_cable_amad_quater_entry_darul_sadar");
// Route::view("/stock_cable_amad_quater_entry_darul_nasar","stock_cable_amad_quater_entry_darul_nasar");
// Route::view("/stock_cable_amad_quater_entry_darul_waqfeen","stock_cable_amad_quater_entry_darul_waqfeen");
// Route::view("/stock_cable_amad_quater_entry_darul_yaman","stock_cable_amad_quater_entry_darul_yaman");
// Route::view("/stock_cable_amad_quater_entry_darul_fatuh","stock_cable_amad_quater_entry_darul_fatuh");
// Route::view("/stock_cable_amad_quater_entry_factory_area","stock_cable_amad_quater_entry_factory_area");
//stock painter categores
Route::view("/quater_painter_factory_categores","quater_painter_factory_categores");

// Route::view("/stock_painter_amad_quater_entry_darul_sadar","stock_painter_amad_quater_entry_darul_sadar");
// Route::view("/stock_painter_amad_quater_entry_darul_nasar","stock_painter_amad_quater_entry_darul_nasar");
// Route::view("/stock_painter_amad_quater_entry_darul_waqfeen","stock_painter_amad_quater_entry_darul_waqfeen");
// Route::view("/stock_painter_amad_quater_entry_darul_yaman","stock_painter_amad_quater_entry_darul_yaman");
// Route::view("/stock_painter_amad_quater_entry_darul_fatuh","stock_painter_amad_quater_entry_darul_fatuh");
// Route::view("/stock_painter_amad_quater_entry_factory_area","stock_painter_amad_quater_entry_factory_area");
//stock daftr categores
// Route::view("/stock_store_amad_daftr_entry","stock_store_amad_daftr_entry");
// Route::view("/stock_marbel_amad_daftr_entry","stock_marbel_amad_daftr_entry");
// Route::view("/stock_carpenter_amad_daftr_entry","stock_carpenter_amad_daftr_entry");
// Route::view("/stock_mistri_amad_daftr_entry","stock_mistri_amad_daftr_entry");
// Route::view("/stock_cable_amad_daftr_entry","stock_cable_amad_daftr_entry");
// Route::view("/stock_painter_amad_daftr_entry","stock_painter_amad_daftr_entry");
Route::view("/water_tank_stock_categores","water_tank_stock_categores");
Route::view("/stock_muramat_sadar_categores","stock_muramat_sadar_categores");
Route::view("/stock_muramat_nasar_categores","stock_muramat_nasar_categores");
Route::view("/stock_muramat_waqfeen_categores","stock_muramat_waqfeen_categores");
Route::view("/stock_muramat_yaman_categores","stock_muramat_yaman_categores");
Route::view("/stock_muramat_fatuh_categores","stock_muramat_fatuh_categores");
Route::view("/stock_muramat_factory_categores","stock_muramat_factory_categores");



Route::view("/tameer_quater_stock_categores","tameer_quater_stock_categores");

Route::view("/stock_mistri_sadar_bill","stock_mistri_sadar_bill");
Route::view("/water_tank_bill_entry","water_tank_bill_entry");
Route::view("/bill_tameer_quater_entry","bill_tameer_quater_entry");
Route::view("/tameer_quater_bill_electric","tameer_quater_bill_electric");
Route::view("/bill_quater_categores","bill_quater_categores");
Route::view("/bill_daftr_categores","bill_daftr_categores");
Route::view("/tameer_bill_list_categores","tameer_bill_list_categores");
Route::view("/tank_bill_list_categores","tank_bill_list_categores");
Route::view("/bill_tank_thekedar","bill_tank_thekedar");
Route::view("/tank_bill_electric","tank_bill_electric");
Route::view("/tank_bill_painter","tank_bill_painter");
Route::view("/tank_bill_wood","tank_bill_wood");
Route::view("/bill_tank_steel_decorator","bill_tank_steel_decorator");



Route::view("/tameer_bill_painter","tameer_bill_painter");
Route::view("/tameer_bill_marbel","tameer_bill_marbel");
Route::view("/tank_bill_marbel","tank_bill_marbel");

Route::view("/quater_bill_entry","quater_bill_entry");
Route::view("/daftr_bill_entry","daftr_bill_entry");
Route::view("/quater_bill_mistri","quater_bill_mistri");
Route::view("/quater_bill_cable_dict_list","quater_bill_cable_dict_list");
Route::view("/daftr_bill_mistri","daftr_bill_mistri");
Route::view("/daftr_bill_cable_dict_list","daftr_bill_cable_dict_list");
Route::view("/daftr_bill_steel_list","daftr_bill_steel_list");
Route::view("/daftr_bill_chair_list","daftr_bill_chair_list");
Route::view("/bill_tameer_steel_decorator","bill_tameer_steel_decorator");
Route::view("/quater_bill_yomiya_carpenter","quater_bill_yomiya_carpenter");
Route::view("/daftr_bill_yomiya_carpenter","daftr_bill_yomiya_carpenter");


Route::view("/ishya_rate_categores","ishya_rate_categores");
Route::view("/quater_tameer_list_categores","quater_tameer_list_categores");
Route::view("/amad_water_tank_entry","amad_water_tank_entry");
Route::view("/water_tank_list_categores","water_tank_list_categores");
Route::view("/quater_tameer_categores","quater_tameer_categores");
Route::view("/dashboard","dashboard");
Route::view("/quater_categores","quater_categores");
Route::view("/stock_amad_quater_entry","stock_amad_quater_entry");
Route::view("/stock_muramat_quater_categores","stock_muramat_quater_categores");
Route::view("/stock_muramat_daftr_categores","stock_muramat_daftr_categores");

Route::view("/water_tank_categores","water_tank_categores");
Route::view("/water_tank_entry","water_tank_entry");


