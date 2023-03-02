<?php

namespace App\Http\Helper;

use App\Http\Helper\NormalizeCountEventsHelper as NormalizeCountEventsHelper;
use App\Http\Helper\EventsHelperInterface as EventsHelperInterface;

class ProductEventsHelper extends NormalizeCountEventsHelper implements EventsHelperInterface
{
    private int $todayProductEventsCount = 0;
    private int $productEventsCount = 0;

    public function grabTodayOrderEventsCount(array $fetchedData): int
    {
        foreach ($fetchedData as $order) {
            if (date("m/d/Y",strtotime($order['created_at'])) == date("m/d/Y")) {
                $this->todayProductEventsCount += 1;
            }
        }

        return $this->todayProductEventsCount;
    }

    public function grabOrderEventsCount(array $fetchedData, int $days): int
    {
        foreach ($fetchedData as $order) {
            if (date("m/d/Y",strtotime($order['created_at'])) > date("m/d/Y", strtotime(" - $days days"))) {
                $this->productEventsCount += 1;
            }
        }

        return $this->productEventsCount;
    }

    public function normalizeShopEvents(array $shopEvents): array
    {
        return parent::normalizeShopEvents($shopEvents);
    }

    public function normalizeNumber(int $number): int
    {
        return parent::normalizeNumber($number);
    }
}
