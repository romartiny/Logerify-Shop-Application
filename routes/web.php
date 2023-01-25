<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminEventsController;
use App\Http\Controllers\OrderEventsController;
use App\Http\Controllers\ProductEventsController;
use App\Http\Controllers\TransactionEventsController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\HelpController;

Route::middleware(['verify.shopify'])->group(function () {
    Route::get('/', [DashboardController::class, 'showDashboard'])
        ->middleware(['verify.shopify'])->name('home');
    Route::get('/admin-events', [AdminEventsController::class, 'showAdminEvents'])
        ->middleware(['verify.shopify'])->name('admin-events');
    Route::get('/order-events', [OrderEventsController::class, 'showOrderEvents'])
        ->middleware(['verify.shopify'])->name('order-events');
    Route::get('/product-events', [ProductEventsController::class, 'showProductEvents'])
        ->middleware(['verify.shopify'])->name('product-events');
    Route::get('/transaction-events', [TransactionEventsController::class, 'showTransactionEvents'])
        ->middleware(['verify.shopify'])->name('transaction-events');
    Route::get('/info', [InfoController::class, 'showShopInfo'])
        ->middleware(['verify.shopify'])->name('shop-information');
    Route::get('/help', [HelpController::class, 'showAppInfo'])
        ->middleware(['verify.shopify'])->name('help-information');
});
