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
        ->name('admin-events');
    Route::get('/admin-events', [AdminEventsController::class, 'showAdminEvents'])
        ->name('admin-events');
    Route::get('/order-events', [OrderEventsController::class, 'showOrderEvents'])
        ->name('order-events');
    Route::get('/product-events', [ProductEventsController::class, 'showProductEvents'])
        ->name('product-events');
    Route::get('/transaction-events', [TransactionEventsController::class, 'showTransactionEvents'])
        ->name('transaction-events');
    Route::get('/info', [InfoController::class, 'showShopInfo'])
        ->name('shop-information');
    Route::get('/help', [HelpController::class, 'showAppInfo'])
        ->name('help-information');
});
