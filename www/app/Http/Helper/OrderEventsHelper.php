<?php

namespace App\Http\Helper;

use App\Http\Helper\NormalizeCountEventsHelper as NormalizeCountEventsHelper;
use App\Http\Helper\EventsHelperInterface as EventsHelperInterface;

class OrderEventsHelper extends NormalizeCountEventsHelper implements EventsHelperInterface
{
    private int $todayOrderEventsCount = 0;
    private int $orderEventsCount = 0;

    public function grabTodayOrderEventsCount(array $fetchedData): int
    {
        foreach ($fetchedData as $order) {
            if (date("m/d/Y", strtotime($order['created_at'])) == date("m/d/Y")) {
                $this->todayOrderEventsCount += 1;
            }
        }

        return $this->todayOrderEventsCount;
    }

    public function grabOrderEventsCount(array $fetchedData, int $days): int
    {
        foreach ($fetchedData as $order) {
            if (date("m/d/Y", strtotime($order['created_at'])) >
                date("m/d/Y", strtotime(" - $days days"))) {
                $this->orderEventsCount += 1;
            }
        }

        return $this->orderEventsCount;
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
