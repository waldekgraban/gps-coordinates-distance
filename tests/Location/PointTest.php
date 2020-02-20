<?php

namespace Waldekgraban\Distance\Tests\Unit;

use Waldekgraban\Distance\Location\Point;
use Waldekgraban\Distance\Tests\TestCase;

class PointTest extends TestCase
{
    public function testCanInitializeByConstructor()
    {
        $point = new Point(54.377464, 18.608775);

        $this->assertInstanceOf(Point::class, $point);
    }

    public function testPointLatitudeAreNumbers()
    {
        $testPlace = new Point(54.377464, 18.608775);

        $this->assertIsFloat($testPlace->lat);
    }

    public function testPointLongtudeAreNumbers()
    {
        $testPlace = new Point(54.377464, 18.608775);

        $this->assertIsFloat($testPlace->lon);
    }
}