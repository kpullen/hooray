<?php

require_once 'hooray/Chain.php';
require_once 'hooray/Hooray.php';

require_once 'hooray/links/breakTheChain/asEnglish.php';
require_once 'hooray/links/breakTheChain/first.php';
require_once 'hooray/links/breakTheChain/join.php';
require_once 'hooray/links/breakTheChain/pop.php';
require_once 'hooray/links/breakTheChain/product.php';
require_once 'hooray/links/breakTheChain/shift.php';
require_once 'hooray/links/breakTheChain/sum.php';

require_once 'hooray/links/higherOrder/filter.php';
require_once 'hooray/links/higherOrder/flatmap.php';
require_once 'hooray/links/higherOrder/map.php';
require_once 'hooray/links/higherOrder/reduce.php';

require_once 'hooray/links/modifiers/chunk.php';
require_once 'hooray/links/modifiers/column.php';
require_once 'hooray/links/modifiers/countValues.php';
require_once 'hooray/links/modifiers/drop.php';
require_once 'hooray/links/modifiers/flip.php';
require_once 'hooray/links/modifiers/growKeys.php';
require_once 'hooray/links/modifiers/intersect.php';
require_once 'hooray/links/modifiers/keys.php';
require_once 'hooray/links/modifiers/pad.php';
require_once 'hooray/links/modifiers/push.php';
require_once 'hooray/links/modifiers/shrinkKeys.php';
require_once 'hooray/links/modifiers/shuffle.php';
require_once 'hooray/links/modifiers/splice.php';
require_once 'hooray/links/modifiers/take.php';
require_once 'hooray/links/modifiers/unique.php';
require_once 'hooray/links/modifiers/unshift.php';
require_once 'hooray/links/modifiers/values.php';

function hooray() {
  return
    new Hooray(
      Hooray::unwrap(func_get_args()));
}
