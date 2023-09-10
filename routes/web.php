<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Website\AdvertisementController;
use App\Http\Controllers\Website\DiscountsController;
use App\Http\Controllers\Website\FaqsController;
use App\Http\Controllers\Website\PaymentController;
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
Route::get('select-category',[AdvertisementController::class,'selectCategory']);
Route::get('advers/privacy',[AdvertisementController::class,'addPrivacy']);





Route::get('subescription' , [SubscriptionController::class,'index']);

Route::get('payment' , [PaymentController::class,'index']);



Route::get('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'register']);
Route::get('/forget',[AuthController::class,'forget']);
Route::get('/add-code',[AuthController::class,'addCode']);
Route::get('/new-password',[AuthController::class,'newPassword']);
Route::get('/profile',[AuthController::class,'profile']);






Route::get('discount' ,[DiscountsController::class ,'index']);
Route::get('faqs' ,[FaqsController::class ,'index']);







// Dashboard



Route::get('dashboard/choose' ,[DashboardController::class,'choose']);

Route::get('dashboard/home' ,[DashboardController::class,'home']);






