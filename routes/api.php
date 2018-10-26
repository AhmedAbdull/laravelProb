<?php

use Illuminate\Http\Request;

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
Route::get("user-info/total", function() {
	return "Registered user:" . \App\User::count();
});

Route::get("user-info/{user_id}", function($user_id) {
	$user = \App\User::findOrFail($user_id);
	return $user->email;
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
