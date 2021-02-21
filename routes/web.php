<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexformController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/indexform','indexform');
Route::post('/insert',[IndexformController::class,'insert']);
Route::post('/insertf',[IndexformController::class,'insertf']);
Route::post('/insertm',[IndexformController::class,'insertm']);
Route::post('/insertc',[IndexformController::class,'insertc']);
Route::get('/indexlist',[IndexformController::class,'show']);
Route::get('/showdetails',[IndexformController::class,'fullform']);
Route::get('/fatherlist/{id}',[IndexformController::class,'fatherlist']);
Route::view('/fatherlist','fatherlist');
Route::get('/motherlist/{id}',[IndexformController::class,'motherlist']);
Route::get('/childrenlist/{id}',[IndexformController::class,'childrenlist']);
Route::view('/fatherform','fatherform');
Route::view('/motheform','motherform');

//Route::view('profile','profile');