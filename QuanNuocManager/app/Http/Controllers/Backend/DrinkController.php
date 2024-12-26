<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drink;

class DrinkController extends Controller
{
    public function listdrinks(){
        $drinks = Drink::all();
        return view('menu', compact('drinks'));
    }

    public function deleteDrink(Request $request)
    {
        $id = $request->id;

        $drink = Drink::findOrFail($id);
        $student->delete();

        $drinks = Drink::all();
        return view('menu', compact('drinks'));
    }

    public function editDrink(Request $request)
    {
        $id = $request->id;
        $drinks = Drink::findOrFail($id);
        
        return view('editDrink', compact('drinks'));
    }

    public function saveDrink(Request $request)
    {
        $id = $request->input("id");
        $drinkPrice = $request->input("drinkPrice");
        
        Drink:where('drinkName',$drinkName)->update(["drinkPrice"=>$drinkPrice]);

        $drinks = Drink::all();
        return view('menu', compact('drinks'));
    }
}
