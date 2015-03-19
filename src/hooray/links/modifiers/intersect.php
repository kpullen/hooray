<?php

Chain::add(
  'intersect',
  function($data, $other) {
    return
      array_intersect(
        $data,
        Hooray::unwrap([$other]));
  });