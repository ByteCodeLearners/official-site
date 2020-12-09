<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getAllUsers(Request $request)
    {
        $userDetails=Users::with("userDetails")
            ->where("role","user")
            ->get();
        return response()->json($userDetails
            ,200);
    }
    public function makeLogin(Request $request)
    {
        $login_data=[
            "user_name"=>$request["user_name"],
            "password"=>$request["password"],
            "role"=>"user"
        ];
        $loginAttempt=Auth::attempt($login_data);
        if(empty($loginAttempt))
        {
            return response()->json("invalid credentials",401);
        }
        $token=Auth::user()->createToken("member")->accessToken;
        return response()->json(["token"=>$token], 202);
    }
}
