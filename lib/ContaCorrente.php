<?php

class ContaCorrente extends Conta

{

    protected function tarifaSaque() : float
    {
        return 0.05;
    }
}