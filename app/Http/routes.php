<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laraveal the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/v1/getAllMember','MemberController@getAllMember');
Route::get('/api/v1/getMemberById/{id}', 'MemberController@getMemberById');
Route::post('/api/v1/postMember', 'MemberController@postMember');


