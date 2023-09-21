<?php


$gods =  array();
$gods[] = "bisnu";
$gods[] = "ram";
$gods[] = "sita";
$gods[] = "raman";
$gods[] = "shiva";
// print_r($gods);

$serchString = strtolower($_GET['search']);
$hint = '';
$len = strlen($serchString);
if ($len == 0) {
    '';
    exit(0);
}
foreach ($gods as $god) {
    if ($serchString == strtolower(substr($god, 0, $len))) {
        $hint .= $god . ",";
    }
}
echo $hint;
