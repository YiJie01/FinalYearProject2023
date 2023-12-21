<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\FoodManage;
use App\Models\Category;

Use Session;

class FoodController extends Controller
{
    public function create(){
        
        return view('addFood') ->with('categories',Category::all());

    }
    

    public function add(){
        $r=request(); 
        $image=$r->file('food-image');        
        $image->move('images',$image->getClientOriginalName());                
        $imageName=$image->getClientOriginalName();   

        $addFood=FoodManage::create([
            'id'=>$r->foodid,
            'name'=>$r->foodname, 
            'categoryID'=>$r->categoryID,
            'price'=>$r->price,
            'image'=>$imageName,
            'quantity'=>$r->quantity,
            'description'=>$r->description,    

    ]);


    return view('foodManage')->with('message','Food create successfully');
   

    }

    public function show(){
        //$foods=FoodManage::all();
        $food_manages=DB::table('food_manages')
        ->leftjoin('categories', 'categories.id', '=', 'categoryID')
        ->select('categories.name as name','categories.id as id','food_manages.*')
        ->get();
        //dd($food_manages);    
        return view('addFood', compact('food_manages'));
    }


    public function showCategory(){
        $categories=Category::all();
        return view('addFood')->with('categories',$categories);
    }

    

    //public function foodlist(){
    //    $food_manages=DB::table('food_manages')
    //    ->leftjoin('categories', 'categories.id', '=', 'categories.categoryID')
    //    ->select('categories.name as catname','categories.id as catid','food_manages.*');
        
    //    return view('FoodManage')->with('food_manages',$food_manages);
    //}

    public function foodmenulist(){
        $food_manages=DB::table('food_manages')
        //->get();
        ->paginate(6);
        return view('FoodManage')->with('food_manages',$food_manages);
    }

    public function userfoodmenulist(){
        $food_manages=DB::table('food_manages')
        //->get();
        ->paginate(6);
        return view('UserHome')->with('food_manages',$food_manages);
    }

    //delete food
    public function delete($foodid){
        $food_manages=FoodManage::find($foodid);
        $food_manages->delete();
        return redirect()->route('FoodManage');
    }
    //end delete food

    //edit food
    public function edit($foodid){
        $food_manages=FoodManage::all()->where('id',$foodid);
        return view('editFood')->with('food_manages',$food_manages)
                                ->with('categories',Category::all());
        
    }

    public function editCategory(){
        $categories=Category::all();
        return view('editFood')->with('categories',$categories);
    }


    //end edit food

    //update food 
    
    public function update(Request $r){
        $r=request();
        $food_manages=Category::find($r->id);
        $food_manages->name=$r->name;
        $food_manages->save();
        return redirect()->route('FoodManage');

        session()->flash('message', 'New Category has been update successfully');
    }

    public function updatefood(Request $r){
        $r=request();
        $food_manages=FoodManage::find($r->id);
        if($r->file('food-image')!=''){
            $image=$r->file('food-image');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $food_manages->image=$imageName;

        }
        $food_manages->foodname=$r->foodname;
        $food_manages->categoryID=$r->categoryID;
        $food_manages->price=$r->price;
        $food_manages->quantity=$r->quantity;
        $food_manages->description=$r->description;
        $products->save();
        
        return redirect()->route('FoodManage');
    }
    //end update food

    //show all food in menu page

    public function userfoodmenu(){
        $food_manages = FoodManage::paginate(8);  
        return view('FoodMenu')->with('food_manages',$food_manages);
        

    }

    


    public function foodcontent($id){
        $food_manages=FoodManage::all()->where('id',$id);
        return view('foodpage')->with('food_manages',$food_manages);
    }
    
    //end show
}


// category cant link to food database  ***拜5 开始 ： 到拜日要做到add to cart and payment（include interface）

// new : Update food come out POST problem , cant be update