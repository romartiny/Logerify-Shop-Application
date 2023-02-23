<?php

namespace App\Http\Services;

use App\Http\Controllers\AuthController as AuthController;
use App\Http\Repository\ResponseRepository;

class ProductEventsService
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
            $shopEvents[$key]['created_at'] = date("m/d/Y h:i:s",strtotime($shopEvent['created_at']));
        }

        return $shopEvents;
    }

    public function grabProductEvents(): array
    {
        $resourceType = 'events.json';
        $shopEvents = $this->retrieveData($this->getRequestType,
            $this->_authInformation->authorizedUser(), $resourceType);

        return $this->normalizeShopEvents($shopEvents['body']['container']['events']);
    }

    public function grabDayOrderEvents(): int
    {
        $todayProduct = 0;
        foreach ($this->grabProductEvents() as $order) {
            if (date("m/d/Y",strtotime($order['created_at'])) == date("m/d/Y")) {
                $todayProduct += 1;
            }
        }
        return $todayProduct;
    }

    public function grabThreeDayOrderEvents(): int
    {
        $threeDayProducts = 0;
        foreach ($this->grabProductEvents() as $order) {
            if (date("m/d/Y",strtotime($order['created_at'])) > date("m/d/Y", strtotime(' - 3 days'))) {
                $threeDayProducts += 1;
            }
        }
        return $threeDayProducts;
    }

    public function grabMonthOrderEvents(): int
    {
        $monthProducts = 0;
        foreach ($this->grabProductEvents() as $order) {
            if (date("m/d/Y",strtotime($order['created_at'])) > date("m/d/Y", strtotime(' - 30 days'))) {
                $monthProducts += 1;
            }
        }
        return $monthProducts;
    }
}
