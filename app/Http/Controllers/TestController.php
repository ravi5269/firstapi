<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function first(Request $req)
    {
        return response()->json(['mag'=>'hello word']);
    }
    public function login(Request $req){
        if ($req ->login) {
            $uname = $req->uname;
            $pass = $req->pass;

            return response()->json(['username'=> $uname,'password'=> $pass]);
        }

    }

}
