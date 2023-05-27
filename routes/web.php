<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/about-us', [PageController::class, 'about']);
Route::any('/contact-us', [PageController::class, 'contact']);
Route::get('/ecommerce', [PageController::class, 'ecommerce']);
Route::get('/sms-marketing', [PageController::class, 'sms_marketing']);
Route::get('/email-marketing', [PageController::class, 'email_marketing']);
Route::get('/digital-marketing', [PageController::class, 'digital_marketing']);
Route::get('/mobile-apps', [PageController::class, 'mobile_apps']);
Route::get('/web-development', [PageController::class, 'web_development']);
Route::get('/social-media', [PageController::class, 'social_media']);
Route::get('/seo', [PageController::class, 'seo']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/pay/getAuthURL/{id}', [PageController::class, 'pay']);
Route::get('/sales-lead', [PageController::class, 'sales_lead']);
