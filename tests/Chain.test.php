<?php

class ChainTest extends PHPUnit_Framework_TestCase {
  function testRun() {
    Chain::add(
      'test1',
      function($arg) { return $arg + 1; });
    $this->assertEquals(
      2,
      Chain::run('test1', [1])->realize());
  }

  function testRunDoesNotNeedArgs() {
    Chain::add(
      'test1',
      function() { return 1; });
    $this->assertEquals(
      1,
      Chain::run('test1')->realize());
  }

  function testAddWithoutContextRemovesFirstArg() {
    Chain::addWithoutContext(
      'test1',
      function($arg) { return $arg + 1; });
    $this->assertEquals(
      2,
      Chain::run('test1', [5, 1])->realize());
  }
}
