<?php

interface Veiculo {

	public function acelerar(int $vel);
	public function frenar(int $vel);
	public function trocarMarcha(int $marcha);
}


abstract class Civic implements Veiculo {

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


class Onix extends Civic{

	public function Correr(){

	}
}



$car = new Onix();
$car->acelerar(100);