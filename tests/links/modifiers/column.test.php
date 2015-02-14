<?php

class ColumnTest extends PHPUnit_Framework_TestCase {
  function testColumn() {
    $this->assertEquals(
      [1, 2, 3],
      hooray([['a' => 1], ['a' => 2], ['a' => 3]])
        ->column('a')
        ->realize());
  }
}
