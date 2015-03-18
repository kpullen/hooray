<?php

class AsEnglishTest extends PHPUnit_Framework_TestCase {
  function testAsEnglish() {
    $this->assertEquals(
      '1, 2, and 3',
      hooray(1, 2, 3)->asEnglish());
  }
}
