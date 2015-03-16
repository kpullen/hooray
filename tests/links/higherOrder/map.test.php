<?php

class MapTest extends PHPUnit_Framework_TestCase {
  function testMap() {
    $this->assertEquals(
      [2, 3, 4],
      hooray(1, 2, 3)
        ->map(function($item) { return $item + 1; })
        ->realize());
  }
}
