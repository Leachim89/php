<?php

//não se pode instanciar uma classe abstrata, somente através de outra classe
//uma classe pode implementar várias interfaces
//a interface SOMENTE declara oque precisa ser colocado em uma classe, respeitando a hierarquia
interface Veiculo{

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){

        echo "O veículo acelerou até".$velocidade." km/h";
    }
    public function frear($velocidade){

        echo "O veículo frenou até" .$velocidade. " km/h";
    }
    public function trocarMarcha($marcha){

        echo "O veículo engatou a marcha".$marcha;
    }

}

class DelRey extends Automovel {

    public function empurrar(){

    }
}

$carro = new Automovel();
$carro -> acelerar(200);

?>