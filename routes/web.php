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
    Route::get('/', [DashboardController::class, 'showDashboard'])->name('home')->middleware(['verify.shopify']);
    Route::get('/admin-events', [AdminEventsController::class, 'showAdminEvents'])->name('admin-events')->middleware(['verify.shopify']);
    Route::get('/order-events', [OrderEventsController::class, 'showOrderEvents'])->name('order-events')->middleware(['verify.shopify']);
    Route::get('/product-events', [ProductEventsController::class, 'showProductEvents'])->name('product-events')->middleware(['verify.shopify']);
    Route::get('/transaction-events', [TransactionEventsController::class, 'showTransactionEvents'])->name('transaction-events')->middleware(['verify.shopify']);
    Route::get('/info', [InfoController::class, 'showShopInfo'])->name('shop-information')->middleware(['verify.shopify']);
    Route::get('/help', [HelpController::class, 'showAppInfo'])->name('help-information')->middleware(['verify.shopify']);
});
