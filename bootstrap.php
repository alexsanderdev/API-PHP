<?php

/* CONSTANTES DO BANCO */
define('HOST', 'localhost');
define('BANCO', 'api_php');
define('USER', 'root');
define('SENHA', '');


/* OUTRAS CONSTANTES */
define('DS', DIRECTORY_SEPARATOR);
define('DIR_APP', __DIR__);
define('DIR_PROJETO', 'webservices/API_PHP');

if (file_exists('autoload.php')) {
    include 'autoload.php';
} else {
    die('Falha ao carregar autoload!');
}
