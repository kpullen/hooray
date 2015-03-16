<?php

class FilterTest extends PHPUnit_Framework_TestCase {
  function testFilter() {
    $this->assertEquals(
      [1, 2],
      hooray(1, 2, 3)
        ->filter(function($item) { return $item < 3; })
        ->realize());
  }
}
