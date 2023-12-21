<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use App\Models\Reserve;
Use Session;

class ReserveController extends Controller
{
    public function book(){
        $r=request();   

        $reserves=Reserve::create([
            'id'=>$r->bookingID, 
            'name'=>$r->name,
            'phone'=>$r->phone,
            'email'=>$r->email,
            'noperson'=>$r->noperson,
            'date'=>$r->date,
            'time'=>$r->time,

    ]);
    Session::flash('success','Booking create successfully');
    return view('UserReserve');

    }

    public function showBook(){
        $reserves=Reserve::all();
        return view('AdminReserve')->with('reserves',$reserves);
    }

    public function deleteBook($id){
        $reserves=Reserve::find($id);
        $reserves->delete();
        return redirect()->route('AdminReserve');
    }
}
