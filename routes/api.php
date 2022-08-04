<?php

use App\Http\Controllers\InformationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;   
use App\Models\Users;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Guarda el usuario en la base de datos
Route::post('/saveUsuario', function (Request $request){
    $user = new UsersController();
    $user->store($request);
});

Route::get('/getUsuarios', function (){
    $user = new UsersController();
    return $user->getUsers();
});

Route::post('/createUsuario', function (Request $request){
    $users = new UsersController();
    return $users->create($request);
});

Route::get('/getUser/{id}', function ($id){
    $user = new UsersController();
    return $user->getUser($id);
});

Route::post('/updateUser/{id}', function (Request $id){
    $user = new UsersController();
    return $user->update($id);
});

Route::post('/saveInformacion', function (Request $request){
    $user = new InformationController();
    return $user->store($request);
});

