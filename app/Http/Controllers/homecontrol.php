<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class homecontrol extends Controller
{
    public function gethome(){
    try{
        $home=Home::all();
        return response()->json($home);
    }catch(Exception $e){
        Log::err($e);

    }
}
}