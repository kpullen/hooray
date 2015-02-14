<?php

class ChunkTest extends PHPUnit_Framework_TestCase {
  function testChunk() {
    $this->assertEquals(
      [[1], [2], [3]],
      hooray(1, 2, 3)
        ->chunk(1)
        ->realize());
  }

  function testChunkAcceptsPreserveKeys() {
    $this->assertEquals(
      [['asdf' => 1], ['qwerty' => 2]],
      hooray(['asdf' => 1, 'qwerty' => 2])
        ->chunk(1, true)
        ->realize());
  }
}
