<?php

Chain::addTerminal(
  'shift',
  function($data) {
    return array_shift($data);
  });
