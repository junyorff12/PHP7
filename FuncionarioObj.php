<?php
include "Funcionario.php";

$f1 = new Funcionario();

$f1->registrarPonto(8, 17);

echo $f1->horasTrabMes;