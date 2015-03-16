<?php

Chain::add(
  'drop',
  function($data, $number) {
    return array_slice($data, $number);
  });
