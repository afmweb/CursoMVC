<?php

namespace Acme\Classes;

class LoadTemplate{
    protected  $twig;
    private $loader;
    
    private function loader() {
        $this->loader = new \Twig_Loader_Filesystem( DIR_ROOT . '/App/Views' );
        return $this->loader;
    }
    
    public function init() {
        $this->twig = new \Twig_Environment( $this->loader(),
               [ 
                   'debug' => true,
                'cache'=> DIR_ROOT . '/Cache',
                   'auto_reload' => true
                ]);
        return $this->twig;
    }
}
