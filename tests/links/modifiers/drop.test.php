<?php

class DropTest extends PHPUnit_Framework_TestCase {
  function testDrop() {
    $this->assertEquals(
      ['qwerty'],
      hooray('asdf', 'asdf', 'qwerty')->drop(2)->realize());
  }
}
