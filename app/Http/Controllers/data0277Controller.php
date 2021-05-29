<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data0277_Model;
use Illuminate\Support\Facades\DB;

class data0277Controller extends Controller
{
    //
    public function getAllPost(){
       return view($anggota = DB::table('buku')->get());
        
    }
}
