<?php

namespace App\Http\Helper;

use App\Http\Helper\NormalizeCountEventsHelper as NormalizeCountEventsHelper;
use App\Http\Helper\EventsHelperInterface as EventsHelperInterface;

class DashboardEventsHelper extends NormalizeCountEventsHelper implements EventsHelperInterface
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
