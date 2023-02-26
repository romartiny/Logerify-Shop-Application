<?php

namespace App\Http\Controllers\PageControllers;

use App\Http\Controllers\Controller as Controller;
use App\Http\Services\PaymentEventsService as PaymentEventsService;

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
        return view('transactionEvents', [
            'page' => 'dashboardPage',
            'transactionEvents' => $this->getAllEvents()
        ]);
    }
}
