<?php

namespace App\Http\Services;

use App\Http\Controllers\AuthController as AuthController;
use App\Http\Repository\ResponseRepository;

class AdminEventsService
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

    public function normalizeShopEvents($shopEvents): array
    {
        foreach ($shopEvents as $key => $shopEvent) {
            $shopEvents[$key]['created_at'] = date("m/d/Y h:i:s", strtotime($shopEvent['created_at']));
        }

        return $shopEvents;
    }

    public function grabAdminEvents(): array
    {
        $resourceType = 'events.json';
        $shopEvents = $this->retrieveData($this->getRequestType,
            $this->_authInformation->authorizedUser(), $resourceType);

        return $this->normalizeShopEvents(array_reverse($shopEvents['body']['container']['events']));
    }

    public function grabDayAdminEvents(): int
    {
        $todayAdminEvents = 0;
        foreach ($this->grabAdminEvents() as $order) {
            if (date("m/d/Y", strtotime($order['created_at'])) == date("m/d/Y")
                && $order['author'] !== 'Shopify') {
                $todayAdminEvents += 1;
            }
        }
        return $todayAdminEvents;
    }

    public function grabThreeDayAdminEvents(): int
    {
        $threeDayAdminEvents = 0;
        foreach ($this->grabAdminEvents() as $order) {
            if (date("m/d/Y", strtotime($order['created_at'])) >
                date("m/d/Y", strtotime(' - 3 days')) && $order['author'] !== 'Shopify') {
                $threeDayAdminEvents += 1;
            }
        }
        return $threeDayAdminEvents;
    }

    public function grabMonthAdminEvents(): int
    {
        $monthAdminEvents = 0;
        foreach ($this->grabAdminEvents() as $order) {
            if (date("m/d/Y", strtotime($order['created_at'])) >
                date("m/d/Y", strtotime(' - 30 days')) && $order['author'] !== 'Shopify') {
                $monthAdminEvents += 1;
            }
        }
        return $monthAdminEvents;
    }
}
