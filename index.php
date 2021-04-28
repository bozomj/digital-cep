<?php
require_once "vendor/autoload.php";
use bozo\dio_php\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode('38207100');

print_r($resultado);