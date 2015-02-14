<?php

// This bad boy seems off. Why not decompose this into 
// remove(offset, length) and insert(position, values)?

Chain::add(
  'splice',
  function($data, $offset, $length, $replacement) {
    array_splice(
      $data,
      $offset,
      $length,
      $replacement);
    return $data;
  });
