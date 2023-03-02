<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller as Controller;
use App\Http\Services\ThemeEventsService as ThemeEventsService;

class ThemeEventsController extends Controller
{
    public ThemeEventsService $_themeEventsService;

    public function __construct(ThemeEventsService $themeEventsService)
    {
        $this->_themeEventsService = $themeEventsService;
    }

    public function showThemeEvents(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('themeEvents', [
            'page' => $this->_themeEventsService->page,
            'themeEvents' => $this->_themeEventsService->getEvents(),
            'totalStoreThemesCount' => $this->_themeEventsService->getTotalStoreThemesCount(),
            'currentThemeName' => $this->_themeEventsService->getCurrentThemeName(),
            'totalCustomThemesCount' => $this->_themeEventsService->getTotalCustomThemesCount()
        ]);
    }
}
