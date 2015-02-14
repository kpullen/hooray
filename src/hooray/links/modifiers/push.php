<?php

Chain::add(
  'push',
  function() {
    $args = func_get_args();
    $data = array_shift($args);
    foreach($args as $arg)
      $data[] = $arg;
    return $data;
  });
