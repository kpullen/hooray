<?php

class CountValuesTest extends PHPUnit_Framework_TestCase {
  function testCountValues() {
    $this->assertEquals(
      ['asdf' => 2, 'qwerty' => 1],
      hooray('asdf', 'asdf', 'qwerty')->countValues()->realize());
  }
}
