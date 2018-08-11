<?php

//$ts = strtotime("2001-09-11");

$ts = strtotime("now");
$td = strtotime("+1 day");
$tw = strtotime("+1 week");

echo date("l, d/m/Y", $ts);
echo "<br>";
echo date("l, d/m/Y", $td);
echo "<br>";
echo date("l, d/m/Y", $tw);