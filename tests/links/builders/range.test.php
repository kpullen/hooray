<?php

class RangeTest extends PHPUnit_Framework_TestCase {
  function testRange() {
    $this->assertEquals(
      [1, 2, 3],
      hooray()->range(1, 3)->realize());
  }

  function testAcceptsStep() {
    $this->assertEquals(
      [1, 3, 5],
      hooray()->range(1, 5, 2)->realize());
  }
}
