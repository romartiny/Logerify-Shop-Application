<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Osiset\ShopifyApp\Storage\Models\Plan;
use Osiset\ShopifyApp\Util;
use App\Http\Services\AdminEventsService;
use App\Http\Repository\ResponseRepository;


class AdminEventsController extends Controller
{
    public AdminEventsService $_adminEventsService;

    public function __construct(AdminEventsService $adminEventsService)
    {
        $this->_adminEventsService = $adminEventsService;
    }

    public function getAllEvents(): array
    {
        return $this->_adminEventsService->grabAdminEvents();
    }

    public function getTodayCountOrders(): int
    {
        return $this->_adminEventsService->grabDayAdminEvents();
    }

    public function getThreeDayCountOrders(): int
    {
        return $this->_adminEventsService->grabThreeDayAdminEvents();
    }

    public function getMonthOrderEvents(): int
    {
        return $this->_adminEventsService->grabMonthAdminEvents();
    }

    public function showAdminEvents(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('adminEvents', [
            'todayAdminEvents' => $this->getTodayCountOrders(),
            'threeDayAdminEvents' => $this->getThreeDayCountOrders(),
            'monthAdminEvents' => $this->getMonthOrderEvents(),
            'allEvents' => $this->getAllEvents()
        ]);
    }
}
