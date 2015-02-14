<?php

class FlipTest extends PHPUnit_Framework_TestCase {
  function testFlip() {
    $this->assertEquals(
      ['asdf' => 0, 'qwerty' => 1],
      hooray('asdf', 'qwerty')->flip()->realize());
  }
}
