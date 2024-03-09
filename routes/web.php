<?php

use Illuminate\Support\Facades\Route;
use\App\Http\Controllers\PincodeImportController;
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

Route::get('/send-mail', function () {
    dispatch(new \App\Jobs\SendMailJob());
    return view('welcome');
});

// Large Number of CSV data import using Jobs and Queue
Route::get('/csv-import-view',[PincodeImportController::class,'index'])->name('pincode');
Route::post('/csv-import',[PincodeImportController::class,'store'])->name('csvimport');