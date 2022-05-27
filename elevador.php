<?php

class Elevador
{

    private $andarAtual;
    private $capacidade;
    private $totalAndares;
    private $qtdPessoas;
    private $verifica;

    function __construct()
    {
        $this -> capacidade = 8;
        $this -> andarAtual = rand(0, 12);
        $this -> totalAndares = 12;
        $this -> qtdPessoas = rand(0, 8);
    }

    //andar
    function setAndarAtual($novoAndar)
    {
        $this -> andarAtual = $novoAndar;
    }
    
    function getAndarAtual()
    {
        return $this -> andarAtual;
    }

    //capacidade
    function setCapacidade($capacidade)
    {
        $this -> setCapacidade = $capacidade;
    }

    function getCapacidade()
    {
        return $this -> capacidade;
    }


    //total de andares
    function setTotalAnd($totalAnd)
    {
        $this -> totalAndares = $totalAnd;
    }

    function getTotalAnd()
    {
        return $this -> totalAndares;
    }

    //quantidade de pessoas
    function setQtdPessoas($qtdPessoas)
    {
        $this -> qtdPessoas = $qtdPessoas;
    }
    
    function getQtdPessoas()
    {
        return $this -> qtdPessoas;
        
    }

}

?>