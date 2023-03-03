<?php

namespace App\Http\Services;

use App\Http\Helper\InfoEventsHelper as InfoEventsHelper;
use App\Http\Services\EventsInterface as EventsInterface;
use App\Http\Services\FetchService\FetchDataService as FetchDataService;

class InfoService implements EventsInterface
{
    private InfoEventsHelper $_infoEventsHelper;
    private FetchDataService $_fetchData;
    private array $fetchedData = [];
    public string $page = 'infoPage';
    private string $getRequestType = 'GET';
    private string $resourceEventType = 'shop.json';

    public function __construct(FetchDataService $fetchData, InfoEventsHelper $infoEventsHelper)
    {
        $this->_fetchData = $fetchData;
        $this->_infoEventsHelper = $infoEventsHelper;
    }

    public function getEvents(): array
    {
        $this->fetchedData = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceEventType);

        return $this->_infoEventsHelper->normalizeShopEvents($this->fetchedData['body']['container']['shop']);
    }
}
