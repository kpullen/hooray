<?php

class JoinTest extends PHPUnit_Framework_TestCase {
  function testJoinWithEmptyArray() {
    $this->assertEquals(
      '',
      hooray()->join());
  }

  function testJoinWithSingleItem() {
    $this->assertEquals(
      '1',
      hooray(1)->join());
  }

  function testDefaultJoinBehavior() {
    $this->assertEquals(
      '123',
      hooray(1, 2, 3)->join());
  }

  function testAlternateJoiner() {
    $this->assertEquals(
      '1|2|3',
      hooray(1, 2, 3)->join('|'));
  }

  function testJoinerAndTerminalJoiner() {
    $this->assertEquals(
      '1|2-3',
      hooray(1, 2, 3)->join('|', '-'));
  }

  function testIfEmpty() {
    $this->assertEquals(
      'nope',
      hooray()->join('', '', 'nope'));
  }
}
