<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drink;

class DrinkController extends Controller
{
    public function tenquan(){
        $ten = 'BlackPink Coffe';
        return view('home', compact('ten'));
    }
}
