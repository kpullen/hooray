<?php

class Hooray {

  static function unwrap($wrapped) {
    $unwrapped = $wrapped;
    if(count($wrapped) == 1) {
      if(is_array($wrapped[0]))
        $unwrapped = $wrapped[0];
      if($wrapped[0] instanceof Hooray)
        $unwrapped = $wrapped[0]->realize();
    }
    return $unwrapped;
  }

  function __construct($data) {
    $this->data = $data;
  }

  function __call($name, $args) {
    array_unshift(
      $args,
      $this->data);
    return Chain::run(
      $name,
      $args);
  }

  function realize() {
    return $this->data;
  }
}