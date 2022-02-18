<?php

class Titular extends Pessoa
{
    private string $endereco;

    public function __construct(string $nome, string $cpf, string $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->$endereco = $endereco;
    }

}