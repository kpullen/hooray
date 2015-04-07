<?php

Chain::add(
  'unique',
  function($data) {
    return
      hooray(array_unique($data))
      ->values()
      ->realize();
  });
