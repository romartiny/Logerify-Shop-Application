<?php

namespace App\Http\Helper;

use App\Http\Helper\NormalizeCountEventsHelper as NormalizeCountEventsHelper;

class InfoEventsHelper extends NormalizeCountEventsHelper implements EventsHelperInterface
{
    public function normalizeNumber(int $number): int
    {
        return parent::normalizeNumber($number);
    }

    public function normalizeShopEvents(array $shopEvents): array
    {
        $shopEvents['created_at'] = date("m/d/Y h:i:s",strtotime($shopEvents['created_at']));
        $shopEvents['updated_at'] = date("m/d/Y h:i:s",strtotime($shopEvents['updated_at']));

        return $shopEvents;
    }
}
