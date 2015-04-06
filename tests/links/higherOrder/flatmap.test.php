<?php

class FlatmapTest extends PHPUnit_Framework_TestCase {
  function testFlatmap() {
    $this->assertEquals(
      [1, 2, 3],
      hooray([1], [2], [3])
        ->flatmap(function($item) { return $item; })
        ->realize());
  }

  function testFlatmapWithoutArrays() {
    $this->assertEquals(
      [1, 2, 3],
      hooray(1, 2, 3)
        ->flatmap(function($item) { return $item; })
        ->realize());
  }
}
