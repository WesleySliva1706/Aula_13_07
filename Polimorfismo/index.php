<?php

    require_once "Autoload.php";

    //Instânciando Objetos
    $h = new Homem();
    $c = new Cao();
    $g = new Gato();

    //Váriavel
    $Animais = ["", "", "", "", "", "", "", "", "", ""];

    for($x = 0; $x<10; $x++){
        $y = rand(1, 3);
        if($y == 1){
            $Animais[$x] = "Homem";
        }

        else if($y == 2){
            $Animais[$x] = "Cão";
        }

        else{
            $Animais[$x] = "Gato";
        }
    }

    foreach($Animais as $a){
        if($a == "Homem"){
            $h->setfala();
            echo "O $a fala: ".$h->fala().".<br>";
        }
        else if($a == "Cão"){
            $c->setfala();
            echo "O $a fala: ".$c->fala().".<br>";
        }
        else{
            $g->setfala();
            echo "O $a fala: ".$g->fala().".<br>";
        }
    }