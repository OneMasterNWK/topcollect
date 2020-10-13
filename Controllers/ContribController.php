<?php

namespace App\Http\Controllers;
use App\Contribuable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ContribController extends Controller
{
  public function Contribform()
  {
      Return view('enreg');
  }

  public function listContrib(Request $request)
  {
     $contrib = Contribuable::all();
 
     Return view('liste')->with('collection',$contrib);
  }

    public function insertdata(Request $request)
    {
      $param = $request->all();
     
      Contribuable::create($param);

     
      return redirect()->Route('liste')->with('Enregistré avec succes'); 
   
    }

    public function locate(){
      return view('position');
    }

    public function listMairie(Request $request)
    {
        $mairie = Mairie::all('n_mairie');
 
     Return view('layouts/layout')->with('collection',$mairie);
    }
}
