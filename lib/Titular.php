<?php

class Titular extends Pessoa
{
    private ContaCorrente $conta;

    public function __construct(string $nome, string $cpf, ContaCorrente $conta)
    {
        parent::__construct($nome,$cpf);
        $this->conta = $conta;
    }

    /**
     * @return ContaCorrente
     */
    public function getConta(): ContaCorrente
    {
        return $this->conta;
    }


}