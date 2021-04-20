<?php

namespace Validator;

use Util\ConstantesGenericas;
use Util\Json;

class RequestValidator
{
    private $request;
    private $dadosRequest = [];

    const GET = 'GET';
    const UPDATE = 'UPDATE';
    const DELETE = 'DELETE';
    CONST PUT = 'PUT';

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function processarRequest()
    {
        $retorno = utf8_decode(ConstantesGenericas::MSG_ERRO_TIPO_ROTA);
        if (in_array($this->request['metodo'], ConstantesGenericas::TIPO_REQUEST, true)) 
        {
            $retorno = $this->direcionarRequest();
        }
        return $retorno;
    }

    private function direcionarRequest()
    {
        if($this->request['metodo'] !== self::GET && $this->request['metodo'] !== self::DELETE)
        {
            $this->dadosRequest = Json::tratarJson();
        }
    }
}
