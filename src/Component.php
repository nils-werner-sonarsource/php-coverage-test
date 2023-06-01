<?php

namespace PhpUnitCoverage;

use Exception;

class Component
{
    /**
     * @throws Exception
     */
    public function doSomething(int $input): bool
    {
        if ($input < 0) {
            throw new Exception("Input lower 0");
        } elseif ($input > 10 && $input < 20) {
            return true;
        } else {
            return false;
        }
    }

    public function doSomethingElse(int $input): void
    {
        echo $input;
    }
}
