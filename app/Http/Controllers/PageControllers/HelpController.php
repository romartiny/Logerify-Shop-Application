<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller as Controller;

class HelpController extends Controller
{
    public function showAppInfo(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('help', [
            'page' => 'helpPage'
        ]);
    }
}
