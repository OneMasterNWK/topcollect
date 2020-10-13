<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function interface(Request $request)
    {   
        $is_authenticated = $request->session()->get('agent_authenticated');
        
        if($is_authenticated == true)
        {
            return view('principal');
        }
        else
        {   
            
             return redirect()->intended('connexion');
            
        }
    }
    public function info()
    {
        return view('index');
    }
}
