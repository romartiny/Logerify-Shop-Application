<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Osiset\ShopifyApp\Storage\Models\Plan;
use Osiset\ShopifyApp\Util;
use App\Http\Services\DashboardService;
use App\Http\Repository\ResponseRepository;


class DashboardController extends Controller
{
    public DashboardService $_dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->_dashboardService = $dashboardService;
    }

    public function getTotalEvents(): string
    {
        return $this->_dashboardService->grabTotalEvents();
    }

    public function getCustomersCount(): string
    {
        return $this->_dashboardService->grabCustomersCount();
    }

    public function getOrdersCount(): string
    {
        return $this->_dashboardService->grabOrdersCount();
    }

    public function getLastEvents(): array
    {
        return $this->_dashboardService->grabLastEvents();
    }

    public function showDashboard(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    |\Illuminate\Contracts\Foundation\Application
    {
        return view('dashboard', [
            'page' => 'dashboardPage',
            'totalEvents' => $this->getTotalEvents(),
            'totalCustomers' => $this->getCustomersCount(),
            'totalOrders' => $this->getOrdersCount(),
            'lastEvents' => $this->getLastEvents()
        ]);
    }
}
