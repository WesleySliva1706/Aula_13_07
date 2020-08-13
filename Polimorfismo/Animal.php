<?php

    class Animal{
        protected $som;

    //Método Construtor
    public function __construct($a = ""){
        $this->som = $a;
    }

    //Método Fala
    public function fala(){
        return $this->som;
    }
    }