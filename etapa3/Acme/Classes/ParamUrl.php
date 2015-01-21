<?php

namespace Acme\Classes;
use  Acme\Classes\Url as  Url;

class ParamUrl {
    
    public static function getParam( $numeroIndex  ) {
        
        $explodeUrl = explode('/',  Url::getUrl());
        return $explodeUrl[ $numeroIndex ];
        
    }
}
