<?php

require_once "vendor/autoload.php";

use vince\digitalcep\Search;

$busca = new Search;

$resultado = $busca->pegaEnderecoCep('90050180');

print_r($resultado);
