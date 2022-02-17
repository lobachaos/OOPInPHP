<?php

class ContaCorrente
{
    private float $saldo;
    private static int $contasTotais = 0;

    public function __construct()
    {
        $this->saldo = 0.0;
        self::$contasTotais++;
    }

    public function __destruct()
    {
        self::$contasTotais--;
    }

    /**
     * @return int
     */
    public static function getContasTotais(): int
    {
        return self::$contasTotais;
    }

    /**
     * @return string
     */

    /**
     * @return float
     */
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * @param float $saldo
     */
    public function setSaldo(float $saldo): void
    {
        if ($saldo < 0) {
            echo 'Valor Inválido. Por favor tente novamente.' . PHP_EOL;
            return;
        }
        $this->saldo = $saldo;
    }

    public function depositar(float $valor): void
    {
        if ($valor < 0) {
            echo 'Valor Inválido. Por favor tente novamente.' . PHP_EOL;
            return;
        }
        $this->saldo += $valor;
    }


}