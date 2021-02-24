<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pracAPI;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data",[pracAPI::class,'getData']);
Route::get("list",[pracAPI::class,'list']); //Bring and show all data from database
Route::post("add",[pracAPI::class,'add']); //Post Method for send or add data
Route::put("dataUpdate",[pracAPI::class,'updateData']);
Route::get("delete/{id}",[pracAPI::class,'delete']);
Route::get("search/{title}",[pracAPI::class,'search']);
Route::get("searchData",[pracAPI::class,'searchData']);