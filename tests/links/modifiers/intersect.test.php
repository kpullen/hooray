<?php

class IntersectTest extends PHPUnit_Framework_TestCase {
  function testIntersect() {
    $this->assertEquals(
      [1, 2],
      hooray(1, 2, 3)
        ->intersect([1, 2])
        ->realize());
  }

  function testIntersectUnwrapsHoorays() {
    $this->assertEquals(
      [1, 2],
      hooray(1, 2, 3)
        ->intersect(hooray(1, 2))
        ->realize());
  }

  function testIntersectHandlesSingleItemArrays() {
    $this->assertEquals(
      [1],
      hooray(1, 2, 3)
        ->intersect([1])
        ->realize());
  }
}
