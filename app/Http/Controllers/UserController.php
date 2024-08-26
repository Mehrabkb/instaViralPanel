<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        switch ($request->method()){
            case 'GET':
                return view('user.login');
        }
    }
}
