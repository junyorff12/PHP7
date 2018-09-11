<?php

use App\vendas\Usuario;
use App\vendas\Compra;
use App\vendas\Produto;
use App\estoque\Estoque;

require_once '../../vendor/autoload.php';

$u = new Usuario();

$u->cadastrar("jrff12", 31);

$p1 = new Produto();
$p2 = new Produto();

$p1->cadastrar(1, "Produto1");
$p2->cadastrar(2, "Produto2");

$c = new Compra();
$c->cadastrar(
            
            array(
            	"p1" => $p1,
            	"p2" => $p2,

            ), $u
);

echo $c->imprimir();

$e = new Estoque();

echo $e->getTotal();