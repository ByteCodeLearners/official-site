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
Route::group(["prefix"=>"/members"],function () use ($controllers_package) {
    $member_controller=$controllers_package."MemberController@";



    Route::post("/login",$member_controller."makeLogin");
    Route::get("/all",$member_controller."getAllMembers");
    Route::post("/new",$member_controller."addMember");
    Route::get("/details/{id}",$member_controller."getMemberDetails");
    Route::get("/user",$member_controller."getLoggedUser")->middleware("auth:api");

});
Route::group(["prefix"=>"/users"],function () use ($controllers_package) {
    $user_controller=$controllers_package."UserController@";
    Route::post("/login",$user_controller."makeLogin");
    Route::get("/all",$user_controller."getAllUsers");

});
Route::group(["prefix"=>"/events"],function () use($controllers_package){
    $event_controller=$controllers_package."EventController@";
});
