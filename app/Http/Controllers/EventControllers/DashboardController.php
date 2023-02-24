<?php

namespace App\Http\Controllers\EventControllers;

use App\Http\Controllers\Controller;
use App\Http\Services\DashboardService;


class DashboardController extends Controller
{
    public DashboardService $_dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->_dashboardService = $dashboardService;
    }

    public function showDashboard(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('dashboard', [
            'page' => $this->_dashboardService->page,
            'totalEvents' => $this->_dashboardService->grabTotalEvents(),
            'totalCustomers' => $this->_dashboardService->grabCustomersCount(),
            'totalOrders' => $this->_dashboardService->grabOrdersCount(),
            'lastEvents' => $this->_dashboardService->grabLastEvents()
        ]);
    }
}