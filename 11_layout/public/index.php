<?php

require_once "../vendor/autoload.php";

use SON\Exceptions\HttpStatusCodeException;

try {
    $route = new \App\Route;
} catch (HttpStatusCodeException $e) {
    // aqui você pode fazer o que quiser para exibir erros, inclusive carregar views
    header($e->getHeader());
    echo $e->getMessage();
    exit;
}
