<?php

namespace App\vendas;

class Compra {

	public $id, $produtos, $usuario;

	public function cadastrar(array $produtos, usuario $usuario)
	{
		$this->id = rand(0, 1000);
		$this->produtos = $produtos;
		$this->usuario = $usuario;
		
	}

	public function imprimir()
	{
		$r = "Compra id " . $this->id . "<hr>";
		$r .= "Produtos" . "<br>";
		

		foreach ($this->produtos as $produto) {

			$r .= $produto->imprimir();
			
		}

		$r .= "<hr>";
		$r .= "Usuario" . $this->usuario->imprimir();

		return $r;
	}
}