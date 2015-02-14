<?php

require_once 'hooray/Chain.php';
require_once 'hooray/Hooray.php';

require_once 'hooray/links/builders/fill.php';
require_once 'hooray/links/builders/fillKeys.php';
require_once 'hooray/links/builders/range.php';

require_once 'hooray/links/breakTheChain/pop.php';
require_once 'hooray/links/breakTheChain/product.php';
require_once 'hooray/links/breakTheChain/shift.php';
require_once 'hooray/links/breakTheChain/sum.php';

require_once 'hooray/links/modifiers/chunk.php';
require_once 'hooray/links/modifiers/countValues.php';
require_once 'hooray/links/modifiers/flip.php';
require_once 'hooray/links/modifiers/growKeys.php';
require_once 'hooray/links/modifiers/shrinkKeys.php';
require_once 'hooray/links/modifiers/values.php';
require_once 'hooray/links/modifiers/chunk.php';

function hooray() {
  $args = func_get_args();
  return
    new Hooray(
      count($args) == 1 ?
      $args[0] :
      $args);
}
