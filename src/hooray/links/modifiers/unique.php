<?php

Chain::add(
  'unique',
  function($data) {
    return
      hooray(
        array_unique(
          $data,
          SORT_REGULAR))
      ->values()
      ->realize();
  });
