<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Osiset\ShopifyApp\Storage\Models\Plan;
use Osiset\ShopifyApp\Util;
use App\Http\Services\OrderEventsService;
use App\Http\Repository\ResponseRepository;


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

    public function showOrderEvents(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('orderevents', [
            'orderEvents' => $this->getAllEvents()
        ]);
    }
}
