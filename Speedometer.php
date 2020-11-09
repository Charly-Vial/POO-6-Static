<?php

class Speedometer {
    const RATIO = 1.60934;
    public static function convertKmToMiles (float $distance) :float
    {
        return round($distance / self::RATIO, 2);
    }
}
