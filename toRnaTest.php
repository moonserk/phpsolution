<?php

require "toRna.php";

class ToRnaTest extends PHPUnit\Framework\TestCase
{
  public function test1()
  {
    $this->assertSame('UGCACCAGAAUU', toRna('ACGTGGTCTTAA'));
  }
}
