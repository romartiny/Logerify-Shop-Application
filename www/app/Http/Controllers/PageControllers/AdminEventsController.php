<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller as Controller;
use App\Http\Services\AdminEventsService as AdminEventsService;

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
            'allEvents' => $this->_adminEventsService->getEvents(),
            'todayAdminEvents' => $this->_adminEventsService->getTodayAdminEventsCount(),
            'threeDayAdminEvents' => $this->_adminEventsService->getThreeDaysAdminEventsCount(),
            'monthAdminEvents' => $this->_adminEventsService->getMonthAdminEventsCount()
        ]);
    }
}
