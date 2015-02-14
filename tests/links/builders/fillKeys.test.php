<?php

class FillKeysTest extends PHPUnit_Framework_TestCase {
  function testFillKeys() {
    $this->assertEquals(
      ['a' => 'asdf', 'b' => 'asdf', 'c' => 'asdf'],
      hooray()->fillKeys(['a', 'b', 'c'], 'asdf')->realize());
  }
}
