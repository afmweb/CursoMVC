<?php

class Pessoa {
/**
 * Atributos são as variaveis
 */
    public $nome;
    public $idade;
    
    /**
     * Metodos são as funções
     */
    
    public function meusDados() {
        return 'Meu nome é André Fauze Marcelino';
    }
    
    public function dadosPessoa() {
      return  $this->meusDados();
    }

}

$pessoa = new Pessoa();
echo $pessoa->dadosPessoa();
