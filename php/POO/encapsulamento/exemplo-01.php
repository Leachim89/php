<?php
/**
 * Encapsulamento -
 * pode ser modificado um atributo ou um método
 */

 class Pessoa{

    //visualizado por todos
    public $nome = "Rasmus Lerdorf";
    //somente quem estiver dentro da própria classe ou quem herda da classe filha
    protected $idade = 48; 
    //somente a própria classe
    private $senha ="123456";

    public function verDados(){

        echo $this -> nome. "<br>";
        echo $this -> idade. "<br>";
        echo $this -> senha. "<br>";
    }

 }

 $objeto = new Pessoa();

 //echo $objeto -> senha."<br>";

 $objeto -> verDados();

 

?>