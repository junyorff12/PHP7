<?php

namespace Cliente;

class Cadastro extends \Cadastro {

    public function registraVenda()
    {
	    echo "Venda registrada para ". $this->getNome();
    }

}

