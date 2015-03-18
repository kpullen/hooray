<?php

Chain::addTerminal(
  'asEnglish',
  function($data, $ifEmpty = '') {
    return
      hooray($data)
      ->join(', ', ', and ', $ifEmpty);
  });