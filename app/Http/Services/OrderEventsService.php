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
//        foreach ($shopEvents as $key => $shopEvent) {
//            $shopEvents[$key]['created_at'] = date("m/d/Y h:i:s",strtotime($shopEvent['created_at']));
//        }

        return $shopEvents;
    }

    public function grabOrderEvents(): array
    {
        $resourceType = 'orders.json';
        $shopEvents = $this->retrieveData($this->getRequestType,
            $this->_authInformation->authorizedUser(), $resourceType);

        return $this->normalizeShopEvents(array_reverse($shopEvents['body']['container']['orders']));
    }
}
