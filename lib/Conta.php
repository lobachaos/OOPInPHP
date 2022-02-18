<?php

abstract class Conta
{
    private Titular $titular;
    private float $saldo;
    private static int $contasTotais = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
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
     * @return Titular
     */
    public function getTitular(): Titular
    {
        return $this->titular;
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

    public function depositar(float $valor): void
    {
        if ($valor < 0) {
            echo 'Valor Inválido. Por favor tente novamente.' . PHP_EOL;
            return;
        }
        $this->saldo += $valor;
    }

    public function sacar(float $valor): void
    {
        if ($this->saldo < $valor) {
            echo "Você não possui saldo suficiente :(" . PHP_EOL;
            return;
        }
        $valorTarifa = $valor * $this->tarifaSaque();
        $this->saldo -= $valor + $valorTarifa ;
    }

    abstract protected function tarifaSaque();

}