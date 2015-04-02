<?php

Chain::add(
  'shuffle',
  function($data, $seed = null) {
    mt_srand($seed || microtime());
    $data = array_values($data);
    for ($i = count($data) - 1; $i > 0; $i--) {
      $j = mt_rand(0, $i);
      $tmp = $data[$i];
      $data[$i] = $data[$j];
      $data[$j] = $tmp;
    }
    return $data;
  });
