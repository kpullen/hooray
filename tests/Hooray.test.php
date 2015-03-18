<?php

class HoorayTest extends PHPUnit_Framework_TestCase {
  function testRealizeReturnsAnArray() {
    $this->assertEquals(
      [1, 2, 3],
      hooray([1, 2, 3])->realize());
  }

  function testAcceptsNoArguments() {
    $this->assertEquals(
      [],
      hooray()->realize());
  }

  function testAcceptsNonArrayArgument() {
    $this->assertEquals(
      [1],
      hooray(1)->realize());
  }

  function testUnwrapsArrays() {
    $this->assertEquals(
      [1],
      Hooray::unwrap([[1]]));
  }

  function testUnwrapsHoorays() {
    $this->assertEquals(
      [1],
      Hooray::unwrap([new Hooray([1])]));
  }
}
