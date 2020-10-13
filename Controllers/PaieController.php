<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PaieController extends Controller
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
    public function paieRedev()
    {
        Return view('paiement');
    }

    // public function index()
    // {
    //     $users = DB::select('select * from users where active = ?', [1]);

    //     return view('user.index', ['users' => $users]);
    // }
}   