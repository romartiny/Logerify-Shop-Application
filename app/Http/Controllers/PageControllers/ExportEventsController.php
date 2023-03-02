<?php

namespace App\Http\Controllers\PageControllers;

class ExportEventsController
{
    public function showShopExport(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('exportEvents', [
            'page' => 'exportPage',
        ]);
    }
}
