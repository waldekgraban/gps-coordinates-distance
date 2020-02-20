<?php

namespace Waldekgraban\Distance\Tests\Unit;

use Waldekgraban\Distance\Location\Point;
use Waldekgraban\Distance\Counter\Calculator;
use Waldekgraban\Distance\Tests\TestCase;

class CalculatorTest extends TestCase
{
    public function testCanInitializeByConstructor()
    {
        $startingPlace = new Point(54.377464, 18.608775);
        $destination   = new Point(54.357664, 18.586158);

        $calculator = new Calculator($startingPlace, $destination, $kilometers = true);

        $this->assertInstanceOf(Calculator::class, $calculator);
    }

    public function testDistanceIsNumbers()
    {
        $startingPlace = new Point(54.377464, 18.608775);
        $destination   = new Point(54.357664, 18.586158);

        $calculator = new Calculator($startingPlace, $destination, $kilometers = true);

        $this->assertIsFloat($calculator->getDistance());
    }
}