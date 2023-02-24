<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller;
use App\Http\Services\OrderEventsService;


class OrderEventsController extends Controller
{
    public OrderEventsService $_orderEventsService;

    public function __construct(OrderEventsService $orderEventsService)
    {
        $this->_orderEventsService = $orderEventsService;
    }

    public function getAllEvents(): array
    {
        return $this->_orderEventsService->grabOrderEvents();
    }

    public function getTodayCountOrders(): int
    {
        return $this->_orderEventsService->grabDayOrderEvents();
    }

    public function getThreeDayCountOrders(): int
    {
        return $this->_orderEventsService->grabThreeDayOrderEvents();
    }

    public function getMonthOrderEvents(): int
    {
        return $this->_orderEventsService->grabMonthOrderEvents();
    }

    public function showOrderEvents(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('orderEvents', [
            'page' => 'orderPage',
            'todayOrders' => $this->getTodayCountOrders(),
            'threeDayOrders' => $this->getThreeDayCountOrders(),
            'monthOrders' => $this->getMonthOrderEvents(),
            'orderEvents' => $this->getAllEvents()
        ]);
    }
}
