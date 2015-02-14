<?php

class FillTest extends PHPUnit_Framework_TestCase {
  function testAcceptsOffset() {
    $this->assertEquals(
      array(
        1 => 'asdf',
        2 => 'asdf',
        3 => 'asdf'),
      hooray()->fill(1, 3, 'asdf')->realize());
  }

  function testDoesntNeedOffset() {
    $this->assertEquals(
      ['asdf', 'asdf', 'asdf'],
      hooray()->fill(3, 'asdf')->realize());
  }
}
