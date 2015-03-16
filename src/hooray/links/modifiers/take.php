<?php

Chain::add(
  'take',
  function($data, $count) {
    return array_slice($data, 0, $count);
  });
