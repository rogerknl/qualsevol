<?php

namespace Math;

use PHPUnit\Framework\TestCase;

class FetcherTest extends TestCase
{

    public function testEvaluatePeach()
    {
        $checkerMock = $this->getMockClass('Checker');
        $checkerMock
            ->expects('check')
            ->never();

        $fetcher = new Fetcher($checkerMock);

        $this->assertEquals('Peach', $fetcher->evaluate(-3));
    }

    public function testEvaluateBanana()
    {
        $checkerMock = $this->getMockClass('Checker');
        $checkerMock
            ->expects('check')
            ->withValue(0)
            ->once()
            ->willReturn(true);

        $fetcher = new Fetcher($checkerMock);

        $this->assertEquals('Banana', $fetcher->evaluate(0));
    }

    public function testEvaluateApple()
    {
        $checkerMock = $this->getMockClass('Checker');
        $checkerMock
            ->expects('check')
            ->withValue(5)
            ->once()
            ->willReturn(false);

        $fetcher = new Fetcher($checkerMock);

        $this->assertEquals('Apple', $fetcher->evaluate(5));
    }

    /**
     * @expectedException \Exception
     */
    public function testCheckerThrowsException()
    {
        $checkerMock = $this->getMockClass('Checker');
        $checkerMock
            ->expects('check')
            ->withValue(0)
            ->once()
            ->willThrowException();

        $fetcher = new Fetcher($checkerMock);

        $fetcher->evaluate(1);


    }
}
