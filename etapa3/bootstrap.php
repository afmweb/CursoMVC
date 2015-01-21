<?php

/**
 * Pegar a url
 */

$url = \Acme\Classes\Url::getUrl();

/**
 * Carregar Template
 */

$template = new \Acme\Classes\LoadTemplate();
$twig =  $template->init();


/**
 * Carregar Funções do Twig
 */
$twig->addFunction( $str_limit );
$twig->addFunction( $site_url );

/**
 * Chamar o baseController para pegar os controllers e metodos
 */
$baseController = new App\Controllers\BaseController();
$baseController->setUrl( $url );

/**
 * Pega os controllers
 */
$controller = $baseController->pegarController();
$classController = new $controller();
$classController->setTwig( $twig );

/**
 * Pegar o metodo
 */
$metodo = $baseController->pegarMetodo( $classController );
$classController->$metodo();