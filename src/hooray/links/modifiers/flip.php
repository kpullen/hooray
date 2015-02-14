<?php

Chain::add(
  'flip',
  function($data) {
    return array_flip($data);
  });
