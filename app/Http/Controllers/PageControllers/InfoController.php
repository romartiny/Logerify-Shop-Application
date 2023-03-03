<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller as Controller;
use App\Http\Services\InfoService as InfoService;

class InfoController extends Controller
{
    public InfoService $_infoService;

    public function __construct(InfoService $infoService)
    {
        $this->_infoService = $infoService;
    }

    public function showShopInfo(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('info', [
            'page' => 'infoPage',
            'infoEvent' => $this->_infoService->getEvents()
        ]);
    }
}
