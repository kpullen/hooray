<?php

Chain::add(
  'map',
  function($data, $action) {
    return
      array_map(
        $action,
        $data);
  });
