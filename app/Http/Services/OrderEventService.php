<?php

namespace App\Http\Services;

use App\Http\Services\FetchService\FetchDataService as FetchDataService;
use App\Http\Helper\OrderEventHelper as OrderEventHelper;

class OrderEventService
{
    private OrderEventHelper $_orderEventHelper;
    private FetchDataService $_fetchData;
    private array $fetchedData = [];
    public string $page = 'orderPage';
    private string $getRequestType = 'GET';
    private string $resourceEventType = 'orders/';
    private int $orderId = 0;

    public function __construct(FetchDataService $fetchData, OrderEventHelper $orderEventHelper)
    {
        $this->_fetchData = $fetchData;
        $this->_orderEventHelper = $orderEventHelper;
    }

    private function getOrderEventLink($id): string
    {
        return $this->resourceEventType . $id . '.json';
    }

    public function getEvent(int $id): array
    {
        $this->fetchedData = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->getOrderEventLink($id));

        return $this->_orderEventHelper->normalizeShopEvents($this->fetchedData['body']['container']['order']);
    }
}
