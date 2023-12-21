<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FoodManage;
use App\Models\Category;

class FoodDetailController extends Controller
{
    public function foodcontent($id){
        $food_manages=FoodManage::all()->where('id',$id);
        return view('product')->with('products',$products);
    }
}
