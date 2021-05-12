<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;
use App\Http\Controllers\OrdersController;

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


Route::post('/new_new', [NewsController::class, 'make_news']);
Route::get('/get_news', [NewsController::class, 'get_news']);
Route::post('/new_order', [OrdersController::class, 'make_orders']);
Route::get('/get_orders', [OrdersController::class, 'get_orders']);



