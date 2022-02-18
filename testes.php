<?php

require_once __DIR__.'/lib/Conta.php';
require_once __DIR__.'/lib/ContaCorrente.php';
require_once __DIR__.'/lib/ContaPoupanca.php';
require_once __DIR__.'/lib/Pessoa.php';
require_once __DIR__.'/lib/Titular.php';


$cliente = new Titular('Joao','123.456.789-10','Qlq coisa');
$conta = new ContaCorrente($cliente);

$ana = new Titular('Ana','1111111','endereco');
$contaAna = new ContaPoupanca($ana);

$contaAna->depositar(500);
$contaAna->sacar(100);
echo "Saldo da Ana : " . $contaAna->getSaldo() . PHP_EOL;

$conta->depositar(500);
$conta->sacar(100);
echo $conta->getSaldo();
