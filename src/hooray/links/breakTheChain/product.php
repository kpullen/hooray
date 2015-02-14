<?php

Chain::addTerminal(
  'product',
  function($data) {
    return array_product($data);
  });
