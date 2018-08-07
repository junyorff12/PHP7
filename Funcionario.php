<?php

class Funcionario{
	var $horasTrabMes = 0;

	function registrarPonto($inicio, $fim){
		$this->horasTrabMes += ($inicio - $fim);
	}

	function registrarPonto($horas){
		$this->horasTrabMes += $horas;
	}  
}