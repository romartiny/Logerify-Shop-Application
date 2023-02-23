<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Osiset\ShopifyApp\Storage\Models\Plan;
use Osiset\ShopifyApp\Util;
use App\Http\Services\ProductEventsService;
use App\Http\Repository\ResponseRepository;


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

    public function showProductEvents(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('productevents', [
            'page' => 'productPage',
            'productEvents' => $this->getAllEvents()
        ]);
    }
}
