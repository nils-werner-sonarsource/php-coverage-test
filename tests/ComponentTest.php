<?php

namespace PhpUnitCoverage;

use Exception;
use PHPUnit\Framework\TestCase;

class ComponentTest extends TestCase
{

    public function testDoSomething()
    {
        $component = new Component();
        $this->assertFalse($component->doSomething(0));
        $this->assertFalse($component->doSomething(1));
        $this->assertFalse($component->doSomething(9));
        $this->assertFalse($component->doSomething(20));
    }

    public function testDoSomethingException()
    {
        $component = new Component();
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Input lower 0");
        $component->doSomething(-1);
    }
}
