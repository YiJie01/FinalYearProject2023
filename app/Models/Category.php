<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['id','name'];

    public function food(){ 

        return $this->hasMany('App\Models\FoodManage');
    }

    public function myCart(){

        return $this->hasMany('App\Models\myCart');    

    }
}
