<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoControl extends Controller
{
    public function getlien(){
        try{
            $photo=Photo::all();
            return response()->json($photo);
        }catch(Exception $e){
            Log::err($e);

        }
    }
}
