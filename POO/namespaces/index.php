<?php

require_once ("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setName("Jrff12");
$cad->setEmail("jr@jr.com");
$cad->setSenha("1234");

$cad->registrarVenda();

echo $cad;