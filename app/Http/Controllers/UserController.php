<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Validator;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller


{

function login(Request $req)
    {

       

         $user= User::where(['email'=>$req->email])->first();
      
         if(!$user || !Hash::check($req->password,$user->password))
         {
             return "username or password is not correct";
         }
         else
         {
             $req->session()->put('user',$user);
             return redirect('/');
         }
          }
    function register(Request $req)
    {
        $rules=array(
            "name"=>"required | string | max:82 | unique:users",
            "email"=>"required | email | unique:users",

            "confirm_password"=>'required',
            'password' => ['required_with:confirm_password|same:confirm_password',
            'min:8',
            'max:32',
            ]

        );
          $Validator = Validator::make($req->all(),$rules);
          if($Validator->fails()){
           return view('register')->withErrors($Validator);
          }else{

        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->confirm_password=Hash::make($req->confirm_password);
        $user->save();

        return view("signin",$user);

         }

    }
    function show(){
        if(Session::has('user')){
            $userid= Session::get('user')['id'];
             $data = User::where('id',$userid)->get();
             return view('profile_list',['items'=>$data]);
        }else{
            return redirect('/login');
        }
      }

      function delete($id){
        $data= User::find($id);
        $data->delete();
        return redirect('profile_list');
      }

      function showData($id){
        $data= User::find($id);
        return view('profile',['data'=>$data]);
      }
      function update(Request $req){
        $data = User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        $data->confirm_password=Hash::make($req->confirm_password);
        $data->save();
        return redirect('profile_list');
      }


}

