<?php

namespace Util;

class Rotas
{

    public static function getRotas()
    {
    
        $url  = self::getURLs();

        $request = [];
        $request['Rota'] = strtoupper($url[0]);
        $request['Recurso'] = $url[1] ? $url[1] : null;
        $request['ID'] = $url[2] ? $url[2] : null;
        $request['Metodo'] = $_SERVER['REQUEST_METHOD'];
        var_dump($request);
        return $request;

    }

    public static function getURLs()
    {
        $uri = str_replace('/'. DIR_PROJETO,'', $_SERVER['REQUEST_URI']);
        return explode('/', trim($uri, '/'));
    }

}