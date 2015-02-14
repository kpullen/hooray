<?php

Chain::addWithoutContext(
  'fill',
  function() {
    $args = func_get_args();
    if(count($args) == 2)
      array_unshift($args, 0);
    return call_user_func_array('array_fill', $args);
  });
