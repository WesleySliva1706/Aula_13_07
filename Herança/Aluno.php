<?php

    class Aluno extends Pessoa{
        private $cod; //Código
        private $tur; //Turma

    //Método Construtor
    public function __construct($a = 0, $b = ""){
        $this->cod = $a;
        $this->tur = $b;
    }

    public function setCod($a){
        $this->cod = $a;
    }

    public function getCod(){
        return $this->cod;
    }
    
    public function setTur($b){
        $this->tur = $b;
    }

    public function getTur(){
        return $this->tur;
    }

    public function result(){
        echo "Aluno<hr>";
        echo 'Nome: '.$this->getNome().'.<br>';
        echo 'RG: '.$this->getRG().'.<br>';
        echo 'Código: '.$this->getCod().'.<br>';
        echo 'Turma: '.$this->getTur().'.';
    }
}