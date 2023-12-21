<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\FoodManage;
use App\Models\User;
use App\Models\myCart;
use Auth;

Use Session;

class CartController extends Controller
{
    public function __construct()
        {
        $this->middleware('auth');
        
        }

    public function add(){ 

        $r=request(); 
        $addCategory=myCart::create([    
            
            'quantity'=>$r->quantity,             
            'orderID'=>'',
            'foodID'=>$r->id,                 
            'userID'=>Auth::id(), 
                        
        ]);
        Session::flash('success',"Food add succesful!");   


        return redirect()->route('usercart');
    }

    public function showcart(){
        $carts=DB::table('my_carts')
        ->leftjoin('food_manages','food_manages.id','=','my_carts.foodID')
        ->select('my_carts.id as cid','food_manages.*')
        ->where('my_carts.orderID','=','')//'' because haven't make payment
        ->where('my_carts.userID','=',Auth::id())
        // 还没完 ， database加 when pay时做 为了 表示还没还钱是0 ，还了是1 （1 的update做在payment）
        ->get();

        return view('usercart')->with('carts',$carts);
    }

    public function delete($id){
        $carts=myCart::find($id);
        $carts->delete();
        return redirect()->route('usercart');

    }


}
