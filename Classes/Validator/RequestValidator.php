<?php

namespace Validator;

use Util\ConstantesGenericas;

class RequestValidator
{
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function processarRequest()
    {
        $retorno = utf8_decode(ConstantesGenericas::MSG_ERRO_TIPO_ROTA);
        if (in_array($this->request['metodo'], ConstantesGenericas::TIPO_REQUEST, true)) 
        {
            echo 'foi';
        }
        return $retorno;
    }
}
