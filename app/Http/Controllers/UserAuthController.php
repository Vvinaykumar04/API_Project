<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function login(Request $request){
        $user = User::where("email",$request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return ["result"=>"User not found","Success"=>false]; 
        }else{
            $success["token"] = $user->createToken("MyApp")->plainTextToken;
            $user["name"] = $user->name;
            return["success"=>true,"result"=>$success,"msg"=>"User login successfully"];
        }
    }

    public function signup(Request $request){
        $input = $request->all();
        $input["password"] = bcrypt($input["password"]);
        $user = User::create($input);
        $success["token"] = $user->createToken("MyApp")->plainTextToken;
        $user["name"] = $user->name;
        return["success"=>true,"result"=>$success,"msg"=>"User register successfully"];
    }
}
