<?php

namespace App\Controllers\Site;

use \ App\Controllers\BaseController as BaseController;
use \Acme\Classes\Email as Email;

class ContatoController extends BaseController {

    public function index() {

        $dados = array('titulo' => 'Contato');
        $template = $this->twig->loadTemplate('Site/contato.html');
        $template->display($dados);
    }

    public function enviarEmail() {
        
                $dados = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'):
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

            if ($email):
                $enviarEmail = new Email();
                $enviarEmail->setAssunto('Contato MVC');
                $enviarEmail->setQuem($nome);
                $enviarEmail->setPara('marcelinoandre@gmail.com');
                $mensagemEmail = '<h2>Mensaem Envida pelo projeto MVC</h2>';
                $mensagemEmail .= '<h3>Mensaem Envida na data <i>' . date('d/m/Y H:i:s') . '</i>'
                                                    . 'Enviada por '.$nome.' - Email: '.$email.'</h3>';
                $mensagemEmail .= $mensagem;
                $enviarEmail->setBody($mensagemEmail);
                if ($enviarEmail->enviarEmail()):
                    $dados = ['mensagem' => 'Email enviado com sucesso'];
                else:
                    $dados = [ 'mensagem' => 'Ocorreu uma falha ao tentar enviar o email'];
                endif;
            else:
                $dados = [ 'mensagem' => 'Email inválido'];


            endif;
            
          

        $template = $this->twig->loadTemplate('Site/contato.html');
        //$template = $this->twig->loadTmplate('contato.html');
        $template->display($dados);
          else:
            $this->index();
        endif;
    }

}
