<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller as Controller;


class OrderEventController extends Controller
{
    public function showOrderEvent($id)
    {
        return view('orderEvent', [
            'page' => 'orderPage',
            'id' => $id
        ]);
    }
}
