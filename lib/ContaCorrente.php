<?php

class ContaCorrente
{
    private string $cpf;
    private string $nome;
    private float $saldo;
    private static int $contasTotais = 0;

    /**
     * @param string $cpf
     * @param string $nome
     *
     */
    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
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
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     */
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

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

    public function __toString(): string
    {
        return "CPF = $this->cpf \nSeu nome é : $this->nome \nSaldo =  $this->saldo\n";
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