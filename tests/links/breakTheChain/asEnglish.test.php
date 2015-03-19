<?php

class AsEnglishTest extends PHPUnit_Framework_TestCase {
  function testAsEnglish() {
    $this->assertEquals(
      '1, 2, and 3',
      hooray(1, 2, 3)->asEnglish());
  }

  function testSkipsOxfordCommaWhenOnlyGivenTwoItems() {
    $this->assertEquals(
      '1 and 2',
      hooray(1, 2)->asEnglish());
  }
}
