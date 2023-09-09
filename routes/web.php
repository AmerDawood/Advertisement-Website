<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Website\AdvertisementController;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Website\SubscriptionController;


use Illuminate\Support\Facades\Route;

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



Route::get('/',[WebsiteController::class,'index']);

Route::get('/advertisement/create',[AdvertisementController::class,'create']);
Route::get('/advertisement/addDetails',[AdvertisementController::class,'addDetails']);
Route::get('show/advertisement',[AdvertisementController::class,'show']);


Route::get('subescription' , [SubscriptionController::class,'index']);


Route::get('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'register']);
Route::get('/forget',[AuthController::class,'forget']);
Route::get('/add-code',[AuthController::class,'addCode']);
Route::get('/new-password',[AuthController::class,'newPassword']);






