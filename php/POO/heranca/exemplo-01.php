<?php

//é sempre a classe filho que acessa os atributos e métodos da classe pai
    class Documento{

        private $numero;

        public function getNumero(){

            return $this-> numero;
        }

        public function setNumero($n){
            $this -> numero = $n;
        }
    }

    class Cpf extends Documento{

        public function validar() : bool
        {
            $numeroCpf = $this ->getNumero();
            return true;
        }
    }

    $doc = new Cpf();

    $doc ->setNumero("123456789-11");
    var_dump($doc->validar());
    echo "<br>";
    echo $doc -> getNumero();


?>