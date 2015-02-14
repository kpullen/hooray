<?php

Chain::add(
  'column',
  function($data, $column) {
    return array_column($data, $column);
  });
