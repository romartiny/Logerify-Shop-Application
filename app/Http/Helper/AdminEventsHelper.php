<?php

namespace App\Http\Helper;

class AdminEventsHelper
{
    public function grabCountAdminEvents($fetchedData, $days): int
    {
        $adminEvents = 0;
        foreach ($fetchedData as $order) {
            if (date("m/d/Y", strtotime($order['created_at'])) >
                date("m/d/Y", strtotime(" - $days days")) && $order['author'] !== 'Shopify') {
                $adminEvents += 1;
            }
        }

        return $adminEvents;
    }

    public function grabTodayAdminEvents($fetchedData): int
    {
        $todayAdminEvents = 0;
        foreach ($fetchedData as $order) {
            if (date("m/d/Y", strtotime($order['created_at'])) == date("m/d/Y")
                && $order['author'] !== 'Shopify') {
                $todayAdminEvents += 1;
            }
        }

        return $todayAdminEvents;
    }

    public function normalizeShopEvents($shopEvents): array
    {
        foreach ($shopEvents as $key => $shopEvent) {
            $shopEvents[$key]['created_at'] = date("m/d/Y h:i:s", strtotime($shopEvent['created_at']));
        }

        return $shopEvents;
    }
}
