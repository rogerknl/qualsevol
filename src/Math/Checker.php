<?php

namespace Math;

class Checker
{
    public function check($a)
    {
        if ($a == 0) {
            return true;
        }

        if ($a == 1) {
            throw new \Exception();
        }

        return false;
    }
}
