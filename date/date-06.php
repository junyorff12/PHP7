<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("l, d/m/Y H:i:s");

echo "<br>";
$dt->add($periodo);
echo "<br>";
echo $dt->format("l, d/m/Y H:i:s");