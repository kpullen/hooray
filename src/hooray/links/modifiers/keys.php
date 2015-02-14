<?php

Chain::add(
  'keys',
  function($data) {
    return array_keys($data);
  });
