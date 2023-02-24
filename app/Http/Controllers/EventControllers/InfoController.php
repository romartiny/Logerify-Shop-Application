<?php

namespace App\Http\Controllers\EventControllers;

use App\Http\Controllers\Controller;
use App\Http\Services\InfoService;


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
            'page' => 'infoPage',
            'info' => $this->getAllEvents()
        ]);
    }
}
