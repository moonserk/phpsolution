<?php

require "pascal.php";

class PascalTest extends PHPUnit\Framework\TestCase
{
  public function test1()
  {
    $this->assertSame([1], generate(0));
  }
  public function test2()
  {
    $this->assertSame([1, 1], generate(1));
  }
  public function test3()
  {
    $this->assertSame([1, 2, 1], generate(2));
  }
}
