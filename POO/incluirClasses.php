<?php



spl_autoload_register(function ($nomeClasse)
{   
	
	if (file_exists($nomeClasse . ".php")) {
		
		require_once("$nomeClasse". ".php");
	}
});



spl_autoload_register(function ($nomeClasse)
{

	if (file_exists("abstract" . DIRECTORY_SEPARATOR . $nomeClasse . ".php")){

		require_once("abstract" . DIRECTORY_SEPARATOR .  $nomeClasse . ".php");
	}
});