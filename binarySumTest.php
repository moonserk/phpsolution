<?php

require "binarySum.php";

class BinarySumTest extends PHPUnit\Framework\TestCase
{
  public function test1()
  {
    $this->assertSame('10', binarySum('01', '01'));
  }
  public function test2()
  {
    $this->assertSame('11', binarySum('10', '01'));
  }
  public function test3()
  {
    $this->assertSame('10010', binarySum('1101', '101'));
  }
}
