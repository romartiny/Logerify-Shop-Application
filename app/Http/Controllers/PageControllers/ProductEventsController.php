<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller;
use App\Http\Services\ProductEventsService;


class ProductEventsController extends Controller
{
    public ProductEventsService $_productEventsService;

    public function __construct(ProductEventsService $productEventsService)
    {
        $this->_productEventsService = $productEventsService;
    }

    public function getAllEvents(): array
    {
        return $this->_productEventsService->grabProductEvents();
    }

    public function getTodayCountProducts(): int
    {
        return $this->_productEventsService->grabDayOrderEvents();
    }

    public function getThreeDayCountProducts(): int
    {
        return $this->_productEventsService->grabThreeDayOrderEvents();
    }

    public function getMonthOrderProducts(): int
    {
        return $this->_productEventsService->grabMonthOrderEvents();
    }

    public function showProductEvents(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('productEvents', [
            'page' => 'productPage',
            'todayProducts' => $this->getTodayCountProducts(),
            'threeDayProducts' => $this->getThreeDayCountProducts(),
            'monthProducts' => $this->getMonthOrderProducts(),
            'productEvents' => $this->getAllEvents()
        ]);
    }
}
