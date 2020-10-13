<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mairie;
class TopEnvi extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createzone(){
        return view('zone');
    }

    public function validezone(Request $request)
    {
        $param = $request->all();
     
        Mairie::create($param);
  
       
        return redirect()->Route('principal')->with('Enregistré avec succes'); 
    }

    
}
