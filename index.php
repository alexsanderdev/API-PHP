<?php

use Util\Rotas;
use Validator\RequestValidator;

require_once('bootstrap.php');

try {
    $RequestValidator = new RequestValidator(Rotas::getRotas());
    $retorno = $RequestValidator->processarRequest();

} catch (Exception $exception) {
    echo $exception->getMessage();
}
