<?php

include("diceclasses.inc.php");

$faces = $_GET["faces"];
$throws = $_GET["throws"];
$bias = $_GET["bias"];

$results = array();

// make dice
$dice = new Dice($faces, $bias);
for ($i = 1; $i<=$throws; $i++) {
    $res = $dice->cast();
    $results[] = array('id' => strval($i), 'res' => strval($res));
}
$freqs = array();
for ($i = 1; $i<=$faces; $i++) {
    $freqs[] = array ('eyes' => strval($i), 'frequency' => strval($dice->getFreq($i)));
}
echo json_encode(array('faces'=>$faces,'results'=>$results,'frequencies'=>$freqs,'average'=>$dice->average($faces, $throws)));
echo "<br>";
echo "Average: " .$dice->average($faces, $throws);

?>