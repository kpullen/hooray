<?php

class GrowKeysTest extends PHPUnit_Framework_TestCase {
  function testGrowKeys() {
    $this->assertEquals(
      ['ASDF' => 1],
      hooray(['asdf' => 1])->growKeys()->realize());
  }
}
