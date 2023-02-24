<?php

namespace App\Http\Helper;

class OrderEventsHelper
{
    public function grabDayOrderEvents($fetchedData): int
    {
        $todayOrders = 0;
        foreach ($fetchedData as $order) {
            if (date("m/d/Y", strtotime($order['created_at'])) == date("m/d/Y")) {
                $todayOrders += 1;
            }
        }

        return $todayOrders;
    }

    public function grabOrderEventsCount($fetchedData, $days): int
    {
        $orderEventsCount = 0;
        foreach ($fetchedData as $order) {
            if (date("m/d/Y", strtotime($order['created_at'])) > date("m/d/Y", strtotime(" - $days days"))) {
                $orderEventsCount += 1;
            }
        }

        return $orderEventsCount;
    }

    public function normalizeShopEvents($shopEvents): array
    {
        foreach ($shopEvents as $key => $shopEvent) {
            $shopEvents[$key]['created_at'] = date("m/d/Y h:i:s", strtotime($shopEvent['created_at']));
        }

        return $shopEvents;
    }
}
