<?php
/*
 *
 * Created by Waldemar Graban 2020
 *
 */

namespace Waldekgraban\Distance\Location;

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