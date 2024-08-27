<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserLoginMiddleware');
    }
    public function home(Request $request){
        switch ($request->method()){
            case 'GET':
                return view('panel/home');
        }
    }
}
