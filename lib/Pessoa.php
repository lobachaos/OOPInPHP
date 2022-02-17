<?php

class Pessoa
{
    protected string $nome;
    protected string $cpf;

    /**
     * @param string $nome
     * @param string $cpf
     */
    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
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
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @param string $cpf
     */
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

}