<?php

namespace App\Http\Helper;

use App\Http\Helper\NormalizeCountEventsHelper as NormalizeCountEventsHelper;
use App\Http\Helper\EventsHelperInterface as EventsHelperInterface;

class PaymentEventsHelper extends NormalizeCountEventsHelper implements EventsHelperInterface
{
    private int $todayPaymentEventsCount = 0;
    private int $paymentEventsCount = 0;

    public function grabTodayOrderEventsCount(array $fetchedData): int
    {
        foreach ($fetchedData as $order) {
            if (date("m/d/Y", strtotime($order['processed_at'])) == date("m/d/Y")) {
                $this->todayPaymentEventsCount += 1;
            }
        }

        return $this->todayPaymentEventsCount;
    }

    public function grabOrderEventsCount(array $fetchedData, int $days): int
    {
        foreach ($fetchedData as $order) {
            if (date("m/d/Y", strtotime($order['processed_at'])) >
                date("m/d/Y", strtotime(" - $days days"))) {
                $this->paymentEventsCount += 1;
            }
        }

        return $this->paymentEventsCount;
    }

    public function normalizeShopEvents(array $shopEvents): array
    {
        foreach ($shopEvents as $key => $shopEvent) {
            $shopEvents[$key]['processed_at'] = date("m/d/Y h:i:s", strtotime($shopEvent['processed_at']));
        }

        return $shopEvents;
    }

    public function normalizeNumber(int $number): int
    {
        return parent::normalizeNumber($number);
    }
}
