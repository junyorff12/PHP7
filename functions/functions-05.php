<?php

function soma(int ...$valores) : string { // tipos de dados dos parametros e retorno.
    return array_sum($valores);
}

echo "a soma de 2 + 2 é = ".soma(2, 2);
echo "<br>";

echo "A soma de 44 + 33 é = ". soma(44, 33);
echo "<br>";
