<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
Use Session;

class CategoryController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
        
    }


    public function add(){
        $r=request();   

        $addCategory=Category::create([
            'id'=>$r->ID, 
            'name'=>$r->name, 
        
    ]);
    

    return view('addCategory')->with('message','Category create successfully');
    }

    public function show(){
        $categories=DB::table('categories')
        ->get();
        //->paginate(6);
        return view('FoodCategory')->with('categories',$categories);
    }

    public function delete($id){
        $categories=Category::find($id);
        $categories->delete();
        return redirect()->route('FoodCategory')->with('deletemessage','Category create Deleted');
    }
    
    public function edit($id){
        $category=Category::all()->where('id',$id);
        return view('editCategory')->with('categories',$category);
    }

    public function update(Request $r){
        $r=request();
        $category=Category::find($r->id);
        $category->name=$r->name;
        $category->save();
        return redirect()->route('FoodCategory');

        Session()->flash('message', 'New Category has been update successfully');
    }
}
