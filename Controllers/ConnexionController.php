<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mairie;

class ConnexionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function __invoke(Request $request)
    {
        //

    }
  
    public function identify()
    {
        return view ('connexion');
    }


    public function createagt(){
        return view('agentcreate');
    }
    public function agtvalider(Request $request)
    {
      $param = $request->all();
     
      Agent::create($param);

     
      return redirect()->Route('liste')->with('Enregistré avec succes'); 
   
    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->only('login_agts', 'pwd_agts');

        if (Agent::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('principal');
        }
    }
}