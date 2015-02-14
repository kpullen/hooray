<?php

class SpliceTest extends PHPUnit_Framework_TestCase {
  function testSplice() {
    $this->assertEquals(
      [1, 2, 3],
      hooray(1, 4, 3)
        ->splice(1, 1, 2)
        ->realize());
  }
}
