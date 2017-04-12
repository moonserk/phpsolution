<?php

require "isPowerOfThree.php";

class IsPowerOfThreeTest extends PHPUnit\Framework\TestCase
{
  public function test1()
  {
    $this->assertSame(true, isPowerOfThree(1));
  }
  public function test2()
  {
    $this->assertSame(true, isPowerOfThree(3));
  }
  public function test3()
  {
    $this->assertSame(false, isPowerOfThree(4));
  }
  public function test4()
  {
    $this->assertSame(true, isPowerOfThree(9));
  }
}
