<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Osiset\ShopifyApp\Storage\Models\Plan;
use Osiset\ShopifyApp\Util;
use App\Http\Services\TransactionEventsService;
use App\Http\Repository\ResponseRepository;


class TransactionEventsController extends Controller
{
    public TransactionEventsService $_transactionEventsService;

    public function __construct(TransactionEventsService $transactionEventsService)
    {
        $this->_transactionEventsService = $transactionEventsService;
    }

    public function getAllEvents(): array
    {
        return $this->_transactionEventsService->grabTransactionEvents();
    }

    public function showTransactionEvents(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('transactionevents', [
            'transactionEvents' => $this->getAllEvents()
        ]);
    }
}
