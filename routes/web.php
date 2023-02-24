<?php

use App\Http\Controllers\EventControllers\AdminEventsController;
use App\Http\Controllers\EventControllers\DashboardController;
use App\Http\Controllers\EventControllers\InfoController;
use App\Http\Controllers\EventControllers\OrderEventsController;
use App\Http\Controllers\EventControllers\PaymentEventsController;
use App\Http\Controllers\EventControllers\ProductEventsController;
use App\Http\Controllers\HelpController;
use Illuminate\Support\Facades\Route;

Route::middleware(['verify.shopify'])->group(function () {
    Route::get('/', [DashboardController::class, 'showDashboard'])
        ->name('home')->middleware(['verify.shopify']);
    Route::get('/admin-events', [AdminEventsController::class, 'showAdminEvents'])
        ->name('admin-events')->middleware(['verify.shopify']);
    Route::get('/order-events', [OrderEventsController::class, 'showOrderEvents'])
        ->name('order-events')->middleware(['verify.shopify']);
    Route::get('/product-events', [ProductEventsController::class, 'showProductEvents'])
        ->name('product-events')->middleware(['verify.shopify']);
    Route::get('/payment-events', [PaymentEventsController::class, 'showTransactionEvents'])
        ->name('transaction-events')->middleware(['verify.shopify']);
    Route::get('/info', [InfoController::class, 'showShopInfo'])
        ->name('shop-information')->middleware(['verify.shopify']);
    Route::get('/help', [HelpController::class, 'showAppInfo'])
        ->name('help-information')->middleware(['verify.shopify']);
});
