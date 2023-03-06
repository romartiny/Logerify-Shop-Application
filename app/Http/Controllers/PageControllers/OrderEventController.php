<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller as Controller;
use App\Http\Services\OrderEventService as OrderEventService;


class OrderEventController extends Controller
{
    public OrderEventService $_orderEventService;

    public function __construct(OrderEventService $orderEventService)
    {
        $this->_orderEventService = $orderEventService;
    }

    public function showOrderEvent($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('orderEvent', [
            'page' => 'orderPage',
            'orderEvent' => $this->_orderEventService->getEvent($id)
        ]);
    }
}
