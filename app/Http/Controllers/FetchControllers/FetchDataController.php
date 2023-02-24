<?php

namespace App\Http\Controllers\FetchControllers;

use App\Http\Controllers\AuthController as AuthController;
use App\Http\Repository\ResponseRepository;

class FetchDataController
{
    private ResponseRepository $_request;
    private \App\Http\Controllers\AuthController $_authInformation;

    public function __construct(ResponseRepository $request, AuthController $authInformation)
    {
        $this->_request = $request;
        $this->_authInformation = $authInformation;
    }

    private function retrieveShopifyData($requestType, $resourceType)
    {
        return $this->_request->getShopifyResponse($requestType, $this->_authInformation->authorizedUser(),
            $resourceType);
    }

    public function fetchShopifyData($getRequestType, $resourceType): array
    {
        $shopifyEvents = $this->retrieveShopifyData($getRequestType, $resourceType);

        return array_reverse($shopifyEvents);
    }
}
