<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;

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
Route::get('/custom-software', [PageController::class, 'custom_software']);
Route::get('/saas-development', [PageController::class, 'saas_development']);
Route::get('/ai-integration', [PageController::class, 'ai_integration']);
Route::get('/api-integration', [PageController::class, 'api_integration']);
Route::get('/ui-ux-design', [PageController::class, 'ui_ux_design']);
Route::get('/cloud-deployment', [PageController::class, 'cloud_deployment']);
Route::get('/products', [PageController::class, 'products']);
Route::get('/our-work', [PageController::class, 'our_work']);
Route::get('/pay/getAuthURL/{id}', [PageController::class, 'pay']);
Route::get('/sales-lead', [PageController::class, 'sales_lead']);

// Quote / project intake funnel
Route::get('/start-a-project', [QuoteController::class, 'index']);
Route::get('/thank-you', [QuoteController::class, 'thankYou'])->name('quote.thankyou');
Route::post('/api/save-quote-step', [QuoteController::class, 'saveStep']);
Route::get('/api/get-quote-draft/{token}', [QuoteController::class, 'getDraft']);
Route::post('/api/submit-quote', [QuoteController::class, 'submit']);

// Admin: quote leads
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/quotes', [AdminController::class, 'quotes'])->name('quotes.index');
        Route::get('/quotes/{quoteDraft}', [AdminController::class, 'showQuote'])->name('quotes.show');
    });
});
