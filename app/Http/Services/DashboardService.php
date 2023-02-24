<?php

namespace App\Http\Services;

use App\Http\Controllers\FetchControllers\FetchDataController as FetchDataController;
use App\Http\Services\EventsInterface as EventsInterface;
use App\Http\Helper\DashboardEventsHelper as DashboardEventsHelper;

class DashboardService implements EventsInterface
{
    private FetchDataController $_fetchData;
    private DashboardEventsHelper $_dashboardEventsHelper;
    public string $page = 'dashboardPage';
    private string $getRequestType = 'GET';
    private string $resourceEventType = 'events.json';
    private string $resourceEventsCountType = 'events/count.json';
    private string $resourceOrdersCountType = 'orders/count.json';
    private string $resourceCustomersCountType = 'customers/count.json';

    public function __construct(FetchDataController $fetchData, DashboardEventsHelper $dashboardEventsHelper)
    {
        $this->_fetchData = $fetchData;
        $this->_dashboardEventsHelper = $dashboardEventsHelper;
    }

    public function grabTotalEvents(): int
    {
        $totalEvents = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceEventsCountType);

        return $this->_dashboardEventsHelper->normalizeNumber($totalEvents['body']['container']['count']);
    }

    public function grabCustomersCount(): int
    {
        $totalEvents = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceCustomersCountType);

        return $this->_dashboardEventsHelper->normalizeNumber($totalEvents['body']['container']['count']);
    }

    public function grabOrdersCount(): int
    {
        $totalEvents = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceOrdersCountType);

        return $this->_dashboardEventsHelper->normalizeNumber($totalEvents['body']['container']['count']);
    }

    public function getEvents(): array
    {
        $dashboardEvents = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceEventType);
        $revertedEvents = array_reverse($this->_dashboardEventsHelper->normalizeShopEvents($dashboardEvents['body']['container']['events']));

        return array_slice($revertedEvents, 0, 10);
    }
}
