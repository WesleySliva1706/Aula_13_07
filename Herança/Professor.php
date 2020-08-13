<?php

    class Professor extends Pessoa{
        private $reg; //Registro
        private $disc; //Disciplina

    //Método Construtor
    public function __construct($a = 0, $b = ""){
        $this->reg = $a;
        $this->disc = $b;
    }

    public function setReg($a){
        $this->reg = $a;
    }

    public function getReg(){
        return $this->reg;
    }
    
    public function setDisc($b){
        $this->disc = $b;
    }

    public function getDisc(){
        return $this->disc;
    }

    public function result(){
        echo "Professor<hr>";
        echo 'Nome: '.$this->getNome().'.<br>';
        echo 'RG: '.$this->getRG().'.<br>';
        echo 'Registro: '.$this->getReg().'.<br>';
        echo 'Disciplina: '.$this->getDisc().'.';
    }
}