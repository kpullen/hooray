<?php

class UniqueTest extends PHPUnit_Framework_TestCase {
  function testUnique() {
    $this->assertEquals(
      ["asdf", "qwerty"],
      hooray("asdf", "asdf", "qwerty")
        ->unique()
        ->realize());
  }
}
