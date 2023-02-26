<?php

namespace App\Http\Services;

use App\Http\Controllers\AuthController as AuthController;
use App\Http\Services\EventsInterface as EventsInterface;
use App\Http\Repository\ResponseRepository as ResponseRepository;

class PaymentEventsService implements EventsInterface
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

    public function getEvents(): array
    {
        $resourceType = 'shopify_payments/payouts.json';
        $shopEvents = $this->retrieveData($this->getRequestType,
            $this->_authInformation->authorizedUser(), $resourceType);

        return $shopEvents;
    }
}
