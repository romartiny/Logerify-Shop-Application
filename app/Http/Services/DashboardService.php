<?php

namespace App\Http\Services;

use App\Http\Controllers\AuthController as AuthController;
use App\Http\Repository\ResponseRepository;
use App\Http\Controllers\FetchControllers\FetchDataController as FetchDataController;

class DashboardService
{
    private string $getRequestType = 'GET';
    private FetchDataController $_fetchData;
    private string $resourceEventType = 'events.json';
    private string $resourceEventsCountType = 'events/count.json';
    private string $resourceOrdersCountType = 'orders/count.json';
    private string $resourceCustomersCountType = 'customers/count.json';
    public string $page = 'dashboardPage';



    public function __construct(FetchDataController $fetchData)
    {
        $this->_fetchData = $fetchData;
    }

    public function normalizeNumber($number): string
    {
        return $number > 999 ? number_format($number, 2, ',', ' ') : $number;
    }

    public function grabTotalEvents(): string
    {
        $totalEvents = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceEventsCountType);

        return $this->normalizeNumber($totalEvents['body']['container']['count']);
    }

    public function grabCustomersCount(): string
    {
        $totalEvents = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceCustomersCountType);

        return $this->normalizeNumber($totalEvents['body']['container']['count']);
    }

    public function grabOrdersCount(): string
    {
        $totalEvents = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceOrdersCountType);

        return $this->normalizeNumber($totalEvents['body']['container']['count']);
    }

    public function normalizeShopEvents($shopEvents): array
    {
        foreach ($shopEvents as $key => $shopEvent) {
            $shopEvents[$key]['created_at'] = date("m/d/Y h:i:s",strtotime($shopEvent['created_at']));
        }

        return $shopEvents;
    }

    public function grabLastEvents(): array
    {
        $dashboardEvents = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceEventType);
        $revertedEvents = $this->normalizeShopEvents($dashboardEvents['body']['container']['events']);

        return array_slice($revertedEvents, 0, 11);
    }
}
