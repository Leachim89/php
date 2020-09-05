<?php

// a interface obriga a seguir os seus parâmetros
//deve-se manter os niveis de acesso, caso seja public todos devem ser public
interface Veiculo{

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo{

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

$carro = new Civic();
$carro -> trocarMarcha(3);

?>