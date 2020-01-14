<?php
//cms api
//Users
Route::post('/registerUser','cmsnubController@registerUser');
Route::post('/updateUser','cmsnubController@updateUser');
Route::get('/loginUser','cmsnubController@loginUser');
Route::post('/logoutUser','cmsnubController@logoutUser');

//CounsellAction
Route::post('/createCouncilling','cmsnubController@createCouncilling');
Route::post('/acceptCouncilling','cmsnubController@acceptCouncilling');
Route::post('/referedCouncilling','cmsnubController@referedCouncilling');
Route::post('/settledCouncilling','cmsnubController@settledCouncilling');
Route::post('/removeCouncilling','cmsnubController@removeCouncilling');

//DisplayCounsell
Route::get('/getToday','cmsnubController@getToday');
Route::get('/getWaiting','cmsnubController@getWaiting');
Route::get('/getPending','cmsnubController@getPending');
Route::get('/getSettled','cmsnubController@getSettled');

//Others
Route::get('/getCounciller','cmsnubController@getCounciller');
Route::get('/getCouncillingType','cmsnubController@getCouncillingType');