<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller as Controller;
use App\Http\Services\DashboardService as DashboardService;

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
            'totalEventsCount' => $this->_dashboardService->grabTotalEventsCount(),
            'totalCustomersCount' => $this->_dashboardService->grabTotalCustomersCount(),
            'totalOrdersCount' => $this->_dashboardService->grabTotalOrdersCount(),
            'lastEvents' => $this->_dashboardService->getEvents()
        ]);
    }
}
