<?php

class UnshiftTest extends PHPUnit_Framework_TestCase {
  function testUnshift() {
    $this->assertEquals(
      ['asdf', 'asdf'],
      hooray('asdf')
        ->unshift('asdf')
        ->realize());
  }
}
