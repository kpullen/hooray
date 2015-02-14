<?php

Chain::add(
  'shrinkKeys',
  function($data) {
    return array_change_key_case($data, CASE_LOWER);
  });
