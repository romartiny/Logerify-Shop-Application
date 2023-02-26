<?php

namespace App\Http\Services;

use App\Http\Helper\DashboardEventsHelper as DashboardEventsHelper;
use App\Http\Services\EventsInterface as EventsInterface;
use App\Http\Services\FetchService\FetchDataService as FetchDataService;

class DashboardService implements EventsInterface
{
    private DashboardEventsHelper $_dashboardEventsHelper;
    private FetchDataService $_fetchData;
    public string $page = 'dashboardPage';
    private string $getRequestType = 'GET';
    private string $resourceEventType = 'events.json';
    private string $resourceEventsCountType = 'events/count.json';
    private string $resourceOrdersCountType = 'orders/count.json';
    private string $resourceCustomersCountType = 'customers/count.json';

    public function __construct(FetchDataService $fetchData, DashboardEventsHelper $dashboardEventsHelper)
    {
        $this->_fetchData = $fetchData;
        $this->_dashboardEventsHelper = $dashboardEventsHelper;
    }

    public function grabTotalEventsCount(): int
    {
        $totalEvents = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceEventsCountType);

        return $this->_dashboardEventsHelper->normalizeNumber($totalEvents['body']['container']['count']);
    }

    public function grabTotalCustomersCount(): int
    {
        $totalEvents = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceCustomersCountType);

        return $this->_dashboardEventsHelper->normalizeNumber($totalEvents['body']['container']['count']);
    }

    public function grabTotalOrdersCount(): int
    {
        $totalEvents = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceOrdersCountType);

        return $this->_dashboardEventsHelper->normalizeNumber($totalEvents['body']['container']['count']);
    }

    public function getEvents(): array
    {
        $dashboardEvents = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceEventType);

        return array_slice(array_reverse($this->_dashboardEventsHelper
            ->normalizeShopEvents($dashboardEvents['body']['container']['events'])), 0, 10);
    }
}
