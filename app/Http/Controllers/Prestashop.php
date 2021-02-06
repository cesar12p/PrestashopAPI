<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Prestashop extends Controller
{
    public function list(){
        $consulta = DB::table('psls_product')->get();
        dd($consulta->toJson());
    }
    
}
