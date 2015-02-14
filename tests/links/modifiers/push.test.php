<?php

class PushTest extends PHPUnit_Framework_TestCase {
  function testPush() {
    $this->assertEquals(
      [1, 2],
      hooray(1)
        ->push(2)
        ->realize());
  }
}
