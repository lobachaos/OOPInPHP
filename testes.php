<?php

require_once __DIR__.'/lib/ContaCorrente.php';

$conta = new ContaCorrente('123.456.789-10','Samara');


$conta->depositar(100.0);

echo $conta;