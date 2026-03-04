<?php

//  Aula 1 de PHP orientado a objetos
class Cliente{
    //classe de Cliente


    public $nome ; //atributos
    public $cpf ;
}

$c1 = new Cliente ; //instancias
$c2 = new Cliente ;

$c2 ->nome = "Guilherme" ; //atribuindo valores aos atributos do objeto 
$c1 -> nome = "Yasmim";
$c1 -> cpf = "2322323232";
$c2 -> cpf = "1292090192" ; 


var_dump($c2 , $c1) ;  //get dos valores


?>