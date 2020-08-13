<?php

    class Pessoa{
        private $nome; //Nome
        private $rg; //RG

    //Método Construtor
    public function __construct($a = "", $b = 0){
        $this->nome = $a;
        $this->rg = $b;
    }

    public function setNome($a){
        $this->nome = $a;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setRG($b){
        $this->rg = $b;
    }

    public function getRG(){
        return $this->rg;
    }
}