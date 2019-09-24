<?php

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
    return view('home');
});

// Auth Controller
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::get('/pagination','PaginationController@index');

// Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
// Route::get('/rekening1', 'rekening1Controller@index')->middleware('auth');
// Route::post('/rekening1/create', 'rekening1Controller@create')->middleware('auth');
// Route::get('/rekening1/{id}/edit', 'rekening1Controller@edit')->middleware('auth');
// Route::post('/rekening1/{id}/update', 'rekening1Controller@update')->middleware('auth');
// Route::get('/rekening1/{id}/delete', 'rekening1Controller@delete')->middleware('auth');


Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile', 'ProfileController@index');
    Route::get('/dashboard', 'DashboardController@index');
    //<-- ROUTE REKENING_1 -->
    Route::get('/rekening1', 'rekening1Controller@index');
    Route::post('/rekening1/create', 'rekening1Controller@create');
    Route::get('/rekening1/{id}/edit', 'rekening1Controller@edit');
    Route::post('/rekening1/{id}/update', 'rekening1Controller@update');
    Route::get('/rekening1/{id}/delete', 'rekening1Controller@delete');
    
    //<-- ROUTE REKENING_5 -->
    Route::get('/rekening5', 'rekening5Controller@index');
    Route::post('/rekening5/create', 'rekening5Controller@create');
    Route::get('/rekening5/{id}/edit', 'rekening5Controller@edit');
    Route::post('/rekening5/{id}/update', 'rekening5Controller@update');
    Route::get('/rekening5/{id}/delete', 'rekening5Controller@delete');
    
    //<-- ROUTE ref_URUSAN -->
    Route::get('/urusan', 'UrusanController@index');
    Route::post('/urusan/create', 'UrusanController@create');
    Route::get('/urusan/{id}/edit', 'UrusanController@edit');
    Route::post('/urusan/{id}/update', 'UrusanController@update');
    Route::get('/urusan/{id}/delete', 'UrusanController@delete');
    
    //<-- ROUTE ref_UNIT -->
    Route::get('/unit', 'RunitController@index');
    Route::post('/unit/create', 'RunitController@create');
    Route::get('/unit/{id}/edit', 'RunitController@edit');
    Route::post('/unit/{id}/update', 'RunitController@update');
    Route::get('/unit/{id}/delete', 'RunitController@delete');
    
    //<-- ROUTE ref_sub_UNIT -->
    Route::get('/subunit', 'RsunitController@index');
    Route::post('/subunit/create', 'RsunitController@create');
    Route::get('/subunit/{id}/edit', 'RsunitController@edit');
    Route::post('/subunit/{id}/update', 'RsunitController@update');
    Route::get('/subunit/{id}/delete', 'RsunitController@delete');
    
    //<-- ROUTE ref_sumber_dana -->
    Route::get('/sumber', 'SumberDanaController@index');
    Route::post('/sumber/create', 'SumberDanaController@create');
    Route::get('/sumber/{id}/edit', 'SumberDanaController@edit');
    Route::post('/sumber/{id}/update', 'SumberDanaController@update');
    Route::get('/sumber/{id}/delete', 'SumberDanaController@delete');
    
    //<-- ROUTE ref_kegiatan -->
    Route::get('/kegiatan', 'RKegiatanController@index');
    Route::post('/kegiatan/create', 'RKegiatanController@create');
    Route::get('/kegiatan/{id}/edit', 'RKegiatanController@edit');
    Route::post('/kegiatan/{id}/update', 'RKegiatanController@update');
    Route::get('/kegiatan/{id}/delete', 'RKegiatanController@delete');
    
    //<-- ROUTE ref_program -->
    Route::get('/program', 'RProgramController@index');
    Route::post('/program/create', 'RProgramController@create');
    Route::get('/program/{id}/edit', 'RProgramController@edit');
    Route::post('/program/{id}/update', 'RProgramController@update');
    Route::get('/program/{id}/delete', 'RProgramController@delete');
    
    //<-- ROUTE Ta_spd_Rinc -->
    Route::get('/spdrincian', 'spdRincianController@index');
    Route::post('/spdrincian/create', 'spdRincianController@create');
    Route::get('/spdrincian/{id}/edit', 'spdRincianController@edit');
    Route::post('/spdrincian/{id}/update', 'spdRincianController@update');
    Route::get('/spdrincian/{id}/delete', 'spdRincianController@delete');
    
    //<-- ROUTE Ta_spd-->
    Route::get('/spd', 'spdController@index');
    Route::post('/spd/create', 'spdController@create');
    Route::get('/spd/{id}/edit', 'spdController@edit');
    Route::post('/spd/{id}/update', 'spdController@update');
    Route::get('/spd/{id}/delete', 'spdController@delete');
    
});
