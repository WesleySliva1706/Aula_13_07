<?php

spl_autoload_register(function ($nomeClasse){
    require_once "$nomeClasse.php";
});