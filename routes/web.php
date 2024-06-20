<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

//route CRUD
Route::get('/home','App\Http\Controllers\TugasController@index');
Route::get('/tugas/tambah','App\Http\Controllers\TugasController@tambah');
Route::post('/tugas/store','App\Http\Controllers\TugasController@store');
Route::get('/tugas/edit/{id}','App\Http\Controllers\TugasController@edit');
Route::post('/tugas/update','App\Http\Controllers\TugasController@update');
Route::get('/tugas/hapus/{id}','App\Http\Controllers\TugasController@hapus');
Route::get('/tugas/view/{id}','App\Http\Controllers\TugasController@view');
