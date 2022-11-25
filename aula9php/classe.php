<?php
    class Cachorro{ //Criando a classe
        //Atributos
        var $nome;
        var $raca;
        var $peso;
        //Métodos
        function latir(){
            return "Latido do cachorro {$this->nome}: auauauau";
        }
    }
    //Instância do Objeto
    $cac = new Cachorro(); //Criando o objeto
    $cac->nome = "Lessy"; //Atribuindo valor
    $cac->raca = "Husky"; //Atribuindo valor
    $cac->peso = "15kg"; //Atribuindo valor
    echo $cac->latir(); //Executando a função/método
?>