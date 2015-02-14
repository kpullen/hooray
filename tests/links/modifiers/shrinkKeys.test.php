<?php

class ShrinkKeysTest extends PHPUnit_Framework_TestCase {
  function testShrinkKeys() {
    $this->assertEquals(
      ['asdf' => 1],
      hooray(['ASDF' => 1])->shrinkKeys()->realize());
  }
}
