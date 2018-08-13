<?php

class Carro {
	private $modelo;
	private $ano;
	private $motor;

	public function getModelo() {
		return $this->modelo;
	}

	public function getAno():int {
		return $this->ano;
	}

	public function getMotor():float {
		return $this->motor;
	}

	public function setModelo($modelo) {
		$this->modelo = $modelo;

	}

	public function setAno($ano) {
		$this->ano = $ano;

	}

	public function setMotor($motor) {
		$this->motor = $motor;

	}

	public function exibir() {
		$exibi = array(
			"modelo" => $this->getModelo(),
			"ano"    => $this->getAno(),
			"motor"  => $this->getMotor()
		);

		return $exibi;
	}
}

$myc = new Carro();

$myc->setModelo("Onix");
$myc->setMotor(1.6);
$myc->setAno(2019);

print_r($myc->exibir());