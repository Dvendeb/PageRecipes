<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegationController extends Controller
{
    public function welcom(){
        return view("welcomPublic");
    }
    public function signUp(){
        return view("signIn");
    }
}
