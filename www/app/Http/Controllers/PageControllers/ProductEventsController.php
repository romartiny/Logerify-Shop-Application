<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller as Controller;
use App\Http\Services\ProductEventsService as ProductEventsService;

class ProductEventsController extends Controller
{
    public ProductEventsService $_productEventsService;

    public function __construct(ProductEventsService $productEventsService)
    {
        $this->_productEventsService = $productEventsService;
    }

    public function showProductEvents(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('productEvents', [
            'page' => $this->_productEventsService->page,
            'productEvents' => $this->_productEventsService->getEvents(),
            'todayProducts' => $this->_productEventsService->getTodayProductEventsCount(),
            'threeDayProducts' => $this->_productEventsService->getThreeDaysAdminEventsCount(),
            'monthProducts' => $this->_productEventsService->getMonthAdminEventsCount()
        ]);
    }
}
