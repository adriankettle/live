<?php

$a[] = 'Anna';
$a[] = 'Barbie';
$a[] = 'Charline';
$a[] = 'Samatha';
$a[] = 'Dahlia';
$a[] = 'Latoya';
$a[] = 'Horace';
$a[] = 'Ornella';
$a[] = 'Keisha';
$a[] = 'Olivia';
$a[] = 'Patrice';
$a[] = 'Kelly';
$a[] = 'Jamie';
$a[] = 'Kim';

$q = $_REQUEST['q'];

$hint = "";

if ($q !== "") {
  $q = strtolower($q);
  $len = strlen($q);
  foreach($a as $name){
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      }else {
        $hint .= "$name";
      }
    }
  }
}

echo $hint === "" ? "no suggestion": $hint;

?>
