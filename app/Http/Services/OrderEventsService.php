<?php

namespace App\Http\Services;

use App\Http\Controllers\AuthController as AuthController;
use App\Http\Repository\ResponseRepository;

class OrderEventsService
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

    public function grabOrderEvents(): array
    {
        $resourceType = 'orders.json';
        $shopEvents = $this->retrieveData($this->getRequestType,
            $this->_authInformation->authorizedUser(), $resourceType);

        return $this->normalizeShopEvents(array_reverse($shopEvents['body']['container']['orders']));
    }

    public function grabDayOrderEvents(): int
    {
        $todayOrders = 0;
        foreach ($this->grabOrderEvents() as $order) {
            if (date("m/d/Y",strtotime($order['created_at'])) == date("m/d/Y")) {
                $todayOrders += 1;
            }
        }
        return $todayOrders;
    }

    public function grabThreeDayOrderEvents(): int
    {
        $threeDayOrders = 0;
        $todayDate = strtotime(date('m/d/Y'));
        foreach ($this->grabOrderEvents() as $order) {
            if (date("m/d/Y",strtotime($order['created_at'])) > date("m/d/Y", strtotime(' - 3 days'))) {
                $threeDayOrders += 1;
            }
        }
        return $threeDayOrders;
    }
}
