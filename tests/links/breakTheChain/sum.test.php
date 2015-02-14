<?php

class SumTest extends PHPUnit_Framework_TestCase {
  function testSum() {
    $this->assertEquals(
      10,
      hooray(5, 5)->sum());
  }
}
