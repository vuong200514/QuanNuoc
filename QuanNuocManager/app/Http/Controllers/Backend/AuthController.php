<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function tenquan(){
        $ten = 'BlackPink Coffe';
        return view('home', compact('ten'));
    }

    public function __construct(){

    }

    public function login(){

        return view('Backend.auth.login');
    }


}
