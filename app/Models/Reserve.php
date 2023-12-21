<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reserve extends Model
{
    use HasFactory;

    protected $fillable=['name','phone','email','noperson','date','time'];

    public function food(){ 

        return $this->hasMany('App\Models\FoodManage');
    }

    public function user(){

        return $this->belongsTo('App\User');

    }
}