<?php

class ContaPoupanca extends Conta
{

    protected function tarifaSaque() : float
    {
        return 0.03;
    }
}