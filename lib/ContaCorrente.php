<?php

class ContaCorrente
{
    private string $cpf;
    private string $nome;
    private float $saldo ;

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
        $this->saldo = $saldo;
    }

    public function __toString(): string
    {
        return "CPF = $this->cpf \nSeu nome é : $this->nome \nSaldo =  $this->saldo";
    }

    /**
     * @throws Exception
     */
    public function depositar(float $valor) : float {
        if ($valor > 0){
            $this->saldo += $valor;
        }else{
            throw new Exception('Valor inválido !');
        }
        echo 'Valor Depositado Com Sucesso ;D' .PHP_EOL ;
        return $this->saldo;
    }


}