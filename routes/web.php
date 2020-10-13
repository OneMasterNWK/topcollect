<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ContribController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaieController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Foundation\Auth\User;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'info']);
Route::get('/connexion', [ConnexionController::class, 'identify']);
Route::post('/auth', [ConnexionController::class, 'authenticate']);
//route menu de l'application
Route::get('/principal', [HomeController::class, 'interface']);
Route::get('/paiement', [PaieController::class, 'paieRedev']);
Route::get('/creation', [ContribController::class, 'Contribform']);
Route::get('/localisation', [ContribController::class, 'locate']);
Route::get('/creation_agent', [ConnexionController::class, 'createagt']);
Route::get('/creation_zone', [ConnexionController::class, 'createzone']);
//Route::get('/liste', ['as' => 'liste_contribuable', 'uses' => 'ContribController@listContrib']);

//Vous pouvez également spécifier des noms de route pour les actions du contrôleur:
Route::post('/validation', [ContribController::class, 'insertdata'])->name('validation');
Route::post('/zonevalider', [TopEnvi::class, 'validezone'])->name('zonevalider');
Route::post('/agentvalider', [TopEnvi::class, 'agtvalider'])->name('agentvalider');
Route::get('/liste_contribuable', [ContribController::class, 'listContrib'])->name('liste');
Route::get('/session', [ContribController::class, 'listMairie']);

//   Route::controllers([
//      'auth'=> 'Auth\AuthController',
//     'password' => 'Auth\PasswordController', 
//   ]);


