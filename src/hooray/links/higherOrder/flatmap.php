<?php

Chain::add(
  'flatmap',
  function($data, $action) {
    return
      hooray($data)
      ->reduce(function($carry, $datum) use ($action) {
        $result = $action($datum);
        if(!is_array($result))
          $result = [$result];
        return array_merge($carry, $result);
      },
      []);
  });
