<?php

Chain::addTerminal(
  'join',
  function($data, $joiner = '', $terminalJoiner = null, $ifEmpty = '') {
    if(is_null($terminalJoiner))
      $terminalJoiner = $joiner;

    switch(count($data)) {
      case 0:
        return $ifEmpty;
      case 1:
        return $data[0];
      default:
        $last = array_pop($data);
        return join($terminalJoiner, [join($joiner, $data), $last]);
    }
  });