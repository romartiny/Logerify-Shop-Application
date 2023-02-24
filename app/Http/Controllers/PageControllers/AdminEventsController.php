<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller;
use App\Http\Services\AdminEventsService;


class AdminEventsController extends Controller
{
    public AdminEventsService $_adminEventsService;

    public function __construct(AdminEventsService $adminEventsService)
    {
        $this->_adminEventsService = $adminEventsService;
    }

    public function showAdminEvents(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('adminEvents', [
            'page' => $this->_adminEventsService->page,
            'allEvents' => $this->_adminEventsService->grabEvents(),
            'todayAdminEvents' => $this->_adminEventsService->getTodayAdminEvents(),
            'threeDayAdminEvents' => $this->_adminEventsService->getThreeDaysAdminEvents(),
            'monthAdminEvents' => $this->_adminEventsService->getMonthAdminEvents()
        ]);
    }
}
