<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\FoodManage;
use App\Models\User;
use App\Models\myCart;
use App\Models\Order;
use Auth;
Use Session;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function add(){
        $r=request(); 
        
        $addOrder=Order::create([ 
            
            'userID'=>Auth::id(), 
            'foodID'=>$r->id,
            'amount'=>$r->amount,             
            'paymentStatus'=>'unfinished',                 
                       
        ]);
        
        $orderID = $addOrder->id;

        $items = $r->input('item');
    
        foreach ($items as $item => $value) {
            $cart = myCart::find($value);
            $cart->orderID = $orderID;
            $cart->save();
        

    }

    Session::flash('success',"Order succesful!"); 

    return redirect()->route('userOrder');
    
}

    public function showorder(){

        $orders=DB::table('orders')
        ->leftjoin('my_carts', 'orders.id', '=', 'my_carts.orderID')
        ->leftjoin('food_manages', 'food_manages.id', '=', 'my_carts.foodID')
        ->select('my_carts.*','orders.*','food_manages.*','my_carts.quantity as quantity')
        ->where('orders.userID','=',Auth::id())
        ->get();
        //->paginate(3);       
        return view('userOrder')->with('orders',$orders);
    }

    public function adminshoworder(){

        $orders=DB::table('orders')
        ->leftjoin('my_carts', 'orders.id', '=', 'my_carts.orderID')
        ->leftjoin('food_manages', 'food_manages.id', '=', 'my_carts.foodID')
        ->select('my_carts.*','orders.*','food_manages.*','my_carts.quantity as quantity')
        ->where('orders.userID','=',Auth::id())
        ->get();
        //->paginate(3);       
        return view('AdminOrder')->with('orders',$orders);
    }

    public function pending($id){
        $orders=Order::find($id);
        $orders->paymentStatus ='pending';
        $orders->save();

        return redirect()->back();
    }

    public function paymented($id){
        $orders=Order::find($id);
        $orders->paymentStatus ='paymented';
        $orders->save();

        return redirect()->back();
    }


}
