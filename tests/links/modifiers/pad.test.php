<?php

class PadTest extends PHPUnit_Framework_TestCase {
  function testPad() {
    $this->assertEquals(
      [1, 1, 1, 1, 1],
      hooray(1)
        ->pad(5, 1)
        ->realize());
  }
}
