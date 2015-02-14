<?php

Chain::add(
  'chunk',
  function($data, $chunkSize, $preserveKeys=false) {
    return array_chunk($data, $chunkSize, $preserveKeys);
  });
