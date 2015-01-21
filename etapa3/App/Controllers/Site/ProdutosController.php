<?php

namespace App\Controllers\Site;

use \ App\Controllers\BaseController as BaseController;
use \ Acme\Classes\ParamUrl;

class ProdutosController extends BaseController {

    public function index() {
        $dados = array( 'titulo' => 'Proudtos' );
        $template = $this->twig->loadTemplate( 'Produtos.html' );
        $template->display( $dados );
    }

}
