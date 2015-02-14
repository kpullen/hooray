<?php

class ShiftTest extends PHPUnit_Framework_TestCase {
  function testShift() {
    $this->assertEquals(
      1,
      hooray(1, 2, 3)->shift());
  }
}
