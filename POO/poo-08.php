<?php 

abstract class Animal {

	public function falar()
	{

		return "fala";
	}

	public function mover()
	{

		return "anda";

	}

}


class Dog extends Animal{

	public function falar()
	{

		return "O cachorro late";
	}
}

class Cat extends Animal{

	public function falar()
	{
		return "O gato Mía";

	}
}

$d = new Dog;
$c = new Cat;

echo $d->falar(); printf("<br>");


echo $c->falar();