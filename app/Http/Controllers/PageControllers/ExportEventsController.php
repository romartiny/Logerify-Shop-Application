<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller as Controller;

class ExportEventsController extends Controller
{
    public function showShopExport(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('exportEvents', [
            'page' => 'exportPage',
        ]);
    }
}
