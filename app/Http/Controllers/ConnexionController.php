<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
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
        //return $request->all();
        //$credentials = $request->only('identifiant', 'password');
        
        //Loggin...
    Log::debug('TopCollecte : Request for login '.json_encode($request->all()).''."\r\n");

        //Validation rules...
        $validator = Validator::make($request->all(), [
            'username' => 'bail|required',
            'password' => 'bail|required',
        ]);

        
  
           if ($validator->fails()) {
  
        //Loggin Validation Error...
        Log::debug('TopCollecte : Validation Error  : ' . $validator->errors()->first() . "\r\n");

                              
                return [
                'status' => 'error',
                'code' => 900,
                'reason' => $validator->errors()->first()
            ];

                
          }

        //Getting input...
        $username = $request->username;
        $password = $request->password;
        
        //return redirect()->intended('principal');
        
       // $data = $request->session()->all();
        
        //return response()->json($data);
        
        
        //return response()->json($is_authenticated);
        
        //check for valid api user
   try{

    $check_agent = DB::table('agents')
                       ->select('login_agts','pwd_agts')
                       ->where('login_agts', $username)
                       ->get()->
                       first();

   
   } // end of try..

    catch(\Illuminate\Database\QueryException $ex){ 
            //Loggin  Execptions..
                    Log::debug('Getting agents details Execptions : '.$ex->getMessage()."\r\n");
        
                    $status = array(
                        'status' => 411,
                        'message' =>'An error occured while getting agent details',
                        'data' => null,
                    );
        
                return response()->json($status);
        }
        
       // return response()->json($check_agent);
        
         if(is_object($check_agent) && is_object($check_agent) !== null)
    {

       $db_agent_password = $check_agent->pwd_agts;


    } // end of if is_object...
    
    else
    {
         return [
                'status' => 'error',
                'code' => 411,
                'reason' => "Identifiants non valide"
            ];
        
    }
    
    
     //Verification of hash password..
          //posted password , database password..
if(password_verify($password, $db_agent_password)) {

  //Loggin ...
Log::info('Agent Authorized'."\r\n");

  //Api user verified...
    // If the password inputs matched the hashed password in the database
   // return true;
   //Set session admin...
   $request->session()->put('agent_authenticated', true , 'username', $username);
   
   //redirect to principal page...
    return redirect()->intended('principal');
   
  }// end of password_verify ...


 else

  

  {

     //Loggin ...
Log::info('Could not verify agent. Password Verification failed'."\r\n");

     return [
                'status' => 'error',
                'code' => 411,
                'reason' => "Identifiants non valide"
            ];

  }
  
        
       
    }
}