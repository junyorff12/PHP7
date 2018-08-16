 <?php


function __autoload($nomeClasse)
{
	require_once("$nomeClasse.php");
}

$o = new Onix();

$o->acelerar(80);
