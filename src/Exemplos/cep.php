<?php

require "../../vendor/autoload.php";

$cep = new Type\Cep('47640000');

echo $cep->cep();

$cep = new Type\CepTest();
$cep->testCep();