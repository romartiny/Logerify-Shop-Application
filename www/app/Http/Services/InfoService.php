<?php

namespace App\Http\Services;

use App\Http\Controllers\AuthController as AuthController;
use App\Http\Repository\ResponseRepository as ResponseRepository;

class InfoService
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

    public function grabShopInfo(): array
    {
        $resourceType = 'shop.json';
        $totalEvents = $this->retrieveData($this->getRequestType,
            $this->_authInformation->authorizedUser(), $resourceType );

        return $this->normalizeShopDates($totalEvents['body']['container']['shop']);
    }

    public function normalizeShopDates($shopEvents): array
    {
        $shopEvents['created_at'] = date("m/d/Y h:i:s",strtotime($shopEvents['created_at']));
        $shopEvents['updated_at'] = date("m/d/Y h:i:s",strtotime($shopEvents['updated_at']));

        return $shopEvents;
    }
}
