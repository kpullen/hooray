<?php

Chain::addTerminal(
  'first',
  function($data, $ifEmpty = null) {
    return
      empty($data) ?
        $ifEmpty :
        array_values($data)[0];
  });
