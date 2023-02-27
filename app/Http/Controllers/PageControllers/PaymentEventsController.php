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

    public function showPaymentEvents(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('paymentEvents', [
            'page' => $this->_transactionEventsService->page,
            'paymentEvents' => $this->_transactionEventsService->getEvents(),
//            'todayProductEventsCount' => $this->_transactionEventsService->getTodayOrderEventsCount(),
//            'threeDayProductEventsCount' => $this->_transactionEventsService->getThreeDayOrderEventsCount(),
//            'monthProductEventsCount' => $this->_transactionEventsService->getMonthOrderEventsCount()
        ]);
    }
}
