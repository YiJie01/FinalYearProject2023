<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sortalbe;

class FoodManage extends Model
{
    use HasFactory;

    protected $fillable=['name','categoryID','price','image','quantity','description'];
    protected $primaryKey = 'id';

    public function categorty(){
        return $this->belongsTo('App\Category');
    }
    
    
    public function myCart(){

        return $this->hasMany('App\myCart'); 

    }
 

}
