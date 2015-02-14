<?php

Chain::add(
  'growKeys',
  function($data) {
    return array_change_key_case($data, CASE_UPPER);
  });
