<?php

class Pessoa {
    public  $nome = 'André Fauze Marcelino';
    
    public function __construct() {
        echo 'Meu nome eh: ' . $this->nome;
    }
    public static function  dadosPessoa() {
        return 'Andre Marcelino';        
    }
}


$pessoa = new Pessoa();
