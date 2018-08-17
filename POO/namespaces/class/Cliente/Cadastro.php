<?php

namespace Cliente;

class Cadastro extends \Cadastro {

	public function registrarVenda()
	{
		echo "Venda efetuada para ". $this->getName();
	}
}