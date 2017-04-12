<?php

require "fib.php";

class FibTest extends PHPUnit\Framework\TestCase
{
  public function test1()
  {
    $this->assertSame(55, fib(10));
  }
}
