<?php

require_once __DIR__.'/lib/ContaCorrente.php';

$conta = new ContaCorrente('123.456.789-10','Samara');

$conta->depositar(-100.0);
echo $conta;

new ContaCorrente('111.111.111-11','Joazim');

echo ContaCorrente::getContasTotais();