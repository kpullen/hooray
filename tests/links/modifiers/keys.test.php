<?php

class KeysTest extends PHPUnit_Framework_TestCase {
  function testKeys() {
    $this->assertEquals(
      ['asdf', 'qwerty'],
      hooray(['asdf' => 1, 'qwerty' => 2])
        ->keys()
        ->realize());
  }
}
