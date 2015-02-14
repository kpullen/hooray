<?php

class ProductTest extends PHPUnit_Framework_TestCase {
  function testProduct() {
    $this->assertEquals(
      384,
      hooray(2, 4, 6, 8)->product());
  }
}
