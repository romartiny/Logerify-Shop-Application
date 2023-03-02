<?php

namespace App\Http\Services;

use App\Http\Helper\ThemeEventsHelper as ThemeEventsHelper;
use App\Http\Services\EventsInterface as EventsInterface;
use App\Http\Services\FetchService\FetchDataService as FetchDataService;

class ThemeEventsService implements EventsInterface
{
    private ThemeEventsHelper $_themeEventsHelper;
    private FetchDataService $_fetchData;
    private array $fetchedData = [];
    public string $page = 'themePage';
    private string $getRequestType = 'GET';
    private string $resourceEventType = 'themes.json';

    public function __construct(FetchDataService $fetchData, ThemeEventsHelper $themeEventsHelper)
    {
        $this->_fetchData = $fetchData;
        $this->_themeEventsHelper = $themeEventsHelper;
    }

    public function getTotalStoreThemesCount(): int
    {
        return $this->_themeEventsHelper->normalizeNumber($this->_themeEventsHelper
            ->grabTotalStoreThemes($this->fetchedData['body']['container']['themes']));
    }

    public function getCurrentThemeName(): string
    {
        return $this->_themeEventsHelper->grabCurrentThemeName($this->fetchedData['body']['container']['themes']);
    }

    public function getTotalCustomThemesCount(): int
    {
        return $this->_themeEventsHelper->normalizeNumber($this->_themeEventsHelper
            ->grabTotalCustomThemes($this->fetchedData['body']['container']['themes']));
    }

    public function getEvents(): array
    {
        $this->fetchedData = $this->_fetchData->fetchShopifyData($this->getRequestType, $this->resourceEventType);

        return array_reverse($this->_themeEventsHelper->normalizeShopEvents($this->fetchedData['body']['container']['themes']));
    }
}
