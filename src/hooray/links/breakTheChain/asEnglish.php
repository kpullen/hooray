<?php

Chain::addTerminal(
  'asEnglish',
  function($data, $ifEmpty = '') {
    return
      count($data) == 2 ?
        hooray($data)
          ->join(' and ') :
        hooray($data)
          ->join(', ', ', and ', $ifEmpty);
  });