<?php

define('HOST', 'localhost');
define('BANCO', 'api_php');
define('USER', 'root');
define('SENHA', '');

define('DS', DIRECTORY_SEPARATOR);
define('DIR_APP', __DIR__);

if(file_exists('autoload.php'))
{
    include 'autoload.php';
}
else
{
 echo 'Erro ao incluir arquivo de configuração';
 exit;
}