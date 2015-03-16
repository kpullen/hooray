<?php

Chain::add(
  'filter',
  function($data, $action) {
    return
      array_filter(
        $data,
        $action);
  });
