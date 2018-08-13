<?php

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c)
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct()
    {

    }

    public function __toString()
    {
        return $this->logradouro. ", ". $this->numero. ", ". $this->cidade.".";
    }

}

$myEnd = new Endereco("Rua Israel", "4598", "Teresina");

echo $myEnd;