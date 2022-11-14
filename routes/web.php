<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\RGeneralController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DIController;
use App\Http\Controllers\DIConstructorController;
use App\Http\Controllers\bladeController;
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

Route::get('/page1', [GeneralController::class,'index']);
Route::get('/page2', 'App\Http\Controllers\GeneralController@index');
Route::get('/page3',[
    'uses'=> 'App\Http\Controllers\GeneralController@index',
    'as' => 'page3'
    ]);
Route::resource('RGeneral', RGeneralController::class );

Route::get('/BasicPlain', function () {
    return "hello team";
});

Route::get('/BasicJSON', function () {
    return response()->json(['name'=>'ali ibrahim', 'age'=> 27]);
});


Route::get('/BasicHeader', function () {
    return response()->json(['name'=>'ali ibrahim', 'age'=> 27]) ->header('Content-Type', 'text/plain');
});

Route::get('/Parameter/{id}', function ($id) {
    echo 'The passed id is :' . $id;
});


Route::get('/Parametre2/{id}', [GeneralController::class,'parametre'])->name("ali");
Route::post("/postdata",[GeneralController::class,'postdata']);
Route::post("/postdata2",[GeneralController::class,'postdata2']);




Route::resource('category', CategoryController::class );


Route::get('/testDI', [DIController::class,'index']);
Route::get('/testDI2', [DIConstructorController::class,'index']);

Route::get('/firstblade', [bladeController::class,'index']);
Route::get('/firstpage', [bladeController::class,'index2']);
Route::get('/firstpage2', [bladeController::class,'index3']);
