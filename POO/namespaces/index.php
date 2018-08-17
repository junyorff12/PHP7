<?php

require_once("config.php");

use Cliente\Cadastro;

$pessoa = new Cadastro();

$pessoa->setName("Junyor FF12");
$pessoa->setEmail("jr@jr.com");
$pessoa->setSenha("123456");

$pessoa->registrarVenda();