<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [OrderController::class, 'index']);
Route::get('/checkout', [OrderController::class, 'checkout']);
Route::get('/pesanan', [OrderController::class, 'pesanan']);
Route::post('/checkout/pesanan', [OrderController::class, 'store']);

Route::get('/invoice/{id}', [OrderController::class, 'invoice']);