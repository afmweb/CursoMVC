<?php

namespace App\Controllers\Site;

use \ App\Controllers\BaseController as  BaseController;
use  \App\Models\Site\NoticiasModel as noticias;

class HomeController extends BaseController {

    public function index() {
        /**
         * Listagem das Noticias
         */
        $noticias = noticias::all();
       // dump( $noticias );
        
        $dados = array('titulo' => 'Página Inicial', 'noticias'=>$noticias);
        $template = $this->twig->loadTemplate('home.html');
        $template->display($dados);
    }

    public function produtos() {
        $dados = array( 'opcao1', 'opcao2', 'opcao3', 'opcao4', 'opcao5'  );
        dump($dados);
    }
}
