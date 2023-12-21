<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myCart extends Model
{
    use HasFactory;

    protected $fillable=['orderID','userID','quantity','foodID'];

    
    public function food(){ 

        return $this->hasMany('App\Models\FoodManage');
    }

    public function user(){

        return $this->belongsTo('App\User');

    }
}
