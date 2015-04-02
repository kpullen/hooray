<?php

class ShuffleTest extends PHPUnit_Framework_TestCase {
  function testShuffle() {
    $this->assertEquals(
      [3, 1, 2],
      hooray(1, 2, 3)
        ->shuffle(1000)
        ->realize());
  }
}
