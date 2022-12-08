<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\lolEloboost;
use Mockery\Undefined;

class Comprar extends Controller
{
    public function index ($jogo,$tipo) {
        if($jogo == "sabine"){
            $lol = lolEloboost::all();
        }
        else{
            dd("ola mundo");
        }
          
        
        return view('produtos', [
           'jogo' => $lol 
     ]);
    }
}
