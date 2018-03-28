<?php

namespace Math;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testSum()
    {
        $calculator = new Calculator();

        $a = 1;
        $b = 2;
        $expectedResult = $a + $b;

        $result = $calculator->sum($a, $b);

        $this->assertEquals($expectedResult, $result);
    }

    public function testDivide()
    {
        $calculator = new Calculator();

        $a = 4;
        $b = 2;

        $this->assertEquals($a/$b, $calculator->divide($a,$b));
    }

    /**
     * @expectedException \Exception
     */
    public function testDivideByZero()
    {
        $calculator = new Calculator();

        $calculator->divide(4,0);
    }
}
