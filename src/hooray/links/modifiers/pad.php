<?php

Chain::add(
  'pad',
  function($data, $size, $value) {
    return array_pad($data, $size, $value);
  });
