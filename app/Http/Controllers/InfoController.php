<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Osiset\ShopifyApp\Storage\Models\Plan;
use Osiset\ShopifyApp\Util;
use App\Http\Services\InfoService;
use App\Http\Repository\ResponseRepository;


class InfoController extends Controller
{
    public InfoService $_infoService;

    public function __construct(InfoService $infoService)
    {
        $this->_infoService = $infoService;
    }

    public function getAllEvents(): array
    {
        return $this->_infoService->grabShopInfo();
    }

    public function showShopInfo(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('info', [
            'info' => $this->getAllEvents()
        ]);
    }
}
