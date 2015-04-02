<?php

class FirstTest extends PHPUnit_Framework_TestCase {
  function testFirst() {
    $this->assertEquals(
      1,
      hooray(1, 2, 3)->first());
  }

  function testReturnsIfEmptyIfActuallyEmpty() {
    $this->assertEquals(
      "hello",
      hooray()->first("hello"));
  }

  function testWorksOnAssociativeArrays() {
    $this->assertEquals(
      1,
      hooray(["a" => 1, "b" => 2, "c" => 3])->first());
  }
}
