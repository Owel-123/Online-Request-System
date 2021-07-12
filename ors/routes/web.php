<?php

use App\Http\Controllers\FaqsController;
use App\Http\Controllers\ListOfRequestController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/listofrequest', [ListOfRequestController::class, 'index']);

Route::get('/request', [RequestController::class, 'index']);

Route::get('/faqs', [FaqsController::class, 'index']);

Route::view('/academic', 'listofrequest.academic');
Route::view('/athletic', 'listofrequest.athletic');
Route::view('/absence', 'listofrequest.absence');
Route::view('/tor', 'listofrequest.tor');