<?php

Chain::addWithoutContext(
  'range',
  function($start, $end, $step=1) {
    return range($start, $end, $step);
  });
