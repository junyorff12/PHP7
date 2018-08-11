<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

$dt = new DateTime();

echo date("l");
echo "<br>";
echo strftime("%A %B");
echo "<br>";
echo $dt->format("l, d/m/Y H:i:s");