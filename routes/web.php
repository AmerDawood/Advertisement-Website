<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Website\AdvertisementController;
use App\Http\Controllers\Website\ChatController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\DiscountsController;
use App\Http\Controllers\Website\EvaluationController;
use App\Http\Controllers\Website\FaqsController;
use App\Http\Controllers\Website\FavoriteController;
use App\Http\Controllers\Website\FollowersController;
use App\Http\Controllers\Website\NotificationsController;
use App\Http\Controllers\Website\PaymentController;
use App\Http\Controllers\Website\SettingsController;
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



Route::get('/',[WebsiteController::class,'index'])->name('home');

Route::get('/advertisement/create',[AdvertisementController::class,'create'])->name('create_ads');
Route::get('/advertisement/addDetails',[AdvertisementController::class,'addDetails'])->name('create_details_ads');
Route::get('show/advertisement',[AdvertisementController::class,'show']);
Route::get('select-category',[AdvertisementController::class,'selectCategory'])->name('select_category');
Route::get('advers/privacy',[AdvertisementController::class,'addPrivacy'])->name('privacy');
Route::get('advertisement/best',[AdvertisementController::class,'best_advers'])->name('best_advers');







Route::get('subescription' , [SubscriptionController::class,'index'])->name('subescription');

Route::get('payment' , [PaymentController::class,'index'])->name('payment');



Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::get('/forget',[AuthController::class,'forget']);
Route::get('/add-code',[AuthController::class,'addCode']);
Route::get('/new-password',[AuthController::class,'newPassword']);
Route::get('/profile',[ProfileController::class,'index'])->name('profile');






Route::get('discount' ,[DiscountsController::class ,'index'])->name('discount');
Route::get('faqs' ,[FaqsController::class ,'index'])->name('faqs');




Route::get('useForUse' , [SettingsController::class ,'useForUse'])->name('useForUse');


Route::get('evaluation' , [EvaluationController::class ,'index'])->name('evaluation');



Route::resource('contacts', ContactController::class);
Route::resource('followers', FollowersController::class);
Route::resource('notifications', NotificationsController::class);
Route::resource('favorites', FavoriteController::class);

Route::get('settings/notifications',[NotificationsController::class,'settings'])->name('settings.notifications');



Route::resource('chat', ChatController::class);

// Route::get('profile',[ProfileController::class,'index']);


// Dashboard



Route::get('dashboard/choose' ,[DashboardController::class,'choose']);

// Route::get('dashboard/home' ,[DashboardController::class,'home']);


Route::get('/dashboard/{segment}',[DashboardController::class,'home'])->name('dashboard');




