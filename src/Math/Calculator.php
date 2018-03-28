<?php

namespace Math;

class Calculator
{


    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new \Exception("Cannot divide by 0");
        }

        return $a / $b;
    }


}
