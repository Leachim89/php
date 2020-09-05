<?php

/**
 * métodos construtores devem ter os mesmos nomes das classes
 * métodos mágicos devem constar __, e no php7, ter o mesmo nome está ficando em desuso
*/
class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c)
    {
        $this-> logradouro = $a;
        $this-> numero = $b;
        $this-> cidade = $c;
    }

    //remover da memória
    public function __destruct(){
        
        var_dump("Destroy");
    }

    public function __toString()
    {
        return $this->logradouro.", ".$this->numero.", ".$this->cidade;
    }

}

 $meuEndereco = new Endereco("Rua 123 de Oliveira 4", "123","Santos");

 var_dump($meuEndereco);

 echo $meuEndereco;

 echo "<br>";

 unset($meuEndereco);

?>