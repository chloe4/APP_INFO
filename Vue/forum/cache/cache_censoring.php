<?php

define('PUN_CENSOR_LOADED', 1);

$search_for = array (
  0 => '%(?<=[^\\p{L}\\p{N}])(Connard)(?=[^\\p{L}\\p{N}])%iu',
);

$replace_with = array (
  0 => 'Idiot',
);

?>