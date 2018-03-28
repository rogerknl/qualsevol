<?php

namespace Math;

class Fetcher
{

    /**
     * @var Checker
     */
    private $checker;

    /**
     * @param Checker $checker
     */
    public function __construct(Checker $checker)
    {
        $this->checker = $checker;
    }

    public function evaluate($a)
    {
        if ($a < 0) {
            return 'Peach';
        }

        if ($this->checker->check($a) == true ) {
            return 'Banana';
        }

        return 'Apple';
    }
}
