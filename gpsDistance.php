<?php
/*
 *
 * Copyright (c) 2019 Waldemar Graban
 *
 */

function getDistance($point_a, $point_b, $kilometers)
{
    $distance = sin(deg2rad($point_a->lat)) * sin(deg2rad($point_b->lat)) + cos(deg2rad($point_a->lat)) * cos(deg2rad($point_b->lat)) * cos(deg2rad($point_a->lon - $point_b->lon));
    $distance = acos($distance);
    $distance = rad2deg($distance);
    $miles    = $distance * 60 * 1.1515;

    $distanceUnit = ($kilometers)
        ? ($miles * 1.609344)
        : $miles;

    return $distanceUnit;
}

class Point
{
    protected $latitude;
    protected $longitude;

    public function __construct($latitude, $longitude)
    {
        $this->lat = $latitude;
        $this->lon = $longitude;
    }
}

$point_a = new Point(54.406745, 18.666948);
$point_b = new Point(49.251006, 19.934036);

$result = getDistance($point_a, $point_b, $kilometers = true);
echo round($result, 2);
