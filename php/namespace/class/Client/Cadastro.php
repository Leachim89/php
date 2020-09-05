<?php

namespace Client;

// \ para voltar na pasta raiz
class Cadastro extends \Cadastro{

    public function registrarVenda(){

        echo "Foi registrado um produto".$this->getName();
    }
}

?>