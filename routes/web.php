<?php

use App\Http\Controllers\data0277Controller;
use Illuminate\Support\Facades\Route;
use App\Models\soal10277;

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

Route::get('list', [data0277Controller::class,'getAllPost']);
