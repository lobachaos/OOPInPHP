<?php

require_once __DIR__.'/lib/ContaCorrente.php';
require_once __DIR__.'/lib/Pessoa.php';
require_once __DIR__.'/lib/Titular.php';

$cliente = new Titular('Joao','123.456.789-10',new ContaCorrente());

echo ContaCorrente::getContasTotais();

