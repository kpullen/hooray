<?php

class ReduceTest extends PHPUnit_Framework_TestCase {
  function testReduce() {
    $this->assertEquals(
      6,
      hooray(1, 2, 3)
        ->reduce(
          function($carry, $item) {
            return $carry + $item; }));
  }
}
