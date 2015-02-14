<?php

Chain::add(
  'values',
  function($data) {
    return array_values($data);
  });
