<?php

namespace App\Http\Helper;

use App\Http\Helper\NormalizeCountEventsHelper as NormalizeCountEventsHelper;

class AdminEventsHelper extends NormalizeCountEventsHelper
{
    private int $todayAdminEventsCount = 0;
    private int $adminEventsCount = 0;

    public function grabTodayAdminEventsCount(array $fetchedData): int
    {
        foreach ($fetchedData as $order) {
            if (date("m/d/Y", strtotime($order['created_at'])) == date("m/d/Y")
                && $order['author'] !== 'Shopify') {
                $this->todayAdminEventsCount += 1;
            }
        }

        return $this->todayAdminEventsCount;
    }

    public function grabAdminEventsCount(array $fetchedData, int $days): int
    {
        foreach ($fetchedData as $order) {
            if (date("m/d/Y", strtotime($order['created_at'])) >
                date("m/d/Y", strtotime(" - $days days")) && $order['author'] !== 'Shopify') {
                $this->adminEventsCount += 1;
            }
        }

        return $this->adminEventsCount;
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
