<?php

namespace App\Http\Helper;

class ProductEventsHelper
{
    public function normalizeShopEvents($shopEvents): array
    {
        foreach ($shopEvents as $key => $shopEvent) {
            $shopEvents[$key]['created_at'] = date("m/d/Y h:i:s",strtotime($shopEvent['created_at']));
        }

        return $shopEvents;
    }

    public function grabDayOrderEventsCount($fetchedData): int
    {
        $todayProduct = 0;
        foreach ($fetchedData as $order) {
            if (date("m/d/Y",strtotime($order['created_at'])) == date("m/d/Y")) {
                $todayProduct += 1;
            }
        }

        return $todayProduct;
    }

    public function grabOrderEventsCount($fetchedData, $days): int
    {
        $threeDayProducts = 0;
        foreach ($fetchedData as $order) {
            if (date("m/d/Y",strtotime($order['created_at'])) > date("m/d/Y", strtotime(" - $days days"))) {
                $threeDayProducts += 1;
            }
        }

        return $threeDayProducts;
    }
}
