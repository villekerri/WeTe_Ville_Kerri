<?php
$string = "I'll \"walk\" the <b onmouseover= alert('asd')>dog</b> now";  // notice \-sign before double quotes!

$a = htmlentities($string);
$b = html_entity_decode($string);
$c = htmlspecialchars($string);
$d = strip_tags($string, '<b>');

echo $a.", ".$b.", ".$c.", ".$d;
?>