<?php

class PopTest extends PHPUnit_Framework_TestCase {
  function testPop() {
    $this->assertEquals(
      1,
      hooray(3, 2, 1)->pop());
  }
}
