<?php

Chain::addWithoutContext(
  'fillKeys',
  function($keys, $value) {
    return array_fill_keys($keys, $value);
  });
