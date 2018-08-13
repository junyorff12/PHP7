<?php

class Pessoa{
	public $nome;

	public function falar()
	{
		return "my name is ". $this->nome;
	}
}

$p1 = new Pessoa();

$p1->nome = "junyor Silva";
echo $p1->falar();