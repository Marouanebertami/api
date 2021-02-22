<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cour;

class CourController extends Controller
{
    public function getCour($id){
        try{
            $cour = Cour::find($id);
            var_dump($cour);
        }catch(Exception $e){
            // Return Error
        }
    }

    public function all(){
        try{
            $cours = Cour::all();
            var_dump($cours);
        }catch(Exception $e){
            // Return Error
        }
    }
}
