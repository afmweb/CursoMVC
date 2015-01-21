<?php

namespace Acme\Classes;

class Email extends \PHPMailer {

    private $email;
    private $body;
    private $quem;
    private $para;
    private $copia;
    private $assunto;
    private $mensagem;

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function setQuem($quem) {
        $this->quem = $quem;
    }

    public function setPara($para) {
        $this->para = $para;
    }

    public function setCopia($copia) {
        $this->copia = $copia;
    }

    public function setAssunto($assunto) {
        $this->assunto = $assunto;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    public function enviarEmail() {
        $this->CharSet = "UTF-8";
        $this->SMTPSecure = 'ssl';
        $this->isSMTP();
        $this->Host = "?";
        $this->Port;
        $this->SMTPAuth = TRUE;
        $this->Userna = "?";
        $this->Password = "";
        $this->isHTML();
        $this->setFrom('Contato@afmweb.com.br');
        $this->FromName = $this->quem;
        $this->addAddress($this->para);
        $copia = $this->copia;

        if (!empty($copia)):
            $this->addAddress($copia);
        endif;
        
        $this->Subject = $this->assunto;
        $this->AltBody = "Para voce ver esse email, tenha certeza de estar vendo em um programa que aceite ver HTML";
        
        $this->msgHTML(  $this->body );
        
        if( !$this->send() ):
            return false;            
        endif;
        
        return true;
    }

}
