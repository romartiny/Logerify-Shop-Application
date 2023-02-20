<?php

namespace App\Http\Controllers;

class VersionController
{
    public function retrieveApiAdminVersion()
    {
        return env('SHOPIFY_API_VERSION_ADMIN') . env('SHOPIFY_API_VERSION');
    }
}
