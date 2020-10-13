<?php

namespace App\Http\Controllers;

use App\Contribuable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LinkController extends Controller
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

   

   // valider les formaulaires sur les contribuables
   
   

    // public function index()
    // {
    //     $users = DB::select('select * from users where active = ?', [1]);

    //     return view('user.index', ['users' => $users]);
    // }
    
    
    
   

    public function locateLink()
    {
        Return view ('layouts/layout');
    }

   
}
 