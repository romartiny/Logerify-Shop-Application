<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Osiset\ShopifyApp\Storage\Models\Plan;
use Osiset\ShopifyApp\Util;
use App\Http\Services\PaymentEventsService;
use App\Http\Repository\ResponseRepository;


class PaymentEventsController extends Controller
{
    public PaymentEventsService $_transactionEventsService;

    public function __construct(PaymentEventsService $transactionEventsService)
    {
        $this->_transactionEventsService = $transactionEventsService;
    }

    public function getAllEvents(): array
    {
        return $this->_transactionEventsService->grabPayoutEvents();
    }

    public function showTransactionEvents(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('transactionevents', [
            'page' => 'dashboardPage',
            'transactionEvents' => $this->getAllEvents()
        ]);
    }
}
