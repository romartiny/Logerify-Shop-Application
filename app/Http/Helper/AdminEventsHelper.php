<?php

namespace App\Http\Helper;

class AdminEventsHelper
{
    public function grabCountAdminEvents(array $fetchedData, int $days): int
    {
        $adminEventsCount = 0;
        foreach ($fetchedData as $order) {
            if (date("m/d/Y", strtotime($order['created_at'])) >
                date("m/d/Y", strtotime(" - $days days")) && $order['author'] !== 'Shopify') {
                $adminEventsCount += 1;
            }
        }

        return $adminEventsCount;
    }

    public function grabTodayAdminEvents(array $fetchedData): int
    {
        $todayAdminEventsCount = 0;
        foreach ($fetchedData as $order) {
            if (date("m/d/Y", strtotime($order['created_at'])) == date("m/d/Y")
                && $order['author'] !== 'Shopify') {
                $todayAdminEventsCount += 1;
            }
        }

        return $todayAdminEventsCount;
    }

    public function normalizeShopEvents(array $shopEvents): array
    {
        foreach ($shopEvents as $key => $shopEvent) {
            $shopEvents[$key]['created_at'] = date("m/d/Y h:i:s", strtotime($shopEvent['created_at']));
        }

        return $shopEvents;
    }
}
