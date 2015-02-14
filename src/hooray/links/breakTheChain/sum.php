<?php

Chain::addTerminal(
  'sum',
  function($data) {
    return array_sum($data);
  });
