<?php

class Pessoa {
    public static $nome = 'André Fauze Marcelino';
    
    public static function  dadosPessoa() {
        return 'Andre Marcelino';        
    }
}


echo  'metodo static => ' . Pessoa::dadosPessoa();
echo '<br />';
echo  'atributo static => ' . Pessoa::$nome;