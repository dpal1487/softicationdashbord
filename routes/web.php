<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SurveyController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('pages.home');
});

Route::resource('contact', ContactController::class);
Route::controller(ServiceController::class)->group(function () {
    Route::get('/website-design', 'websiteDesign')->name('website-design');
    Route::get('/web-application-development', 'webApplicationDev')->name('web-application-development');
    Route::get('/e-commerce-development', 'eCommerceDev')->name('e-commerce-development');
    Route::get('/custom-web-application-development', 'customWebApplication')->name('custom-web-application-development');
    Route::get('/mobile-app-development', 'mobileAppDevlopment')->name('mobile-app-development');
    Route::get('/wordpress-development', 'wordpressDevlopment')->name('wordpress-development');
    Route::get('/e-commerce-wordpress-development', 'eCommerceWordpress')->name('e-commerce-wordpress-development');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('/erps', 'erps')->name('erps');
    Route::get('/human-resource-management', 'humanResource')->name('human-resource-management');
    Route::get('/crm', 'crm')->name('crm');
    Route::get('/learning-managment-system', 'learningManagement')->name('learning-managment-system');
    Route::get('/sales-management-system', 'salesManagement')->name('sales-management-system');
    Route::get('/school-management-erp', 'schoolManagement')->name('school-management-erp');
    Route::get('/mobile-repaire-system', 'mobileRepair')->name('mobile-repaire-system');
    Route::get('/pharma-application', 'pharmaApplication')->name('pharma-application');
    Route::get('/hospital-management', 'hospitalManagement')->name('hospital-management');
    Route::get('/application', 'application')->name('application');
});

Route::controller(SurveyController::class)->group(function () {
    Route::get('/market-survey-dashboard', 'marketSurveyDashboard')->name('market-survey-dashboard');
    Route::get('/market-survey-panel', 'marketSurveyPanel')->name('market-survey-panel');
    Route::get('/market-survey-programming', 'marketSurveyProgramming')->name('market-survey-programming');
    Route::get('/api', 'api')->name('api');
});

Auth::routes();


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('admin.home');
    Route::view('about', 'about')->name('admin.about');

    Route::get('contacts', [ContactController::class, 'get'])->name('admin.contacts.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('admin.profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('admin.profile.update');
});
