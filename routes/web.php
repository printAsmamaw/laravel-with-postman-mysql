<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GetController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\fileController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/addproduct', [ productcontroller::class, 'store']);
//fourth route
Route::get('/user', [ CustomerController::class, 'store']);

Route::get('/get/{product_id}', [ GetController::class, 'getProduct']);

Route::get('/deleteproduct/{id}',[ DeleteController::class, 'delete' ]);


Route::get('/fileAccess', [ fileController::class, 'fileAcess']);


Route::get('/login', function () {
    // Assuming you have a User model and you've authenticated the user
    $user = auth()->user();

    // Create an API token for the user
    $token = $user->createToken('my-token')->plainTextToken;

    return ['token' => $token];
});
Route::get('/', function () {
    return view('welcome');
});
