<?php

namespace App\Http\Helper;

use App\Http\Helper\NormalizeCountEventsHelper as NormalizeCountEventsHelper;
use App\Http\Helper\EventsHelperInterface as EventsHelperInterface;

class ThemeEventsHelper extends NormalizeCountEventsHelper implements EventsHelperInterface
{
    private string $currentThemeName = '';
    private int $totalStoreThemes = 0;
    private int $totalCustomThemes = 0;

    public function grabCurrentThemeName(array $fetchedData): string
    {
        foreach ($fetchedData as $order) {
            if ($order['role'] == 'main') {
                $this->currentThemeName = $order['name'];
            }
        }

        return $this->currentThemeName;
    }

    public function grabTotalStoreThemes(array $fetchedData): int
    {
        $this->totalStoreThemes = count($fetchedData);
        return $this->totalStoreThemes;
    }

    public function grabTotalCustomThemes(array $fetchedData): int
    {
        foreach ($fetchedData as $order) {
            if ($order['theme_store_id'] == null) {
                $this->totalCustomThemes += 1;
            }
        }

        return $this->totalCustomThemes;
    }

    public function normalizeShopEvents(array $shopEvents): array
    {
        foreach ($shopEvents as $key => $shopEvent) {
            $shopEvents[$key]['created_at'] = date("m/d/Y h:i:s", strtotime($shopEvent['created_at']));
            $shopEvents[$key]['updated_at'] = date("m/d/Y h:i:s", strtotime($shopEvent['updated_at']));
        }

        return $shopEvents;
    }

    public function normalizeNumber(int $number): int
    {
        return parent::normalizeNumber($number);
    }
}
