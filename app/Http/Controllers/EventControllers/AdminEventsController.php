<?php

namespace App\Http\Controllers\EventControllers;

use App\Http\Controllers\Controller;
use App\Http\Services\AdminEventsService;


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
            'page' => 'adminPage',
            'todayAdminEvents' => $this->getTodayCountOrders(),
            'threeDayAdminEvents' => $this->getThreeDayCountOrders(),
            'monthAdminEvents' => $this->getMonthOrderEvents(),
            'allEvents' => $this->getAllEvents()
        ]);
    }
}
