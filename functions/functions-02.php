<?php

$a = 10;

// passagem por valor
function troca($a)
{
    $a += 50;

    return $a;
}

echo troca($a);
echo "<br>";
echo $a;
echo "<br>";
//passagem por referencia

function trocaR(&$a)
{
    $a = 50;

    return $a;
}

echo trocaR($a);
echo "<br>";
echo $a;
