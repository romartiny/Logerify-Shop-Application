<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminEventsController;
use App\Http\Controllers\OrderEventsController;

Route::middleware(['verify.shopify'])->group(function () {
    Route::get('/', [DashboardController::class, 'showDashboard'])
        ->middleware(['verify.shopify'])->name('home');
    Route::get('/admin-events', [AdminEventsController::class, 'showAdminEvents'])
        ->middleware(['verify.shopify'])->name('admin-events');
    Route::get('/order-events', [OrderEventsController::class, 'showOrderEvents'])
        ->middleware(['verify.shopify'])->name('order-events');
});
