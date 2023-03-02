<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller as Controller;
use App\Http\Services\OrderEventsService as OrderEventsService;


class OrderEventsController extends Controller
{
    public OrderEventsService $_orderEventsService;

    public function __construct(OrderEventsService $orderEventsService)
    {
        $this->_orderEventsService = $orderEventsService;
    }

    public function showOrderEvents(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('orderEvents', [
            'page' => $this->_orderEventsService->page,
            'orderEvents' => $this->_orderEventsService->getEvents(),
            'todayOrdersCount' => $this->_orderEventsService->getDayOrderEventsCount(),
            'threeDayOrdersCount' => $this->_orderEventsService->getThreeDayOrderEventsCount(),
            'monthOrdersCount' => $this->_orderEventsService->getMonthOrderEventsCount()
        ]);
    }
}
