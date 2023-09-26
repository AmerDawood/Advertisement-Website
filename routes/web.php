<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Dashboard\AreaController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SectionsController;
use App\Http\Controllers\Dashboard\SuggestedQuestionController;
use App\Http\Controllers\Dashboard\TermsController;
use App\Http\Controllers\Website\AdvertisementController;
use App\Http\Controllers\Website\ChatController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\DiscountsController;
use App\Http\Controllers\Website\EvaluationController;
use App\Http\Controllers\Dashboard\FaqsController;
use App\Http\Controllers\Dashboard\PrivacyQuestionController;
use App\Http\Controllers\Website\FaqsController as WebsiteFaqsController;
use App\Http\Controllers\Website\FavoriteController;
use App\Http\Controllers\Website\FollowersController;
use App\Http\Controllers\Website\MembershipController;
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

Route::group(['middleware' => 'admin'], function () {
    // dashboard


});
// Sections
Route::post('/sections/create',[SectionsController::class,'store'])->name('section.store');
Route::delete('/sections/{id}', [SectionsController::class,'destroy'])->name('sections.destroy');
Route::put('/sections/{id}', [SectionsController::class,'update'])->name('sections.update');
// Terms
Route::post('/terms/create',[TermsController::class,'store'])->name('terms.store');
Route::delete('/terms/{id}', [TermsController::class,'destroy'])->name('terms.destroy');
Route::put('/terms/{id}', [TermsController::class,'update'])->name('terms.update');
// SuggestQuestions
Route::post('/suggest/create',[SuggestedQuestionController::class,'store'])->name('suggest.store');
Route::delete('/suggest/{id}', [SuggestedQuestionController::class,'destroy'])->name('suggest.destroy');
Route::put('/suggest/{id}', [SuggestedQuestionController::class,'update'])->name('suggest.update');
//Areas
Route::post('/area/create',[AreaController::class,'store'])->name('area.store');
Route::delete('/area/{id}', [AreaController::class,'destroy'])->name('area.destroy');
Route::put('/area/{id}', [AreaController::class,'update'])->name('area.update');
// FAQS
Route::post('/faqs/create',[FaqsController::class,'store'])->name('faqs.store');
Route::delete('/faqs/{id}', [FaqsController::class,'destroy'])->name('faqs.destroy');
Route::put('/faqs/{id}', [FaqsController::class,'update'])->name('faqs.update');

// Privacy
Route::post('/privacy/create',[PrivacyQuestionController::class,'store'])->name('privacy.store');
Route::delete('/privacy/{id}', [PrivacyQuestionController::class,'destroy'])->name('privacy.destroy');
Route::put('/privacy/{id}', [PrivacyQuestionController::class,'update'])->name('privacy.update');


Route::get('/',[WebsiteController::class,'index'])->name('home');

Route::get('/advertisement/create',[AdvertisementController::class,'create'])->name('create_ads');
Route::post('/advertisement/create',[AdvertisementController::class,'store'])->name('store.ads');

Route::get('/advertisement/addDetails',[AdvertisementController::class,'addDetails'])->name('create_details_ads');
Route::get('show/advertisement',[AdvertisementController::class,'show'])->name('advertisement.show');
Route::get('select-category',[AdvertisementController::class,'selectCategory'])->name('select_category');
Route::get('advers/privacy',[AdvertisementController::class,'addPrivacy'])->name('privacy');
Route::get('advertisement/best',[AdvertisementController::class,'best_advers'])->name('best_advers');







Route::get('subescription' , [SubscriptionController::class,'index'])->name('subescription');

Route::get('payment' , [PaymentController::class,'index'])->name('payment');



Route::get('/login',[AuthController::class,'loginForm'])->name('login');
Route::get('/register',[AuthController::class,'registerForm'])->name('register');
Route::get('/forget',[AuthController::class,'forget']);
Route::get('/add-code',[AuthController::class,'addCode']);
Route::get('/new-password',[AuthController::class,'newPassword']);
Route::get('/profile',[ProfileController::class,'index'])->name('profile');



// POST
Route::post('/register', [AuthController::class,'register'])->name('register');
Route::post('/login', [AuthController::class,'login'])->name('login');






Route::get('discount' ,[DiscountsController::class ,'index'])->name('discount');
Route::get('faqs' ,[WebsiteFaqsController::class ,'index'])->name('faqs');




Route::get('useForUse' , [SettingsController::class ,'useForUse'])->name('useForUse');


Route::get('evaluation' , [EvaluationController::class ,'index'])->name('evaluation');



Route::resource('contacts', ContactController::class);
Route::resource('followers', FollowersController::class);
Route::resource('notifications', NotificationsController::class);
Route::resource('favorites', FavoriteController::class);

Route::get('settings/notifications',[NotificationsController::class,'settings'])->name('settings.notifications');



Route::resource('chat', ChatController::class);



Route::resource('memberships', MembershipController::class);

// Route::get('profile',[ProfileController::class,'index']);


// Dashboard



Route::get('dashboard/choose' ,[DashboardController::class,'choose']);

// Route::get('dashboard/home' ,[DashboardController::class,'home']);


Route::get('/dashboard/{segment}',[DashboardController::class,'home'])->name('dashboard');






Route::get('test',function(){
    return view('test');
});
