<?php

    require_once "Autoload.php";

    //Instanciando objetos
    $p = new Professor();
    $a = new Aluno();
    
    //Chamada de Métodos
    if($_POST['profalu']=="Professor"){
    //Set's
    $p->setNome($_POST['nome']);
    $p->setRG($_POST['rg']);
    $p->setReg($_POST['reg']);
    $p->setDisc($_POST['disc']);
    
    //Resultado
    $p->result();
    }

    else{
    //Set's
    $a->setNome($_POST['nome']);
    $a->setRG($_POST['rg']);
    $a->setCod($_POST['cod']);
    $a->setTur($_POST['tur']);
    
    //Resultado
    $a->result();
    }