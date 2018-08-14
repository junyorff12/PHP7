<?php

class Documento {
    
    private $numero;

    public function getNumero()
    {
    	return $this->numero;

    }

    public function setNumero($n)
    {
    	$this->numero = $n;
    }

}

class Cpf extends Documento {
        
        public function validarCpf($n)
        {
        	
        	echo $this->getNumero()."<br>";
        	return true;
        }
    }

$myDoc = new Cpf();
$myDoc->setNumero("02989849386");

var_dump($myDoc->validarCpf($myDoc->getNumero()));
echo "<br>";
print_r(get_class_methods('Documento'));