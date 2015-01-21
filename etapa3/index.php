<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else { 
    session_start();
    ini_set('display_errors', 1);
    /**
     * Constantes
     */
    define('DEFAULT_CONTROLLER', 'home');
    define('DIR_ROOT', dirname(__FILE__));
    
    
  /**
   * Carrega o Sistema
   */
    
  require  DIR_ROOT . '/Vendor/autoload.php';
  require  DIR_ROOT . '/App/Functions/functions.php';
  require  DIR_ROOT . '/App/Functions/functionsTwig.php';
  require  DIR_ROOT . '/connetcion.php';
  require  DIR_ROOT . '/bootstrap.php';
}

echo '<h1>  pg index <br />' . $_SERVER["REQUEST_URI"] . '</h1>';