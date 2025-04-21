<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomePageController;
// Admin System
use App\Http\Controllers\Admin\{
    AdminLoginController,
    AdminHomeController,
    UserCardController,
    AdminSubscribeController,
    AdminUserAcount,
    MonthlyvisitorController,
    AdminTranslateController,
    AdminCategoruController,
    AdminTemplateAllController,
};

use App\Http\Controllers\Template\TemplateSyetemController;


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

Route::get('/' , [WelcomePageController::class , 'index'])->name('welcome_page');
Route::get('/lang/{lang}', [WelcomePageController::class, 'switchLanguage'])->name('switchLanguage'); 


// Admin System
Route::get('admin/login' , [AdminLoginController::class ,'index'])->name('admin_login');
Route::post('login_submit' , [AdminLoginController::class ,'login_submit'])->name('login_submit');

Route::middleware(['admin:admin'])->group(function () {

    Route::get('admin_home' , [AdminHomeController::class , 'index'])->name('admin_home');

    // User System

    Route::resource('user-admin', AdminUserController::class);

    // User Update Admin

    Route::get('/user-admin/update/{id}', [AdminUserController::class , 'update'])->name('user-admin.update'); /////////  have problem

    // User Card

    Route::get('user-card' , [UserCardController::class , 'index'])->name('user_card');

    Route::get('sendmail/{email}' , [UserCardController::class , 'sendmail'])->name('sendmail');

    // Subscribe

    Route::get('admin-subscribe' , [AdminSubscribeController::class , 'index'])->name('admin_subscribe');

    //Admin Create Acount

    Route::resource('create-acount', AdminUserAcount::class);

    // monthly-statistics

    Route::get('/monthly-statistics', [MonthlyvisitorController::class, 'index'])->name('monthly_statistics');

    // Show Activ Card

    Route::get('/activ-card', [MonthlyvisitorController::class, 'activ'])->name('activ_card');

    //Activate Location System

    Route::get('/mylocation/{id}', [AdminUserController::class , 'updatelocation'])->name('location_system');

    // track-visitor
    Route::group(['middleware' => 'trackVisitor'], function () {

        Route::get('visitor', [VisitorController::class, 'showVisitorCount'])->name('visitor');

    });

    //Own Web Page add web page demo photo
    Route::resource('own-web-page-photo', WebPagePhotoController::class);

    // Translate  system 
    Route::resource('translate', AdminTranslateController::class);

    //Category  system 
    Route::resource('category', AdminCategoruController::class);

    //Category  system 
    Route::resource('template-all', AdminTemplateAllController::class);

});

// Show  Wedding part public 
Route::get('wedding/{value}' , [TemplateSyetemController::class , 'index'])->name('template_wedding_one');