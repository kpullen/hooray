<?php

class ValuesTest extends PHPUnit_Framework_TestCase {
  function testValues() {
    $this->assertEquals(
      [1, 2, 3],
      hooray([
        'asdf' => 1,
        'qwerty' => 2,
        'hjkl' => 3])->values()->realize());
  }
}
