<?php

namespace App\Core;
use Acme\Classes\AddSlashUrl as slash;

class CoreController {
    protected  $url;
    
    public function setUrl( $url ) {
        $this->url = $url;
    }
    
    /**
     * Adiciona barra ao final da url
     */
    private  function addSlashUri(){
        $urlSlash = new slash();
        return $urlSlash->addSlash();
    }
    
    /**
     * Verifica o numero de segmentos da url e pega o controller e o metodo
     */
    private function retornoControllerMetodo( $explodeUrl ) {
        if( count( $explodeUrl  ) <= 1 ):
            return ['controller' => $explodeUrl[1] ];
            else:
                return[  
                    'controller' => $explodeUrl[1],
                    'metodo' => $explodeUrl[2]
                ];
        endif;
    }
    
    public function controller() {
        if( isset( $this->url ) ):
            
                if( substr_count( $this->addSlashUri(), '/')  > 1 ):
                    
                        $explodeUrl = explode('/', $this->url);            
                        unset( $explodeUrl[0] );
                        $controller = $this->retornoControllerMetodo($explodeUrl);
                        return $controller;
                        
                        else:
                            return [ 'controller'=>DEFAULT_CONTROLLER ];
                endif;
                
                else:
                            return [ 'controller'=>DEFAULT_CONTROLLER ];
        endif;
    }

}
