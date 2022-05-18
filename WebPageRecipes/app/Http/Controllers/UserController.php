<?php

namespace App\Http\Controllers;

use App\Models\Users;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function verifyUser(Request $data){
        $user=Users::where('username',$data->username)->first();
        if(!$user){
            return view("singIn",["status"=>"error","message"=>"Los datos ingresados son incorrectos"]);
        }
        if(!Hash::check($data->password,$user->password)){
            return view("singIn",["status"=>"error","message"=>"Los datos ingresados son incorrectos"]);
        }

    }
}
