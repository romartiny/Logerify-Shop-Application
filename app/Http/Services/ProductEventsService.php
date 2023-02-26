<?php

namespace App\Http\Services;

use App\Http\Helper\ProductEventsHelper as ProductEventsHelper;
use App\Http\Services\EventsInterface as EventsInterface;
use App\Http\Services\FetchService\FetchDataService as FetchDataService;

class ProductEventsService implements EventsInterface
{
    private ProductEventsHelper $_productEventsHelper;
    private FetchDataService $_fetchData;
    private array $fetchedData = [];
    public string $page = 'productPage';
    private string $getRequestType = 'GET';
    private string $resourceEventType = 'events.json';

    public function __construct(FetchDataService $fetchData, ProductEventsHelper $productEventsHelper)
    {
        $this->_fetchData = $fetchData;
        $this->_productEventsHelper = $productEventsHelper;
    }

    public function getTodayProductEventsCount(): int
    {
        return $this->_productEventsHelper->normalizeNumber($this->_productEventsHelper
            ->grabTodayOrderEventsCount($this->fetchedData['body']['container']['events']));
    }

    public function getThreeDaysAdminEventsCount(): int
    {
        return $this->_productEventsHelper->normalizeNumber($this->_productEventsHelper
            ->grabOrderEventsCount($this->fetchedData['body']['container']['events'], 3));
    }

    public function getMonthAdminEventsCount(): int
    {
        return $this->_productEventsHelper->normalizeNumber($this->_productEventsHelper
            ->grabOrderEventsCount($this->fetchedData['body']['container']['events'], 30));
    }

    public function getEvents(): array
    {
        $this->fetchedData = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceEventType);

        return array_reverse($this->_productEventsHelper->normalizeShopEvents($this->fetchedData['body']['container']['events']));
    }
}
