<?php

Chain::add(
  'countValues',
  function($data) {
    return array_count_values($data);
  });
