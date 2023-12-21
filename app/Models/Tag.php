<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable=['id','tagid','productid'];

    public function food(){

        return $this->hasMany('App\FoodManage');

    }
}
