<?php

namespace App\Http\Services;

use App\Http\Helper\PaymentEventsHelper as PaymentEventsHelper;
use App\Http\Services\EventsInterface as EventsInterface;
use App\Http\Services\FetchService\FetchDataService as FetchDataService;

class PaymentEventsService implements EventsInterface
{
    private PaymentEventsHelper $_paymentEventsHelper;
    private FetchDataService $_fetchData;
    private array $fetchedData = [];
    public string $page = 'paymentPage';
    private string $getRequestType = 'GET';
    private string $resourceEventType = 'tender_transactions.json';

    public function __construct(FetchDataService $fetchData, PaymentEventsHelper $paymentEventsHelper)
    {
        $this->_fetchData = $fetchData;
        $this->_paymentEventsHelper = $paymentEventsHelper;
    }

    public function getTodayOrderEventsCount(): int
    {
        return $this->_paymentEventsHelper->normalizeNumber($this->_paymentEventsHelper
            ->grabTodayOrderEventsCount($this->fetchedData['body']['container']['events']));
    }

    public function getThreeDayOrderEventsCount(): int
    {
        return $this->_paymentEventsHelper->normalizeNumber($this->_paymentEventsHelper
            ->grabOrderEventsCount($this->fetchedData['body']['container']['events'], 3));
    }

    public function getMonthOrderEventsCount(): int
    {
        return $this->_paymentEventsHelper->normalizeNumber($this->_paymentEventsHelper
            ->grabOrderEventsCount($this->fetchedData['body']['container']['events'], 30));
    }

    public function getEvents(): array
    {
        $this->fetchedData = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceEventType);

        return $this->_paymentEventsHelper->normalizeShopEvents($this->fetchedData['body']['container']['tender_transactions']);
    }
}
