<?php

interface Veiculo {

	public function acelerar(int $vel);
	public function frenar(int $vel);
	public function trocarMarcha(int $marcha);
}


class Civic implements Veiculo {

	public function acelerar(int $v)
	{
		echo "O veiculo acelerou até a ". $v . " km/h.";
	}


	public function frenar(int $v)
	{
        echo "O veiculo frenou até a ". $v . " km/h.";
	}


	public function trocarMarcha(int $m)
	{
        echo "O veiculo mudou para a marcha ". $m . " ." ;
	}

}

$v = new Civic();

$v->acelerar(60);
echo "<br>";
$v->frenar(50);
echo "<br>";
$v->trocarMarcha(4);