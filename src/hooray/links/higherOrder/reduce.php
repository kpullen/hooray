<?php

Chain::addTerminal(
  'reduce',
  function($data, $action, $initial = null) {
    return
      array_reduce(
        $data,
        $action,
        $initial);
  });
