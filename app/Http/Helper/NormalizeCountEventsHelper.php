<?php

namespace App\Http\Helper;

class NormalizeCountEventsHelper
{
    protected function normalizeNumber(int $number): int
    {
        return $number > 999 ? number_format($number, 2, ',', ' ') : $number;
    }

    protected function normalizeShopEvents(array $shopEvents): array
    {
        foreach ($shopEvents as $key => $shopEvent) {
            $shopEvents[$key]['created_at'] = date("m/d/Y h:i:s", strtotime($shopEvent['created_at']));
        }

        return $shopEvents;
    }
}
