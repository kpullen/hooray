<?php

class TakeTest extends PHPUnit_Framework_TestCase {
  function testTake() {
    $this->assertEquals(
      ['asdf', 'asdf'],
      hooray('asdf', 'asdf', 'qwerty')->take(2)->realize());
  }
}
