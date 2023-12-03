<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\CustomerController;
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
//first route
// Route::get('/products', [ productcontroller::class, 'getproductbyid']);
// //second route
// Route::get('/products/{id}', [ productcontroller::class, 'getProduct']);
// //third route
// Route::post('/addproduct', [ productcontroller::class, 'store']);
//fourth route
Route::get('/user', [ CustomerController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});
