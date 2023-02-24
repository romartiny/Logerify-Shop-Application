<?php

namespace App\Http\Services;

use App\Http\Helper\AdminEventsHelper as AdminEventsHelper;
use App\Http\Services\EventsInterface as EventsInterface;
use App\Http\Services\FetchService\FetchDataService as FetchDataService;

class AdminEventsService implements EventsInterface
{
    private AdminEventsHelper $_adminEventsHelper;
    private FetchDataService $_fetchData;
    private array $fetchedData = [];
    public string $page = 'adminPage';
    private string $getRequestType = 'GET';
    private string $resourceEventType = 'events.json';

    public function __construct(FetchDataService $fetchData, AdminEventsHelper $adminEventsHelper)
    {
        $this->_fetchData = $fetchData;
        $this->_adminEventsHelper = $adminEventsHelper;
    }

    public function getTodayAdminEvents(): int
    {
        return $this->_adminEventsHelper->grabTodayAdminEvents($this->fetchedData['body']['container']['events']);
    }

    public function getThreeDaysAdminEvents(): int
    {
        return $this->_adminEventsHelper->grabCountAdminEvents($this->fetchedData['body']['container']['events'], 3);
    }

    public function getMonthAdminEvents(): int
    {
        return $this->_adminEventsHelper->grabCountAdminEvents($this->fetchedData['body']['container']['events'], 30);
    }

    public function getEvents(): array
    {
        $this->fetchedData = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceEventType);

        return array_reverse($this->_adminEventsHelper->normalizeShopEvents($this->fetchedData['body']['container']['events']));
    }
}
