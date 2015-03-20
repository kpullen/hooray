<?php

Chain::add(
  'unshift',
  function($data, $element) {
    array_unshift($data, $element);
    return $data;
  });