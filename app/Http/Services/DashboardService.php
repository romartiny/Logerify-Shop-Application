<?php

namespace App\Http\Services;

use App\Http\Controllers\AuthController as AuthController;
use App\Http\Repository\ResponseRepository;

class DashboardService
{
    private ResponseRepository $_request;
    private \App\Http\Controllers\AuthController $_authInformation;
    public string $getRequestType = 'GET';

    public function __construct(ResponseRepository $request, AuthController $authInformation)
    {
        $this->_request = $request;
        $this->_authInformation = $authInformation;
    }

    public function retrieveData($requestType, $authInformation, $resourceType)
    {
        return $this->_request->getShopifyResponse($requestType, $authInformation,
            $resourceType);
    }

    public function normalizeNumber($number): string
    {
        return $number > 999 ? number_format($number, 2, ',', ' ') : $number;
    }

    public function grabTotalEvents(): string
    {
        $resourceType = 'events/count.json';
        $totalEvents = $this->retrieveData($this->getRequestType,
            $this->_authInformation->authorizedUser(), $resourceType );

        return $this->normalizeNumber($totalEvents['body']['container']['count']);
    }

    public function grabCustomersCount(): string //need to fix 
    {
        $resourceType = 'customers/count.json';
        $totalCustomersCount = $this->retrieveData($this->getRequestType,
            $this->_authInformation->authorizedUser(), $resourceType );

        return $this->normalizeNumber($totalCustomersCount['body']['container']['count']);
    }

    public function grabOrdersCount(): string
    {
        $resourceType = 'orders/count.json';
        $totalOrdersCount = $this->retrieveData($this->getRequestType,
            $this->_authInformation->authorizedUser(), $resourceType );

        return $this->normalizeNumber($totalOrdersCount['body']['container']['count']);
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
        $resourceType = 'events.json';
        $shopEvents = $this->retrieveData($this->getRequestType,
            $this->_authInformation->authorizedUser(), $resourceType);
        $revertedEvents = $this->normalizeShopEvents(array_reverse($shopEvents['body']['container']['events']));

        return array_slice($revertedEvents, 0, 11);
    }
}
