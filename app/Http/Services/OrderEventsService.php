<?php

namespace App\Http\Services;

use App\Http\Helper\OrderEventsHelper as OrderEventsHelper;
use App\Http\Services\EventsInterface as EventsInterface;
use App\Http\Services\FetchService\FetchDataService as FetchDataService;

class OrderEventsService implements EventsInterface
{
    private OrderEventsHelper $_orderEventsHelper;
    private FetchDataService $_fetchData;
    private array $fetchedData = [];
    public string $page = 'orderPage';
    private string $getRequestType = 'GET';
    private string $resourceEventType = 'orders.json';

    public function __construct(FetchDataService $fetchData, OrderEventsHelper $orderEventsHelper)
    {
        $this->_fetchData = $fetchData;
        $this->_orderEventsHelper = $orderEventsHelper;
    }

    public function getDayOrderEventsCount(): int
    {
        return $this->_orderEventsHelper->grabDayOrderEvents($this->fetchedData['body']['container']['orders']);
    }

    public function getThreeDayOrderEventsCount(): int
    {
        return $this->_orderEventsHelper->grabOrderEventsCount($this->fetchedData['body']['container']['orders'], 3);
    }

    public function getMonthOrderEventsCount(): int
    {
        return $this->_orderEventsHelper->grabOrderEventsCount($this->fetchedData['body']['container']['orders'], 30);
    }

    public function getEvents(): array
    {
        $this->fetchedData = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceEventType);

        return $this->_orderEventsHelper->normalizeShopEvents($this->fetchedData['body']['container']['orders']);
    }
}
