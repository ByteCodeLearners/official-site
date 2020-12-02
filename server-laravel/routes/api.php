<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

$controllers_package="App\Http\Controllers\\";


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(["prefix"=>"/member"],function () use ($controllers_package) {
    $member_controller=$controllers_package."MemberController@";
    Route::get("/all",$member_controller."getAllMembers");
    Route::post("/new",$member_controller."addMember");
    Route::get("/details/{id}",$member_controller."getMemberDetails");

});
Route::group(["prefix"=>"/events"],function () use($controllers_package){
    $event_controller=$controllers_package."EventController@";
});
