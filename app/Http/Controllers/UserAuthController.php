<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function login(Request $request){
        return "Login";
    }

    public function signup(Request $request){
        return "Signup";
    }
}
