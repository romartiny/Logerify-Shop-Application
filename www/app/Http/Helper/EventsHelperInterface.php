<?php

namespace App\Http\Helper;

interface EventsHelperInterface
{
    public function normalizeShopEvents(array $shopEvents): array;
    public function normalizeNumber(int $number): int;
}
