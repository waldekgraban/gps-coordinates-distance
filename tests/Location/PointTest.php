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
}