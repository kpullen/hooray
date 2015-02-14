<?php

Chain::addTerminal(
  'pop',
  function($data) {
    return array_pop($data);
  });
