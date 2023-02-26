<?php

namespace App\Http\Helper;

use App\Http\Helper\NormalizeCountEventsHelper as NormalizeCountEventsHelper;

class DashboardEventsHelper extends NormalizeCountEventsHelper
{
    public function normalizeNumber(int $number): int
    {
        return parent::normalizeNumber($number);
    }

    public function normalizeShopEvents(array $shopEvents): array
    {
        return parent::normalizeShopEvents($shopEvents);
    }
}
