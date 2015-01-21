<?php
namespace App\Controllers\Admin;
use \ App\Controllers\BaseController as  BaseController;

class AdmController extends BaseController{

    public function index() {        
        $dados = ['titulo'=>'Login'];
        $template = $this->twig->loadTemplate('Admin/login.html');
        $template->display($dados);
    }
    
    public function logar(   ) {
        echo 'logar xxxxxxxxxxxxxxxxxxx';
}
}

