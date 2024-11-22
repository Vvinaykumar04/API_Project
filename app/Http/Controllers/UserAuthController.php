<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAuthController extends Controller
{
    public function login(Request $request){
        return "Login function";
    }

    public function signup(Request $request){
        $input = $request->all();
        $input["password"] = bcrypt($input["password"]);
        $user = User::create($input);
        $success["token"] = $user->createToken("MyApp")->plainTextToken;
        $user["name"] = $user->name;
        return["success"=>true,"resule"=>$success,"msg"=>"User register successfully"];
    }
}
